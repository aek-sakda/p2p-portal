@extends('template_portal.master')

@section('css')
@stop

@section('js')
@stop

@section('contents')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">แบบประเมินความเหมาะสมในการลงทุนสำหรับบุคคลธรรมดา (สำหรับผู้ให้กู้)</h3>
        </div>
        <div class="card-body" style="padding: 24px;">
            <div class="row">
                <div class="col-lg-12">
                    <!-- For question from api -->
{{--                    @foreach($questions as $key => $value)--}}
{{--                        <div class="form-row">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>{{ $key + 1 }}. {{ $value['question'] }}</label>--}}
{{--                                <div class="custom-control custom-radio">--}}
{{--                                    <input class="custom-control-input" type="radio" name="q{{ $key + 1 }}"--}}
{{--                                           id="q{{ $key + 1}}-1" value="1">--}}
{{--                                    <p class="custom-control-label" for="q{{ $key + 1 }}-1">{{ $value['ch1'] }}</p>--}}
{{--                                </div>--}}
{{--                                <div class="custom-control custom-radio">--}}
{{--                                    <input class="custom-control-input" type="radio" name="q{{ $key + 1 }}"--}}
{{--                                           id="q{{ $key + 1}}-2" value="2">--}}
{{--                                    <p class="custom-control-label" for="q{{ $key + 1 }}-2">{{ $value['ch2'] }}</p>--}}
{{--                                </div>--}}
{{--                                <div class="custom-control custom-radio">--}}
{{--                                    <input class="custom-control-input" type="radio" name="q{{ $key + 1 }}"--}}
{{--                                           id="q{{ $key + 1}}-3" value="3">--}}
{{--                                    <p class="custom-control-label" for="q{{ $key + 1 }}-3">{{ $value['ch3'] }}</p>--}}
{{--                                </div>--}}
{{--                                <div class="custom-control custom-radio">--}}
{{--                                    <input class="custom-control-input" type="radio" name="q{{ $key + 1 }}"--}}
{{--                                           id="q{{ $key + 1}}-4" value="4">--}}
{{--                                    <p class="custom-control-label" for="q{{ $key + 1 }}-4">{{ $value['ch4'] }}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}

                    <div class="form-group">
                        <label>1. ปัจจุบันท่านอายุ</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q1" id="q1-1" value="1">
                            <p class="custom-control-label" for="q1-1">มากกว่า 55 ปี</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q1" id="q1-2" value="2">
                            <p class="custom-control-label" for="q1-2">45-55 ปี</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q1" id="q1-3" value="3">
                            <p class="custom-control-label" for="q1-3">35-44 ปี</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q1" id="q1-4" value="4">
                            <p class="custom-control-label" for="q1-4">น้อยกว่า 35 ปี</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>2. ปัจจุบันท่านมีภาระทางการเงินและค่าใช้จ่ายประจำ เช่น ค่าผ่อนรถ ค่าใช้จ่ายส่วนตัว
                            และค่าเลี้ยงดูครอบครัว เป็นสัดส่วนเท่าใด</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q2" id="q2-1" value="1">
                            <p class="custom-control-label" for="q2-1">มากกว่าร้อยละ 75 ของรายได้ทั้งหมด</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q2" id="q2-2" value="2">
                            <p class="custom-control-label" for="q2-2">ระหว่างร้อยละ 50 ถึงร้อยละ 75
                                ของรายได้ทั้งหมด</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q2" id="q2-3" value="3">
                            <p class="custom-control-label" for="q2-3">ระหว่างร้อยละ 25 ถึงร้อยละ 50
                                ของรายได้ทั้งหมด</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q2" id="q2-4" value="4">
                            <p class="custom-control-label" for="q2-4">น้อยกว่าร้อยละ 25 ของรายได้ทั้งหมด</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>3. ท่านมีสถานภาพทางการเงินในปัจจุบันอย่างไร</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q3" id="q3-1" value="1">
                            <p class="custom-control-label" for="q3-1">มีทรัพย์สินน้อยกว่าหนี้สิน</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q3" id="q3-2" value="2">
                            <p class="custom-control-label" for="q3-2">มีทรัพย์สินเท่ากับหนี้สิน</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q3" id="q3-3" value="3">
                            <p class="custom-control-label" for="q3-3">มีทรัพย์สินมากกว่าหนี้สิน</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q3" id="q3-4" value="4">
                            <p class="custom-control-label" for="q3-4">
                                มีความมั่นใจว่ามีเงินออมหรือเงินลงทุนเพียงพอสำหรับการใช้ชีวิตหลังเกษียณอายุแล้ว</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>4. ท่านเคยมีประสบการณ์หรือมีความรู้ในการลงทุนในทรัพย์สินกลุ่มใดต่อไปนี้บ้าง
                            (เลือกได้มากกว่า 1 ข้อ)</label>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="q4" id="q4-1" value="1">
                            <p class="custom-control-label" for="q4-1">เงินฝากธนาคาร</p>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="q4" id="q4-2" value="2">
                            <p class="custom-control-label" for="q4-2">พันธบัตรรัฐบาล หรือกองทุนรวมพันธบัตรรัฐบาล</p>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="q4" id="q4-3" value="3">
                            <p class="custom-control-label" for="q4-3">หุ้นกู้หรือกองทุนรวมตราสารหนี้</p>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="q4" id="q4-4" value="4">
                            <p class="custom-control-label" for="q4-4">หุ้นสามัญ หรือกองทุนรวมหุ้น
                                หรือสินทรัพย์อื่นที่มีความเสี่ยงสูง</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>5. ระยะเวลาที่ท่านคาดว่าจะไม่มีความจำเป็นต้องใช้เงินลงทุนนี้</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q5" id="q5-1" value="1">
                            <p class="custom-control-label" for="q5-1">ไม่เกิน 1 ปี </p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q5" id="q5-2" value="2">
                            <p class="custom-control-label" for="q5-2">1 ถึง 3 ปี </p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q5" id="q5-3" value="3">
                            <p class="custom-control-label" for="q5-3">3 ถึง 5 ปี </p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q5" id="q5-4" value="4">
                            <p class="custom-control-label" for="q5-4">มากกว่า 5 ปี</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>6. วัตถุประสงค์หลักในการลงทุนของท่านคือ</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q6" id="q6-1" value="1">
                            <p class="custom-control-label" for="q6-1">เน้นเงินต้นต้องปลอดภัยและได้รับผลตอบแทนสม่ำสมอ
                                แต่ต่ำได้</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q6" id="q6-2" value="2">
                            <p class="custom-control-label" for="q6-2">เน้นโอกาสได้รับผลตอบแทนที่สม่ำเสมอ
                                แต่อาจเสี่ยงที่จะสูญเสียเงินต้นได้บ้าง</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q6" id="q6-3" value="3">
                            <p class="custom-control-label" for="q6-3">เน้นโอกาสได้รับผลตอบแทนที่สูงขึ้น
                                แต่อาจเสี่ยงที่จะสูญเสียเงินต้นได้มากขึ้น</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q6" id="q6-4" value="4">
                            <p class="custom-control-label" for="q6-4">เน้นผลตอบแทนสูงสุดในระยะยาว
                                แต่อาจเสี่ยงที่จะสูญเงินต้นส่วนใหญ่ได้</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>7. เมื่อพิจารณาผลตอบแทนของกลุ่มการลงทุนที่อาจเกิดขึ้น
                            ท่านเต็มใจที่จะลงทุนในกลุ่มการลงทุนใดมากที่สุด</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q7" id="q7-1" value="1">
                            <p class="custom-control-label" for="q7-1">กลุ่มการลงทุนที่1 มีโอกาสได้รับผลตอบแทน 2.5%
                                โดยไม่ขาดทุนเลย</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q7" id="q7-2" value="2">
                            <p class="custom-control-label" for="q7-2">กลุ่มการลงทุนที่2 มีโอกาสได้รับผลตอบแทนสูงสุด 7%
                                แต่อาจมีผลขาดทุนได้ถึง 1%</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q7" id="q7-3" value="3">
                            <p class="custom-control-label" for="q7-3">กลุ่มการลงทุนที่3 มีโอกาสได้รับผลตอบแทนสูงสุด 15%
                                แต่อาจมีผลขาดทุนได้ถึง 5%</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q7" id="q7-4" value="4">
                            <p class="custom-control-label" for="q7-4">กลุ่มการลงทุนที่4 มีโอกาสได้รับผลตอบแทนสูงสุด 25%
                                แต่อาจมีผลขาดทุนไได้ถึง 15%</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>8. ถ้าท่านเลือกลงทุนในทรัพย์สินที่มีโอกาสได้รับผลตอบแทนมากแต่มีโอกาสขาดทุนสูงด้วยเช่นกัน
                            ท่านจะรู้สึกอย่างไร</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q8" id="q8-1" value="1">
                            <p class="custom-control-label" for="q8-1">กังวลและตื่นตระหนกกลัวขาดทุน</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q8" id="q8-2" value="2">
                            <p class="custom-control-label" for="q8-2">ไม่สบายใจแต่พอเข้าใจได้บ้าง</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q8" id="q8-3" value="3">
                            <p class="custom-control-label" for="q8-3">เข้าใจและรับความผันผวนได้ในระดับหนึ่ง</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q8" id="q8-4" value="4">
                            <p class="custom-control-label" for="q8-4">
                                ไม่กังวลกับโอกาสขาดทุนสูงและหวังกับผลตอบแทนที่อาจจะได้รับสูงขึ้น</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>9.
                            ท่านจะรู้สึกกังวล/รับไม่ได้เมื่อมูลค่าเงินลงทุนของท่านมีการปรับตัวลดลงในสัดส่วนเท่าใด</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q9" id="q9-1" value="1">
                            <p class="custom-control-label" for="q9-1">5% หรือน้อยกว่า </p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q9" id="q9-2" value="2">
                            <p class="custom-control-label" for="q9-2">มากกว่า 5%-10%</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q9" id="q9-3" value="3">
                            <p class="custom-control-label" for="q9-3">มากกว่า 10%-20% </p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q9" id="q9-4" value="4">
                            <p class="custom-control-label" for="q9-4">มากกว่า 20% ขึ้นไป</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>10. หากปีที่แล้วท่านลงทุนไป 100,000 บาท ปีนี้ท่านพบว่ามูลค่าเงินลงทุนลดลงเหลือ 85,000 บาท
                            ท่านจะทำอย่างไร</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q10" id="q10-1" value="1">
                            <p class="custom-control-label" for="q10-1">ตกใจและต้องการขายการลงทุนที่เหลือทิ้ง</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q10" id="q10-2" value="2">
                            <p class="custom-control-label" for="q10-2">
                                กังวลใจและจะปรับเปลี่ยนการลงทุนบางส่วนไปในทรัพย์สินที่เสี่ยงน้อยลง</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q10" id="q10-3" value="3">
                            <p class="custom-control-label" for="q10-3">อดทนถือต่อไปได้และรอผลตอบแทนปรับตัวกลับมา</p>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="q10" id="q10-4" value="4">
                            <p class="custom-control-label" for="q10-4">
                                ยังมั่นใจเพราะเข้าใจว่าต้องลงทุนระยะยาวและจะเพิ่มเงินลงทุนในแบบเดิมเพื่อเฉลี่ยต้นทุน</p>
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
