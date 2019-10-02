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
                    <div class="row justify-content-center" style="margin: 24px 0;">
                        <div class="form-group col-lg-4">
                            <label>1. Question?</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question1" id="exampleRadios1" value="option1">
                                <label class="custom-control-label" for="exampleRadios1">
                                    Choice1
                                </label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question1" id="exampleRadios2" value="option2">
                                <label class="custom-control-label" for="exampleRadios2">
                                    Choice2
                                </label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question1" id="exampleRadios3" value="option3">
                                <label class="custom-control-label" for="exampleRadios3">
                                    Choice3
                                </label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question1" id="exampleRadios4" value="option4">
                                <label class="custom-control-label" for="exampleRadios4">
                                    Choice4
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-lg-4">
                            <label>2. Question?</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question2" id="exampleRadios5" value="option5">
                                <label class="custom-control-label" for="exampleRadios5">
                                    Choice1
                                </label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question2" id="exampleRadios6" value="option6">
                                <label class="custom-control-label" for="exampleRadios6">
                                    Choice2
                                </label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question2" id="exampleRadios7" value="option7">
                                <label class="custom-control-label" for="exampleRadios7">
                                    Choice3
                                </label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="question2" id="exampleRadios8" value="option8">
                                <label class="custom-control-label" for="exampleRadios8">
                                    Choice4
                                </label>
                            </div>
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
