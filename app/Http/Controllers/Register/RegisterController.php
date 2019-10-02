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

    public function question(CreateRegisterRequest $request)
    {
        $input = $request->all();
        return view('register.start-question')->with($input);
    }

    public function questionCorporation(CreateRegisterRequest $request)
    {
        return view('register.question-corporation');
    }

    public function questionPersonal(CreateRegisterRequest $request)
    {
        $data['questions'] = [
            [
                'question' => 'ปัจจุบันท่านอายุ',
                'ch1' => 'มากกว่า 55 ปี',
                'ch2' => '45-55 ปี',
                'ch3' => '35-44 ปี',
                'ch4' => 'น้อยกว่า 35 ปี'
            ],
            [
                'question' => 'ปัจจุบันท่านมีภาระทางการเงินและค่าใช้จ่ายประจำ เช่น ค่าผ่อนรถ ค่าใช้จ่ายส่วนตัว และค่าเลี้ยงดูครอบครัว เป็นสัดส่วนเท่าใด',
                'ch1' => 'มากกว่าร้อยละ 75 ของรายได้ทั้งหมด',
                'ch2' => 'ระหว่างร้อยละ 50 ถึงร้อยละ 75 ของรายได้ทั้งหมด',
                'ch3' => 'ระหว่างร้อยละ 25 ถึงร้อยละ 50 ของรายได้ทั้งหมด',
                'ch4' => 'น้อยกว่าร้อยละ 25 ของรายได้ทั้งหมด'
            ]
        ];
        return view('register.question-personal')->with($data);
    }

    public function questionResult(CreateRegisterRequest $request)
    {
        return view('register.question-result');
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
