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

    public function corporation(CreateRegisterRequest $request)
    {
        $input = $request->all();
        return view('register.register-corporation');
    }

    public function personal(CreateRegisterRequest $request)
    {
        $input = $request->all();
        return view('register.register-personal');
    }

    public function congratulations(CreateRegisterRequest $request)
    {
        $input = $request->all();
        return view('register.congratulations')->with($input);
    }

    public function riskAssessment(CreateRegisterRequest $request)
    {
        $input = $request->all();
        return view('register.risk-assessment-form')->with($input);
    }

    public function riskAssessmentResult(CreateRegisterRequest $request)
    {
        return view('register.risk-assessment-result');
    }

    public function termAndCondition(CreateRegisterRequest $request)
    {
        return view('register.term-and-conditions');
    }

    public function success(CreateRegisterRequest $request)
    {
        return view('register.register-success');
    }
}
