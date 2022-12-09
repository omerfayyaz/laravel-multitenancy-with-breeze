<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterTenantRequest;
use Illuminate\Http\Request;

class RegisteredTenantController extends Controller
{
    //
    public function create()
    {
        return view('auth.register');
    }


    public function store(RegisterTenantRequest $request)
    {
        dd($request);
    }

}
