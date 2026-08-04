@extends('../../layouts.app')

@section('title', 'ประกันสุขภาพ')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/insurance_healthy/insurance_healthy_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="insurance_healthy_image" id="insurance_healthy_image"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_healthy_image != '') 
                    <br><img src="{{asset('public/uploads/insurance_healthy/'.$row->insurance_healthy_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ประเภทประกัน</label>
            <div class="col-md-9">
                <select name="type_insurance_id" id="type_insurance_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($type_insurance))
    @foreach($type_insurance as $r)
                    <option value="{{ $r->type_insurance_id }}" @if(!empty($row) and $row->type_insurance_id == $r->type_insurance_id){{ 'selected' }}@endif>{{ $r->type_insurance_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ</label>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_name" id="insurance_healthy_name" value="@if(!empty($row)){{ $row->insurance_healthy_name }}@endif" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">อายุเริ่มต้น</label>
            <div class="col-md-9">
                <input type="number" name="insurance_healthy_age_begin" id="insurance_healthy_age_begin" value="@if(!empty($row)){{ $row->insurance_healthy_age_begin }}@endif" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">อายุสิ้นสุด</label>
            <div class="col-md-9">
                <input type="number" name="insurance_healthy_age_end" id="insurance_healthy_age_end" value="@if(!empty($row)){{ $row->insurance_healthy_age_end }}@endif" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เพศ</label>
            <div class="col-md-9">
                <select name="insurance_healthy_gender" id="insurance_healthy_gender" class="form-control">
                    <option value="">Please Select</option>
                    <option value="ชาย" @if(!empty($row) and $row->insurance_healthy_gender == 'ชาย'){{ 'selected' }}@endif>ชาย</option>
                    <option value="หญิง" @if(!empty($row) and $row->insurance_healthy_gender == 'หญิง'){{ 'selected' }}@endif>หญิง</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">คุ้มครองสูงสุด</label>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_premium_price" id="insurance_healthy_premium_price" value="@if(!empty($row)){{ $row->insurance_healthy_premium_price }}@endif" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เบี้ยเริ่มต้น</label>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_premium_start_price" id="insurance_healthy_premium_start_price" value="@if(!empty($row)){{ $row->insurance_healthy_premium_start_price }}@endif" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">บริษัทประกัน</label>
            <div class="col-md-9">
                <select name="insurance_company_id" id="insurance_company_id" class="form-control" required>
@if(!empty($insurance_company))                
    @foreach($insurance_company as $r)
                    <option value="{{ $r->insurance_company_id }}" @if(!empty($row) and $row->insurance_company_id == $r->insurance_company_id){{ 'selected' }}@endif>{{ $r->insurance_company_name }}</option>
    @endforeach
@endif
                </select>
    
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ความคุ้มครองพิเศษ</label>
            <div class="col-md-9">
                <textarea name="insurance_healthy_special_cover" id="insurance_healthy_special_cover" class="form-control" rows="4">@if(!empty($row)){{ $row->insurance_healthy_special_cover }}@endif</textarea>
            </div>
        </div>
        <legend>
            <input type="text" name="insurance_healthy_text1" id="insurance_healthy_text1" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text1 }}@endif" required>
        </legend>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text1_1" id="insurance_healthy_text1_1" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text1_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_medical" id="insurance_healthy_medical" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_medical }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text1_2" id="insurance_healthy_text1_2" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text1_2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_medical_after_return_to_thai" id="insurance_healthy_medical_after_return_to_thai" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_medical_after_return_to_thai }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text1_3" id="insurance_healthy_text1_3" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text1_3 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_emergency" id="insurance_healthy_emergency" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_emergency }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text1_4" id="insurance_healthy_text1_4" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text1_4 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_daily_compensation" id="insurance_healthy_daily_compensation" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_daily_compensation }}@endif" required>
            </div>
        </div>
        <legend>
            <input type="text" name="insurance_healthy_text2" id="insurance_healthy_text2" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text2 }}@endif" required></legend>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text2_1" id="insurance_healthy_text2_1" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text2_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_case_death" id="insurance_healthy_case_death" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_case_death }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text2_2" id="insurance_healthy_text2_2" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text2_2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_cost_of_repatriating" id="insurance_healthy_cost_of_repatriating" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_cost_of_repatriating }}@endif" required>
            </div>
        </div>
        <legend>
            <input type="text" name="insurance_healthy_text3" id="insurance_healthy_text3" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text3 }}@endif" required></legend>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text3_1" id="insurance_healthy_text3_1" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text3_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_flight_delay" id="insurance_healthy_flight_delay" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_flight_delay }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text3_2" id="insurance_healthy_text3_2" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text3_2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_trip_cancel" id="insurance_healthy_trip_cancel" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_trip_cancel }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text3_3" id="insurance_healthy_text3_3" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text3_3 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_mising_a_flight" id="insurance_healthy_mising_a_flight" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_mising_a_flight }}@endif" required>
            </div>
        </div>
        <legend>
            <input type="text" name="insurance_healthy_text4" id="insurance_healthy_text4" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text4 }}@endif" required></legend>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text4_1" id="insurance_healthy_text4_1" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text4_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_lost_items" id="insurance_healthy_lost_items" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_lost_items }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text4_2" id="insurance_healthy_text4_2" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text4_2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_stolen_cash" id="insurance_healthy_stolen_cash" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_stolen_cash }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text4_3" id="insurance_healthy_text4_3" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text4_3 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_travel_document" id="insurance_healthy_travel_document" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_travel_document }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_healthy_text4_4" id="insurance_healthy_text4_4" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_text4_4 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_healthy_pc_notebook" id="insurance_healthy_pc_notebook" class="form-control" value="@if(!empty($row)){{ $row->insurance_healthy_pc_notebook }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="insurance_healthy_id" id="insurance_healthy_id" value="{{ @$row->insurance_healthy_id }}">
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

			$(".sub_menu_3").css("display", "block");

			$(".sub_menu_insurance_healthy").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
