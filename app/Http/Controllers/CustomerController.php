<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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
            'phone' => ['required', 'string', 'unique:customers,phone', 'max:50'],
            'emergency_phone' => ['required', 'string', 'different:phone', 'max:50'],
            'email' => ['email', 'unique:customers,email', 'nullable', 'max:255'],
            'blood_group_id' => ['required', 'integer', 'exists:blood_groups,id']
        ];
    }

    public function index()
    {
        return view('customers.index', [
            'customersPagination' => Customer::simplePaginate(15)
        ]);
    }

    public function store(Request $request)
    {
        $this->validator['is_active'] = ['integer', Rule::in([0, 1])];
        $this->validate($request, $this->validator);

        Customer::create($request->all());

        return redirect()
            ->route('customers')
            ->with('success', 'La información del cliente se ha guardado con éxito.');
    }

    public function show(string $id)
    {
        $customer = Customer::find($id);

        return view('customers.show', ['customer' => $customer]);
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
