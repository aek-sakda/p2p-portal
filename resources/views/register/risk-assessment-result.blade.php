@extends('template_portal.master')

@section('css')
@stop

@section('js')
@stop

@section('contents')
    <div class="card card-info">
        <div class="card-body">
            <div class="row" style="margin: 50px 0;">
                <div class="col-lg-12">
                    <div class="text-center">
                        <label class="h1">ผลการประเมิน</label>
                        <h4>คุณเป็นนักลงทุนที่รับความเสี่ยงได้ในระดับ</h4>
                        <label class="text-danger h2" style="margin: 48px 0;">เสี่ยงสูง</label>
                    </div>
                    <div class="text-center">
                        <a href="/register/term-and-conditions" class="btn btn-primary">ดำเนินการต่อ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
