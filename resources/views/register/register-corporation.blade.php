@extends('template_portal.master')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@stop

@section('js')
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-serialize-object/2.5.0/jquery.serialize-object.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        ssnImage = '';
        bookBankImage = '';
        addressImage = '';
        function getImage(file, displayTarget, displayPanel) {
            inputFile = $(file).prop('files')[0];
            fileReader = new FileReader();
            fileReader.readAsDataURL(inputFile);
            fileReader.addEventListener("load", function (e) {
                // base64 image
                $(displayTarget).attr('src', e.target.result);
                $(displayPanel).show();

                if(file == '#ssnFile') {
                    ssnImage = e.target.result;
                } else if(file == '#vatLicenseFile') {
                    addressImage = e.target.result;
                } else {
                    bookBankImage = e.target.result;
                }
            });
        }

        function showImage(imageType) {
            if(imageType == 'ssn') {
                imageSrc = ssnImage;
            } else if(imageType == 'vatLicense') {
                imageSrc = addressImage;
            } else {
                imageSrc = bookBankImage;
            }
            Swal.fire({
                imageUrl: imageSrc,
                showCloseButton: true,
                focusConfirm: false,
                showConfirmButton: false
            });
        }

        function removeImage(imagePanel) {
            $(imagePanel).hide();
        }

        $('#birthdate').datepicker({
            format: 'dd-mm-yyyy'
        });
    </script>
@stop

@section('contents')
    <div class="card card-info">
        {{--        <div class="card-header">--}}
        {{--            <h4 class="card-title h4">การลงทะเบียนของผู้ให้กู้ที่เป็นนิติบุคคล</h4>--}}
        {{--        </div>--}}
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <h4>การลงทะเบียนของผู้ให้กู้ที่เป็นนิติบุคคล</h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>ชื่อ*</label>
                                <input type="text" class="form-control" placeholder="ชื่อ">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>นามสกุล*</label>
                                <input type="text" class="form-control" placeholder="นามสกุล">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>Email*</label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>เบอร์โทรศัพท์*</label>
                                <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์">
                            </div>
                        </div>

                        <!--Personal info-->
                        <h5 class="title" style="margin-top: 1rem;">ข้อมูลส่วนตัว</h5>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>เลขที่บัตรประชาชน*</label>
                                <input type="text" class="form-control" placeholder="เลขที่บัตรประชาชน">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>วันเดือนปีเกิด*</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control float-right" id="birthdate">
                                </div>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>เพศ*</label>
                                <select class="form-control custom-select">
                                    <option selected="false" disabled="true">เลือก :</option>
                                    <option value="male">ชาย</option>
                                    <option value="female">หญิง</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>เชื้อชาติ*</label>
                                <input type="text" class="form-control" placeholder="เชื้อชาติ">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>สัญชาติ*</label>
                                <input type="text" class="form-control" placeholder="สัญชาติ">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>อายุ*</label>
                                <input type="text" class="form-control" placeholder="อายุ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>สถานภาพสมรส*</label>
                                <input type="text" class="form-control" placeholder="สถานภาพสมรส">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>ตำแหน่งในบริษัท*</label>
                                <input type="text" class="form-control" placeholder="ตำแหน่งในบริษัท">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>ความถนัด</label>
                                <input type="text" class="form-control" placeholder="ความถนัด">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>รูปบัตรประชาชน</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="ssnFile" onchange="getImage('#ssnFile', '#uploadSSN', '#ssnPanel')">
                                    <label class="custom-file-label" for="ssnFile">อัปโหลดรูปบัตรประชาชน</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="display: none; margin-bottom: 10px;" id="ssnPanel">
                            <div class="col-lg-4">
                                <a type="button" onclick="showImage('ssn')">
                                    <img id="uploadSSN" class="img-fluid rounded">
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a class="btn btn-danger btn-sm" style="color: white;" onclick="removeImage('#ssnPanel')">
                                    <i class="fas fa-trash"></i>
                                    ลบ
                                </a>
                            </div>
                        </div>

                        <!-- Company info -->
                        <h5 style="margin-top: 1rem;">ข้อมูลบริษัท</h5>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>เลขประจำตัวผู้เสียภาษี*</label>
                                <input type="text" class="form-control" placeholder="เลขประจำตัวผู้เสียภาษี">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>ชื่อบริษัท*</label>
                                <input type="text" class="form-control" placeholder="ชื่อบริษัท">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>Email บริษัท</label>
                                <input type="text" class="form-control" placeholder="Email บริษัท">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>เบอร์โทรศัพท์*</label>
                                <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>ประเภทธุรกิจ</label>
                                <input type="text" class="form-control" placeholder="ประเภทธุรกิจ">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>เว็บไซต์บริษัท</label>
                                <input type="text" class="form-control" placeholder="เว็บไซต์บริษัท">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>ที่อยู่ 1</label>
                                <textarea class="form-control" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>ที่อยู่ 2</label>
                                <textarea class="form-control" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>ตำบล</label>
                                <input type="text" class="form-control" placeholder="ตำบล">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>อำเภอ</label>
                                <input type="text" class="form-control" placeholder="อำเภอ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>จังหวัด</label>
                                <input type="text" class="form-control" placeholder="จังหวัด">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>รหัสไปรษณีย์</label>
                                <input type="text" class="form-control" placeholder="รหัสไปรษณีย์">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>รูป ภพ.20</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="vatLicenseFile" onchange="getImage('#vatLicenseFile', '#uploadVatLicense', '#vatLicensePanel')">
                                    <label class="custom-file-label" for="vatLicenseFile">อัปโหลดรูป ภพ.20</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="display: none; margin-bottom: 10px;" id="vatLicensePanel">
                            <div class="col-lg-4">
                                <a type="button" onclick="showImage('vatLicense')">
                                    <img id="uploadVatLicense" class="img-fluid rounded">
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a class="btn btn-danger btn-sm" style="color: white;" onclick="removeImage('#vatLicensePanel')">
                                    <i class="fas fa-trash"></i>
                                    ลบ
                                </a>
                            </div>
                        </div>

                        <!-- Finance info -->
                        <h5 style="margin-top: 1rem;">ข้อมูการเงิน</h5>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>ธนาคารที่ให้ตัดบัญชี</label>
                                <select class="form-control custom-select">
                                    <option selected="false" disabled="true">เลือกธนาคาร :</option>
                                    <option value="scb">SCB</option>
                                    <option value="kbank">KBANK</option>
                                    <option value="tmb">TMB</option>
                                    <option value="...">...</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>เลขที่บัญชี</label>
                                <input type="text" class="form-control" placeholder="เลขที่บัญชี">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>ชื่อบัญชี</label>
                                <input type="text" class="form-control" placeholder="ชื่อบัญชี">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label>รูปบัญชีธนาคาร</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="bookBankFile" onchange="getImage('#bookBankFile', '#uploadedBookBank', '#bookBankPanel')">
                                    <label class="custom-file-label" for="bookBankFile">อัปโหลดรูปบัญชีธนาคาร</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" style="display: none; margin-bottom: 10px;" id="bookBankPanel">
                            <div class="col-lg-4">
                                <a type="button" onclick="showImage('bookbank')">
                                    <img id="uploadedBookBank" class="img-fluid rounded">
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a class="btn btn-danger btn-sm" style="color: white;" onclick="removeImage('#bookBankPanel')">
                                    <i class="fas fa-trash"></i>
                                    ลบ
                                </a>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="condition1">
                                    <label class="custom-control-label" for="condition1">ข้าพเจ้าขอรับรองว่าข้อมูลทั้งหมดเป็นความจริง</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="condition2">
                                    <label class="custom-control-label" for="condition2">ข้าพเจ้ายืนยันว่าจะอัพเดตข้อมูลให้เป็นปัจจุบันอยู่เสมอ</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="condition3">
                                    <label class="custom-control-label" for="condition3">ข้าพเจ้าได้อ่านและทำความเข้าใจ  Privacy Policy, xxx Terms, xxx Terms และยินยอมที่จะ xxx ตามเงื่อนไขทั้งหมด</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <a href="#" class="btn btn-primary">สมัคร</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
