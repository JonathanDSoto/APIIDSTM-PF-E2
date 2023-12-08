<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function show(Customer $customer)
    {
        return new CustomerResource($customer
            ->loadMissing([
                'bloodGroup',
                'payments.paymentStatus',
                'payments.paymentType',
                'payments.fare',
                'attendedSessions.session',
                'attendedSessions.instructor',
                'attendedSessions.weekDay',
                'subscribedSessions.weekDay',
                'subscribedSessions.session'
            ]));
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        if ($customer->password === null) {
            return response()->json([
                'status' => 'failed',
                'errors' => [
                    'internal_error' => [
                        'Error al actualizar. El cliente seleccionado no ha sincronizado su cuenta.'
                    ]
                ]
            ]);
        }

        $mustRule = $request->method() === 'PUT' ? 'required' : 'sometimes';
        $this->validate($request, [
            'password' => ['bail', $mustRule, 'string', 'between:8,255']
        ]);

        $customer->update($request->only([
            'name',
            'phone',
            'emergency_phone',
            'email',
            'blood_group_id',
            'is_active',
            'password'
        ]));

        return response()->json([
            'status' => 'success',
            'message' => 'La información del cliente se ha actualizado con éxito.'
        ]);
    }

    public function destroy(string $id)
    {

    }
}
