<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredTenantController extends Controller
{
    //
    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        dd($request);
    }

}
