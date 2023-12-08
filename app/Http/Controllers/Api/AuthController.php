<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAuthRequest;
use App\Http\Requests\SignUpAuthRequest;
use App\Http\Requests\SyncAccountAuthRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginAuthRequest $request)
    {
        $account = Customer::where('code', $request->code)->first();

        if (!$account ||
            $account->password === null ||
            !Hash::check($request->password, $account->password)
        ) {
            return response()->json([
                'status' => 'failed',
                'errors' => [
                    'internal_error' => [
                        'Las credenciales ingresadas son incorrectas.',
                    ]
                ]
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Inicio de sesión exitoso.',
            'customer_id' => $account->id
        ]);
    }

    public function syncAccount(SyncAccountAuthRequest $request)
    {
        $customer = Customer::where('email', $request->email)
            ->where('code', $request->code)
            ->first();

        if (!$customer) {
            return response()->json([
                'status' => 'failed',
                'errors' => [
                    'internal_error' => [
                        'La cuenta solicitada no ha podido autenticarse.'
                    ]
                ]
            ]);
        }

        if (!$customer->is_active) {
            return response()->json([
                'status' => 'failed',
                'errors' => [
                    'internal_error' => [
                        'La cuenta solicitada del cliente no se encuentra activa.'
                    ]
                ]
            ]);
        }

        if ($customer->getAttribute('password') !== null) {
            return response()->json([
                'status' => 'failed',
                'errors' => [
                    'internal_error' => [
                        'La cuenta solicitada ya ha sido sincronizada.'
                    ]
                ]
            ]);
        }

        $customer->update([
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'La cuenta ha sido sincronizada con éxito.',
            'customer_id' => $customer->id
        ]);
    }

    public function signUp(SignUpAuthRequest $request)
    {
        // Most inefficient thing, but it will do for now.
        do {
            $code = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
        } while (Customer::where('code', $code)->exists());

        $request['is_active'] = true;
        $request['code'] = $code;
        $request['password'] = Hash::make($request->password);
        $customer = Customer::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'La información del cliente se ha guardado con éxito.',
            'customer_id' => $customer->id,
            'code' => $code
        ]);
    }

}
