<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use App\Models\Customer;
use App\Models\Session;
use App\Rules\CustomerHasPendingPayment;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    protected $validator;

    public function __construct()
    {
        $this->middleware('auth');
        $this->validator = [
            'name' => ['required', 'string', 'not_regex:/\d/', 'max:255'],
            'phone' => ['required', 'integer', 'unique:customers,phone', 'digits:10'],
            'emergency_phone' => ['required', 'required', 'different:phone', 'digits:10'],
            'email' => ['bail', 'email', 'unique:customers,email', 'nullable', 'max:255'],
            'blood_group_id' => ['bail', 'required', 'integer', 'exists:blood_groups,id'],
            'is_active' => ['bail', 'required', 'integer', Rule::in([0, 1])]
        ];
    }

    public function index()
    {
        return view('customers.index', [
            'customers' => Customer::orderBy('name')->paginate(15),
            'bloodGroups' => BloodGroup::orderBy('name')->get()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validator);

        Customer::create($request->all());

        return back()
            ->with('success', 'La información del cliente se ha guardado con éxito.');
    }

    public function show(string $id)
    {
        $relationships = [
            'attendedSessions' => function ($attendedSessions) {
                $attendedSessions
                    ->wherePivot('attended', 1)
                    ->with('weekDay', 'session')
                    ->orderBy('attendance_date', 'desc');
            },
            'payments' => function ($payments) {
                $payments
                    ->with('fare', 'paymentStatus', 'paymentType')
                    ->orderBy('payment_datetime', 'asc')
                    ->orderBy('created_at', 'desc');
            },
            'bloodGroup'
        ];

        try {
            $customer = Customer::with($relationships)->findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return to_route('customers')
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el cliente solicitado.'
                ]);
        }

        return view('customers.show', [
            'customer' => $customer,
            'bloodGroups' => BloodGroup::orderBy('name')->get()
        ]);
    }

    public function update(Request $request, string $id)
    {
        $this->validator['phone'] = ['bail', 'required', 'integer', 'digits:10', "unique:customers,phone,{$id}"];
        $this->validator['email'] = ['bail', 'email', "unique:customers,email,{$id}", 'nullable', 'max:255'];

        $this->validate($request, $this->validator);

        try {
            $customer = Customer::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el cliente solicitado.'
                ]);
        }

        $customer->update($request->all());

        return back()
            ->with('success', 'La información del cliente se ha actualizado con éxito.');
    }

    public function destroy(string $id)
    {
        try {
            $customer = Customer::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el cliente solicitado.'
                ]);
        }

        Validator::make(['customer_id' => $id], [
            'customer_id' => [new CustomerHasPendingPayment]
        ])->validate();

        $customer->delete();
    
        return back()
            ->with('success', 'La información del cliente se ha eliminado con éxito.');
    }
}
