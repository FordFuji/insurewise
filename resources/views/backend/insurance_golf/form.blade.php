@extends('../../layouts.app')

@section('title', 'ประกันกอล์ฟ')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/insurance_golf/insurance_golf_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="insurance_golf_image_th" id="insurance_golf_image_th"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_golf_image_th != '') 
                    <br><img src="{{asset('public/uploads/insurance_golf/'.$row->insurance_golf_image_th)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(En)</label>
            <div class="col-md-9">
                <input type="file" name="insurance_golf_image_en" id="insurance_golf_image_en"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_golf_image_en != '') 
                    <br><img src="{{asset('public/uploads/insurance_golf/'.$row->insurance_golf_image_en)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="insurance_golf_image_ch" id="insurance_golf_image_ch"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_golf_image_ch != '') 
                    <br><img src="{{asset('public/uploads/insurance_golf/'.$row->insurance_golf_image_ch)}}" width="150">
@endif
            </div>
        </div> --}}
        <legend>ประกันภัยผู้เล่นกอล์ฟ</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">ประกันภัยผู้เล่นกอล์ฟ</label>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_price" id="insurance_golf_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ความรับผิดต่อบุคคลภายนอก</label>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_reponsible_price" id="insurance_golf_reponsible_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_reponsible_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ความบาดเจ็บทางร่างกายของผู้เอาประกันภัย</label>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_bodily_injuly_price" id="insurance_golf_bodily_injuly_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_bodily_injuly_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">อุปกรณ์การเล่นกอล์ฟ</label>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_equipment_price" id="insurance_golf_equipment_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_equipment_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">รางวัลพิเศษสำหรับ "โฮล-อิน-วัน"</label>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_hol_in_one_price" id="insurance_golf_hol_in_one_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_hol_in_one_price }}@endif" required>
            </div>
        </div>
        <legend>
            <input type="text" name="insurance_golf_text1" id="insurance_golf_text1" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1 }}@endif" required>
        </legend>
        <legend><input type="text" name="insurance_golf_text1_1" id="insurance_golf_text1_1" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_1 }}@endif" required>
        </legend>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_golf_text1_1_1" id="insurance_golf_text1_1_1" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_1_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_damage_live_body_price" id="insurance_golf_damage_live_body_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_damage_live_body_price }}@endif" required>
            </div>
        </div>
        <legend><input type="text" name="insurance_golf_text1_2" id="insurance_golf_text1_2" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_2 }}@endif" required></legend>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_golf_text1_2_1" id="insurance_golf_text1_2_1" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_2_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_die_eye_lost_price" id="insurance_golf_die_eye_lost_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_die_eye_lost_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_golf_text1_2_2" id="insurance_golf_text1_2_2" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_2_2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_disablility_less_52_week_price" id="insurance_golf_disablility_less_52_week_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_disablility_less_52_week_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_golf_text1_2_3" id="insurance_golf_text1_2_3" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_2_3 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_any_disablility_less_52_week_price" id="insurance_golf_any_disablility_less_52_week_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_any_disablility_less_52_week_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_golf_text1_2_4" id="insurance_golf_text1_2_4" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_2_4 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_accident_price" id="insurance_golf_accident_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_accident_price }}@endif" required>
            </div>
        </div>
        <legend><input type="text" name="insurance_golf_text1_3" id="insurance_golf_text1_3" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_3 }}@endif" required></legend>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_golf_text1_3_1" id="insurance_golf_text1_3_1" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_3_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_equipment_lost_price" id="insurance_golf_equipment_lost_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_equipment_lost_price }}@endif" required>
            </div>
        </div>
        <legend><input type="text" name="insurance_golf_text1_4" id="insurance_golf_text1_4" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_4 }}@endif" required></legend>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_golf_text1_4_1" id="insurance_golf_text1_4_1" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_4_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_hol_in_one_normal_price" id="insurance_golf_hol_in_one_normal_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_hol_in_one_normal_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_golf_text1_4_2" id="insurance_golf_text1_4_2" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_text1_4_2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_golf_hol_in_one_other_price" id="insurance_golf_hol_in_one_other_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_golf_hol_in_one_other_price }}@endif" required>
            </div>
        </div>
        {{-- <div class="form-group">
            <label class="col-md-3 control-label">Answer</label>
            <div class="col-md-9">
                <textarea name="insurance_golf_answer" id="insurance_golf_answer" class="form-control" rows="4" required>@if(!empty($row)){{ $row->insurance_golf_answer }}@endif</textarea>
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="insurance_golf_id" id="insurance_golf_id" value="1">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>
    @php
	$golf_pdf = DB::table('insurance_upload_pdf')
		->where('insurance_download_pdf_id', '=', 1)
		->first();	
	@endphp
	<form action="{{ url('backend/golf_pdf') }}" method="post" enctype="multipart/form-data">
		@csrf
	<br>Upload PDF <input type="file" name="golf_pdf"> <a href="@if(!empty($golf_pdf)){{ asset('public/uploads/condo/'.$golf_pdf->golf_pdf)}}@endif" target="_blank">@if(!empty($golf_pdf)){{ $golf_pdf->golf_pdf }}@endif</a><br><input type="submit" name="submit" value="Upload PDF">
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

			$(".sub_menu_4").css("display", "block");

			$(".sub_menu_insurance_golf").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
