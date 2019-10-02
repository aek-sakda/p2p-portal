<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Requests\BackOffice\CreateDashboardRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(CreateDashboardRequest $request)
    {
        $input = $request->all();
        return view('backoffice.dashboard')->with($input);
    }
}
