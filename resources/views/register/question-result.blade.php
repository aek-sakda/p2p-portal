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
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-6">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Result</th>
                                        </tr>
                                        <tr>
                                            <th>REV</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A</td>
                                            <td>30/09/2019</td>
                                            <td>...</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus tristique quam, at condimentum metus viverra ut. Nulla tempor tortor consequat luctus consequat. Proin vestibulum ex at diam hendrerit posuere. Aenean sit amet ipsum a magna hendrerit aliquam sit amet in tellus. Integer metus felis, posuere sed lobortis non, placerat eget justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget quam eget enim ornare euismod. Sed eget volutpat nulla. Cras congue lectus id finibus finibus. Morbi commodo metus justo, vitae dictum nisi vestibulum eget.</p>
                    </div>
                    <div class="text-center">
                        <a href="/register/term-and-conditions" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
