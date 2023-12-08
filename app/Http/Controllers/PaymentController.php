<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Fare;
use App\Models\Payment;
use App\Models\PaymentStatus;
use App\Models\PaymentType;
use App\Rules\IsCustomerActive;
use App\Rules\IsPaymentPending;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{

    protected $paymentStatusIds;

    public function __construct()
    {
        $this->middleware('auth');
        $this->paymentStatusIds = PaymentStatus::all()->pluck('id', 'name');
    }

    public function index()
    {
        $payments = Payment::with([
            'customer',
            'fare',
            'paymentStatus',
            'paymentType'
        ])->paginate(15);

        return view('payments.index', [
            'payments' => $payments,
            'customers' => Customer::where('is_active', 1)
                ->orderBy('name')
                ->get(),
            'fares' => Fare::all(),
            'paymentTypes' => PaymentType::orderBy('name')->get(),
            'paymentStatus' => PaymentStatus::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_id' => ['bail', 'required', 'integer', 'exists:customers,id', new IsCustomerActive],
            'fare_id' => ['bail', 'required', 'integer', 'exists:fares,id'],
            'payment_type_id' => ['bail', 'required', 'integer', 'exists:payment_types,id']
        ]);

        $paymentData = $request->only('customer_id', 'fare_id', 'payment_type_id') + [
            'payment_status_id' => $this->paymentStatusIds['Pendiente']
        ];
        Payment::create($paymentData);

        return back()
            ->with('success', 'El pago del cliente se ha guardado con éxito.');
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'fare_id' => ['bail', 'required', 'integer', 'exists:fares,id'],
            'payment_type_id' => ['bail', 'required', 'integer', 'exists:payment_types,id']
        ]);

        try {
            $payment = Payment::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors([
                    'internal_error' => 'No se ha podido encontrar el pago del cliente solicitado.'
                ]);
        }

        $payment->update($request->only('fare_id', 'payment_type_id'));

        return back()
            ->with('success', 'La información del pago del cliente se ha actualizado con éxito.');
    }

    public function pay(string $id)
    {
        try {
            $payment = Payment::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors(
                    ['internal_error' => 'No se ha podido encontrar el pago del cliente solicitado.']
                );
        }

        Validator::make(['payment_status_id' => $payment->payment_status_id], [
            'payment_status_id' => [new IsPaymentPending]
        ])->validate();

        $payment->update([
            'payment_status_id' => $this->paymentStatusIds['Pagado'],
            'payment_datetime' => now()
        ]);

        return back()
            ->with('success', 'El pago del cliente se ha concretado con éxito.');
    }

    public function cancel(string $id)
    {
        try {
            $payment = Payment::findOrFail($id);
        } catch (ModelNotFoundException $modelNotFoundException) {
            return back()
                ->withErrors(
                    ['internal_error' => 'No se ha podido encontrar el pago del cliente solicitado.']
                );
        }

        Validator::make(['payment_status_id' => $payment->payment_status_id], [
            'payment_status_id' => [new IsPaymentPending]
        ])->validate();

        $payment->update(['payment_status_id' => $this->paymentStatusIds['Cancelado']]);

        return back()
            ->with('success', 'El pago del cliente ha sido cancelado con éxito.');
    }
}
