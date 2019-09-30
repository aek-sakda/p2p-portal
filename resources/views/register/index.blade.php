@extends('template_portal.master')

@section('css')
@stop

@section('js')
@stop

@section('contents')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Register</h3>
        </div>
        <div class="card-body">

            <p>&nbsp;</p>

            <div class="row">
                <div class="col-lg-6 text-center">
                    <img class="img-fluid pad" src="{{ url('dist/img/photo2.png') }}" style="height: 150px; width: auto;">
                    <h5>personal</h5>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6 text-center">
                    <img class="img-fluid pad" src="{{ url('dist/img/photo1.png') }}" style="height: 150px; width: auto;">
                    <h5>corporation</h5>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->

            <p>&nbsp;</p>

            <div class="row">
                <p>
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at
                </p>
                <p>
                    the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </p>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.card-body -->
    </div>
@stop
