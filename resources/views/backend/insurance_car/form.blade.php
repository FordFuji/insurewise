@extends('../../layouts.app')

@section('title', 'ประกันรถยนต์')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/insurance_car/insurance_car_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="insurance_car_image" id="insurance_car_image"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_car_image != '') 
                    <br><img src="{{asset('public/uploads/insurance_car/'.$row->insurance_car_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Brand</label>
            <div class="col-md-9">
                <select name="brand_car_id" id="brand_car_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($brand_car))
    @foreach($brand_car as $r)
                    <option value="{{ $r->brand_car_id }}" @if(!empty($row) and $row->brand_car_id == $r->brand_car_id){{ 'selected' }}@endif>{{ $r->brand_car_name}}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Model</label>
            <div class="col-md-9">
                <select name="model_car_id" id="model_car_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($model_car))
    @foreach($model_car as $r)
                    <option value="{{ $r->model_car_id }}" @if(!empty($row) and $row->model_car_id == $r->model_car_id){{ 'selected' }}@endif>{{ $r->model_car_name}}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">รุ่นย่อย/CC</label>
            <div class="col-md-9">
                <select name="sub_model_car_id" id="sub_model_car_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($sub_model_car))
    @foreach($sub_model_car as $r)
                    <option value="{{ $r->sub_model_car_id }}" @if(!empty($row) and $row->sub_model_car_id == $r->sub_model_car_id){{ 'selected' }}@endif>{{ $r->sub_model_car_name}}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Year</label>
            <div class="col-md-9">
                <select name="year_car_id" id="year_car_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($year_car))
    @foreach($year_car as $r)
                    <option value="{{ $r->year_car_id }}" @if(!empty($row) and $row->year_car_id == $r->year_car_id){{ 'selected' }}@endif>{{ $r->year_car_name}}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ประเภทประกัน</label>
            <div class="col-md-9">
                <select name="level_car_id" id="level_car_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($level_car))
    @foreach($level_car as $r)
                    <option value="{{ $r->level_car_id }}" @if(!empty($row) and $row->level_car_id == $r->level_car_id){{ 'selected' }}@endif>{{ $r->level_car_name}}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ค่าเสียหายส่วนแรก</label>
            <div class="col-md-9">
                <select name="damages_first_id" id="damages_first_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($damages_first))
    @foreach($damages_first as $r)
                    <option value="{{ $r->damages_first_id }}" @if(!empty($row) and $row->damages_first_id == $r->damages_first_id){{ 'selected' }}@endif>{{ $r->damages_first_name}}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ประเภทการซ่อม</label>
            <div class="col-md-9">
                <select name="type_repair_id" id="type_repair_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($type_repair))
    @foreach($type_repair as $r)
                    <option value="{{ $r->type_repair_id }}" @if(!empty($row) and $row->type_repair_id == $r->type_repair_id){{ 'selected' }}@endif>{{ $r->type_repair_name}}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">บริษัทประกัน</label>
            <div class="col-md-9">
                <select name="insurance_company_id" id="insurance_company_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($insurance_company))
    @foreach($insurance_company as $r)
                    <option value="{{ $r->insurance_company_id }}" @if(!empty($row) and $row->insurance_company_id == $r->insurance_company_id){{ 'selected' }}@endif>{{ $r->insurance_company_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ประกันภัยรถยนต์ภาคบังคับ (พ.ร.บ.)</label>
            <div class="col-md-9">
                <select name="insurance_car_prb" id="insurance_car_prb" class="form-control" required>
                    <option value="">Please Select</option>
                    <option value="รวม" @if(!empty($row) and $row->insurance_car_prb == 'รวม'){{ 'selected' }}@endif>รวม</option>
                    <option value="ไม่รวม" @if(!empty($row) and $row->insurance_car_prb == 'ไม่รวม'){{ 'selected' }}@endif>ไม่รวม</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อประกันภัย</label>
            <div class="col-md-9">
                <input type="text" name="insurance_car_name" id="insurance_car_name" value="@if(!empty($row)){{ $row->insurance_car_name }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_car_text2" id="insurance_car_text2" value="@if(!empty($row)){{ $row->insurance_car_text2 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_car_premium_price" id="insurance_car_premium_price" value="@if(!empty($row)){{ $row->insurance_car_premium_price }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_car_text3" id="insurance_car_text3" value="@if(!empty($row)){{ $row->insurance_car_text3 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_car_lost_fire_price" id="insurance_car_lost_fire_price" value="@if(!empty($row)){{ $row->insurance_car_lost_fire_price }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_car_text4" id="insurance_car_text4" value="@if(!empty($row)){{ $row->insurance_car_text4 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_car_equiment_damage_price" id="insurance_car_equiment_damage_price" value="@if(!empty($row)){{ $row->insurance_car_equiment_damage_price }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_car_text5" id="insurance_car_text5" value="@if(!empty($row)){{ $row->insurance_car_text5 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_car_first_damage_price" id="insurance_car_first_damage_price" value="@if(!empty($row)){{ $row->insurance_car_first_damage_price }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_car_text6" id="insurance_car_text6" value="@if(!empty($row)){{ $row->insurance_car_text6 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_car_price" id="insurance_car_price" value="@if(!empty($row)){{ $row->insurance_car_price }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" name="insurance_car_text1" id="insurance_car_text1" value="@if(!empty($row)){{ $row->insurance_car_text1 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text1_1" id="insureance_car_text1_1" value="@if(!empty($row)){{ $row->insureance_car_text1_1 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value1_1" id="insureance_car_value1_1" value="@if(!empty($row)){{ $row->insureance_car_value1_1 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text1_2" id="insureance_car_text1_2" value="@if(!empty($row)){{ $row->insureance_car_text1_2 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value1_2" id="insureance_car_value1_2" value="@if(!empty($row)){{ $row->insureance_car_value1_2 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text1_3" id="insureance_car_text1_3" value="@if(!empty($row)){{ $row->insureance_car_text1_3 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value1_3" id="insureance_car_value1_3" value="@if(!empty($row)){{ $row->insureance_car_value1_3 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text1_4" id="insureance_car_text1_4" value="@if(!empty($row)){{ $row->insureance_car_text1_4 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value1_4" id="insureance_car_value1_4" value="@if(!empty($row)){{ $row->insureance_car_value1_4 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" name="insurance_car_text2" id="insurance_car_text2" value="@if(!empty($row)){{ $row->insurance_car_text2 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text2_1" id="insureance_car_text2_1" value="@if(!empty($row)){{ $row->insureance_car_text2_1 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value2_1" id="insureance_car_value2_1" value="@if(!empty($row)){{ $row->insureance_car_value2_1 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text2_2" id="insureance_car_text2_2" value="@if(!empty($row)){{ $row->insureance_car_text2_2 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value2_2" id="insureance_car_value2_2" value="@if(!empty($row)){{ $row->insureance_car_value2_2 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" name="insurance_car_text3" id="insurance_car_text3" value="@if(!empty($row)){{ $row->insurance_car_text3 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text3_1" id="insureance_car_text3_1" value="@if(!empty($row)){{ $row->insureance_car_text3_1 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value3_1" id="insureance_car_value3_1" value="@if(!empty($row)){{ $row->insureance_car_value3_1 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text3_2" id="insureance_car_text3_2" value="@if(!empty($row)){{ $row->insureance_car_text3_2 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value3_2" id="insureance_car_value3_2" value="@if(!empty($row)){{ $row->insureance_car_value3_2 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text3_3" id="insureance_car_text3_3" value="@if(!empty($row)){{ $row->insureance_car_text3_3 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value3_3" id="insureance_car_value3_3" value="@if(!empty($row)){{ $row->insureance_car_value3_3 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" name="insurance_car_text4" id="insurance_car_text4" value="@if(!empty($row)){{ $row->insurance_car_text4 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text4_1" id="insureance_car_text4_1" value="@if(!empty($row)){{ $row->insureance_car_text4_1 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value4_1" id="insureance_car_value4_1" value="@if(!empty($row)){{ $row->insureance_car_value4_1 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text4_2" id="insureance_car_text4_2" value="@if(!empty($row)){{ $row->insureance_car_text4_2 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value4_2" id="insureance_car_value4_2" value="@if(!empty($row)){{ $row->insureance_car_value4_2 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text4_3" id="insureance_car_text4_3" value="@if(!empty($row)){{ $row->insureance_car_text4_3 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value4_3" id="insureance_car_value4_3" value="@if(!empty($row)){{ $row->insureance_car_value4_3 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insureance_car_text4_4" id="insureance_car_text4_4" value="@if(!empty($row)){{ $row->insureance_car_text4_4 }}@endif" class="form-control" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insureance_car_value4_4" id="insureance_car_value4_4" value="@if(!empty($row)){{ $row->insureance_car_value4_4 }}@endif" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="insurance_car_id" id="insurance_car_id" value="{{ @$row->insurance_car_id }}">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>
    
@endsection

@section('script_footer')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#news_date").datepicker({ dateFormat: 'yy-mm-dd' });
    });
    </script>
    <script>
        $(document).ready(function() {
			App.init();

			$(".sub_menu_2").css("display", "block");

			$(".sub_menu_insurance_car").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}

	</script>
@endsection
