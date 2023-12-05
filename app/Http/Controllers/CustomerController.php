<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\BloodGroup;
use App\Models\Customer;
use App\Rules\CustomerHasPendingPayment;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    protected $validator;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('customers.index', [
            'customers' => DB::table('view_customers_pending_payment')
                ->orderBy('name')
                ->paginate(15),
            'bloodGroups' => BloodGroup::orderBy('name')->get()
        ]);
    }

    public function store(StoreCustomerRequest $request)
    {
        // Most inefficient thing, but it will do for now.
        do {
            $code = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
        } while (Customer::where('code', $code)->exists());

        $request['code'] = $code;
        Customer::create($request->only([
            'name',
            'code',
            'phone',
            'emergency_phone',
            'email',
            'blood_group_id',
            'is_active'
        ]));

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

    public function update(UpdateCustomerRequest $request, string $id)
    {
        try {
            $customer = Customer::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el cliente solicitado.'
                ]);
        }

        $validator = Validator::make(['customer_id' => $id], [
            'customer_id' => [new CustomerHasPendingPayment]
        ]);

        $requestFields = [
            'name',
            'phone',
            'emergency_phone',
            'email',
            'blood_group_id'
        ];

        if (!$validator->fails()) {
            array_push($requestFields, 'is_active');
        }

        $customer->update($request->only($requestFields));

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

    public function showPayments(string $id)
    {
        return view('customers.showPayments');
    }
}
