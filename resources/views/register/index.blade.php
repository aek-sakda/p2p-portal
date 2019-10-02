@extends('template_portal.master')

@section('css')
@stop

@section('js')
@stop

@section('contents')
    <div class="card">
        <div class="card-header" style="background: #05adcd; color: whitesmoke;">
            <h3 class="card-title h3">ลงทะเบียนผู้ให้กู้</h3>
        </div>
        <div class="card-body" style="padding: 24px;">
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h4>ลงทะเบียนผู้ให้กู้</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <hr>--}}
            <div class="row text-center" style="margin: 24px 0;">
                <div class="col-lg-6">
                    <a href="/register/personal">
                        <img class="img-fluid rounded" src="{{ url('dist/img/photo2.png') }}" style="height: 150px; width: auto; margin: 5px;">
                    </a>
                    <h5>บุคคลธรรมดา</h5>
                </div>
                <div class="col-lg-6">
                    <a href="/register/corporation">
                        <img class="img-fluid rounded" src="{{ url('dist/img/photo1.png') }}" style="height: 150px; width: auto; margin: 5px;">
                    </a>
                    <h5>นิติบุคคล</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>ข้อแนะนำสำหรับนักลงทุนที่ประสงค์จะลงทุนด้วยการให้กู้เงินข้อแนะนำสำหรับนักลงทุนที่ประสงค์จะลงทุนด้วยการให้กู้เงิน</p>
                    <ol>
                        <li>ผู้ลงทุนควรทำความเข้าใจลักษณะ เงื่อนไข  ผลตอบแทน และความเสี่ยงของผลิตภัณฑ์สินเชื่อระหว่างบุคคลกับบุคคลผ่านระบบหรือเครือข่ายอิเล็กทรอนิกส์ก่อนตัดสินใจลงทุนด้วยการให้กู้เงิน</li>
                        <li>การให้กู้เงินไม่ใช่การฝากเงิน และมีความเสี่ยงในการลงทุน ผู้ลงทุนอาจได้รับเงินลงทุนมากกว่าหรือน้อยกว่าเงินลงทุนเริ่มแรกก็ได้ ดังนั้นผู้ลงทุนควรให้กู้เงินเมื่อเห็นว่าการให้เงินกู้แก่ผู้ขอกู้รายใดๆ เหมาะสมกับวัตถุประสงค์การลงทุนของผู้ลงทุน และผู้ลงทุนสามารถยอมรับความเสี่ยงที่อาจเกิดขึ้นจากให้เงินกู้แก่ผู้ขอกู้รายนั้นๆ ได้</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="card card-info">--}}
{{--        <div class="card-header">--}}
{{--            <h3 class="card-title">Register</h3>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}

{{--            <p>&nbsp;</p>--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-6 text-center">--}}
{{--                    <a href="/register/personal">--}}
{{--                        <img class="img-fluid pad" src="{{ url('dist/img/photo2.png') }}" style="height: 150px; width: auto;">--}}
{{--                    </a>--}}
{{--                    <h5>personal</h5>--}}
{{--                </div>--}}
{{--                <!-- /.col-lg-6 -->--}}
{{--                <div class="col-lg-6 text-center">--}}
{{--                    <a href="/register/corporation">--}}
{{--                        <img class="img-fluid pad" src="{{ url('dist/img/photo1.png') }}" style="height: 150px; width: auto;">--}}
{{--                    </a>--}}
{{--                    <h5>corporation</h5>--}}
{{--                </div>--}}
{{--                <!-- /.col-lg-6 -->--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}

{{--            <p>&nbsp;</p>--}}

{{--            <div class="row">--}}
{{--                <p>--}}
{{--                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}

{{--        </div>--}}
{{--        <!-- /.card-body -->--}}
{{--    </div>--}}
@stop
