@extends('template_portal.master')

@section('css')
@stop

@section('js')
@stop

@section('contents')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Corporation Question</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>1.</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="" id="" value="">
                            <p class="custom-control-label" for=""></p>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="/register/question-result" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
