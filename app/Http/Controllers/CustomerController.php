<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use App\Models\Customer;
use App\Models\Fare;
use App\Models\PaymentStatus;
use App\Models\PaymentType;
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
            'customers' => Customer::orderBy('name')->simplePaginate(15),
            'bloodGroups' => BloodGroup::all()->sortBy('name')
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
                $attendedSessions->orderBy('attendance_date', 'desc');
            },
            'payments' => function ($payments) {
                $payments
                    ->orderBy('payment_datetime', 'asc')
                    ->orderBy('created_at', 'desc');
            },
            'bloodGroup'
        ])->find($id);

        $attendedSessionIds = array_unique($customer->attendedSessions->pluck('session_id')->toArray());

        return view('customers.show', [
            'customer' => $customer,
            'sessionNames' => Session::whereIn('id', $attendedSessionIds)->pluck('name', 'id'),
            'paymentStatus' => PaymentStatus::all()->pluck('name', 'id'),
            'paymentTypes' => PaymentType::all()->pluck('name', 'id'),
            'fares' => Fare::all()->pluck('name', 'id')
        ]);
    }

    public function update(Request $request, string $id)
    {
        $this->validator['is_active'] = ['required', 'integer', Rule::in([0, 1])];
        $this->validate($request, $this->validator);

        if (Customer::find($id)) {
            Customer::find($id)->update($request->all());

            return redirect()
                ->route('customers.show', ['id'=> $id])
                ->with('success', 'La información del cliente se ha actualizado con éxito.');
        }
    }

    public function destroy(string $id)
    {
        if (Customer::find($id)) {
            Customer::destroy($id);

            return redirect()
                ->route('customers')
                ->with('success', 'La información del cliente se ha eliminado con éxito.');
        }
    }
}
