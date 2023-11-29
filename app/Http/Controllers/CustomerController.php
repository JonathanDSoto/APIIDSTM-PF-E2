<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use App\Models\Customer;
use App\Models\Session;
use Illuminate\Http\Request;
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
            'email' => ['email', 'unique:customers,email', 'nullable', 'max:255'],
            'blood_group_id' => ['required', 'integer', 'exists:blood_groups,id'],
            'is_active' => ['integer', Rule::in([0, 1])]
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

        return redirect()
            ->route('customers')
            ->with('success', 'La información del cliente se ha guardado con éxito.');
    }

    public function show(string $id)
    {
        $customer = Customer::with([
            'attendedSessions' => function ($attendedSessions) {
                $attendedSessions
                    ->with('weekDay')
                    ->orderBy('attendance_date', 'desc');
            },
            'payments' => function ($payments) {
                $payments
                    ->with('fare', 'paymentStatus', 'paymentType')
                    ->orderBy('payment_datetime', 'asc')
                    ->orderBy('created_at', 'desc');
            },
            'bloodGroup'
        ])->find($id);

        $attendedSessionIds = array_unique($customer
            ->attendedSessions
            ->pluck('session_id')
            ->toArray()
        );

        return view('customers.show', [
            'customer' => $customer,
            'sessionNames' => Session::whereIn('id', $attendedSessionIds)
                ->pluck('name', 'id')
        ]);
    }

    public function update(Request $request, string $id)
    {
        $this->validator['phone'] = ['required', 'integer', "unique:customers,phone,{$id}", 'digits:10'];
        $this->validator['email'] = ['email', "unique:customers,email,{$id}", 'nullable', 'max:255'];
        $this->validator['is_active'] = ['required', 'integer', Rule::in([0, 1])];

        $this->validate($request, $this->validator);

        $customer = Customer::find($id);

        if ($customer) {
            $customer->update($request->all());

            return redirect()
                ->route('customers.show', ['id'=> $id])
                ->with('success', 'La información del cliente se ha actualizado con éxito.');
        }
    }

    public function destroy(string $id)
    {
        $customer = Customer::find($id);

        if ($customer) {
            $customer->delete();

            return redirect()
                ->route('customers')
                ->with('success', 'La información del cliente se ha eliminado con éxito.');
        }
    }
}
