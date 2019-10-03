@extends('template_portal.master')

@section('css')
@stop

@section('js')
@stop

@section('contents')
    <div class="card card-info">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-center" style="margin: 24px 0;">
                        <i class="fas fa-check-circle fa-10x" style="color: #2ecc71;"></i>
                    </div>
                    <div class="row justify-content-center" style="margin: 48px 0;">
                        <h3>ยินดีด้วย!</h3>
                    </div>
                    <div class="text-center">
                        @if($type == 'corporation')
                            <a href="/register/risk-assessment?type=corporation" class="btn btn-primary">Start</a>
                        @else
                            <a href="/register/risk-assessment?type=personal" class="btn btn-primary">Start</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
