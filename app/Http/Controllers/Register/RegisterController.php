<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\CreateRegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(CreateRegisterRequest $request)
    {
        $input = $request->all();
        return view('register.index')->with($input);
    }
}
