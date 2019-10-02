@extends('template_portal.master')

@section('css')
@stop

@section('js')
@stop

@section('contents')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Term And Conditions</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus tristique quam, at condimentum metus viverra ut. Nulla tempor tortor consequat luctus consequat. Proin vestibulum ex at diam hendrerit posuere. Aenean sit amet ipsum a magna hendrerit aliquam sit amet in tellus. Integer metus felis, posuere sed lobortis non, placerat eget justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget quam eget enim ornare euismod. Sed eget volutpat nulla. Cras congue lectus id finibus finibus. Morbi commodo metus justo, vitae dictum nisi vestibulum eget.
                        </p>
                        <p>
                            Duis eu facilisis orci, volutpat mattis quam. Vestibulum malesuada tristique felis, vehicula consectetur neque. Vestibulum nec risus id metus gravida egestas a eu purus. Fusce porttitor diam id scelerisque interdum. Mauris ut aliquet tortor, ac scelerisque risus. Nullam non purus vel arcu cursus pharetra ut quis ante. Cras at purus nisl. Quisque venenatis vel lacus id volutpat. Ut rutrum aliquam dui vel tincidunt. Nulla non viverra erat. Nunc bibendum sollicitudin nulla sit amet elementum. Nunc tincidunt, risus ut pharetra euismod, dui dui fermentum augue, ac porta tellus tellus efficitur sapien. Donec porta velit quis placerat venenatis.
                        </p>
                        <p>
                            Cras efficitur elit sit amet ante bibendum dictum. Phasellus finibus, turpis lacinia ornare faucibus, risus dolor tincidunt orci, sit amet mattis neque dui a turpis. Aenean ornare dictum nulla finibus volutpat. Cras ac ultrices nunc. Mauris sed faucibus felis. Nulla facilisi. Cras id rutrum augue. Etiam porta pretium nulla ac pellentesque. Morbi fringilla rutrum metus, id ultrices tortor vestibulum non. Donec non lectus mattis, fermentum augue at, cursus justo. Mauris sed porta massa.
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Agree</label>
                            </div>
                        </div>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <a href="/register/success" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
