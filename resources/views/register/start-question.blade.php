@extends('template_portal.master')

@section('css')
@stop

@section('js')
@stop

@section('contents')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Start Question</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-center" style="margin: 24px 0;">
                        <i class="fas fa-check-circle fa-10x" style="color: #2ecc71;"></i>
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus tristique quam,
                            at condimentum metus viverra ut. Nulla tempor tortor consequat luctus consequat. Proin
                            vestibulum ex at diam hendrerit posuere. Aenean sit amet ipsum a magna hendrerit aliquam sit
                            amet in tellus. Integer metus felis, posuere sed lobortis non, placerat eget justo. Lorem
                            ipsum dolor sit amet, consectetur adipiscing elit. Nam eget quam eget enim ornare euismod.
                            Sed eget volutpat nulla. Cras congue lectus id finibus finibus. Morbi commodo metus justo,
                            vitae dictum nisi vestibulum eget.</p>
                    </div>
                    <div class="text-center">
                        @if($type == 'corporation')
                            <a href="/register/question-corporation" class="btn btn-primary">Start</a>
                        @else
                            <a href="/register/question-personal" class="btn btn-primary">Start</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
