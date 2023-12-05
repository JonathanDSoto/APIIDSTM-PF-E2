<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('sessions.index');
    }

    public function store(Request $request)
    {

    }

    public function show(string $id)
    {
        return view('sessions.show');
    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {
        
    }
}
