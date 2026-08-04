@extends('../../layouts.app')

@section('title', 'ตารางความคุ้มครอง')

@section('content')
    <style>
        th {
            text-align: center;
        }
    </style>
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/car_table_insurance/car_table_insurance_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <legend>Image</legend>
        {{-- <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="car_table_insurance_image" id="car_table_insurance_image"> Recommend 91 x 68 px
@if(!empty($row) and $row->car_table_insurance_image != '') 
                    <br><img src="{{asset('public/uploads/car_table_insurance/'.$row->car_table_insurance_image)}}" width="150">
@endif
            </div>
        </div> --}}
        <legend>ตารางความคุ้มครอง</legend>
        <table width="100%" border="1">
            <tr>
                <th colspan="2" rowspan="2">ความคุ้มครอง/ประเภทประกันภัย</th>
                <th colspan="5">ประเภทประกัน</th>
            </tr>
            <tr>
                <th>ชั้น 1</th>
                <th>ชั้น 2+</th>
                <th>ชั้น 2</th>
                <th>ชั้น 3+</th>
                <th>ชั้น 3</th>
            </tr>
            <tr>
                <th rowspan="2">ความรับผิดชอบต่อบุคคลภายนอก</th>
                <th>ทรัพย์สิน</th>
                <th><input type="checkbox" name="car_table_insurance_property_1" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_property_1 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_property_2p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_property_2p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_property_2" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_property_2 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_property_3p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_property_3p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_property_3" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_property_3 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
            </tr>
            <tr>
                <th>บุคคล</th>
                <th><input type="checkbox" name="car_table_insurance_person_1" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_person_1 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_person_2p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_person_2p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_person_2" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_person_2 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_person_3p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_person_3p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_person_3" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_person_3 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
            </tr>
            <tr>
                <th rowspan="2">ตัวรถเอาประกัน</th>
                <th>สูญหายและไฟใหม้</th>
                <th><input type="checkbox" name="car_table_insurance_car_fire_1" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_car_fire_1 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_car_fire_2p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_car_fire_2p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_car_fire_2" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_car_fire_2 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_car_fire_3p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_car_fire_3p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_car_fire_3" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_car_fire_3 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
            </tr>
            <tr>
                <th>การชนกับยานพาหนะทางบก *</th>
                <th><input type="checkbox" name="car_table_insurance_car_crash_1" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_car_crash_1 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_car_crash_2p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_car_crash_2p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_car_crash_2" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_car_crash_2 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_car_crash_3p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_car_crash_3p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_car_crash_3" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_car_crash_3 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
            </tr>
            <tr>
                <th rowspan="2">ภัยพิเศษ</th>
                <th>สูญหายและไฟใหม้</th>
                <th><input type="checkbox" name="car_table_insurance_special_fire_1" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_special_fire_1 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_special_fire_2p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_special_fire_2p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_special_fire_2" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_special_fire_2 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_special_fire_3p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_special_fire_3p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_special_fire_3" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_special_fire_3 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
            </tr>
            <tr>
                <th>การชนกับยานพาหนะทางบก *</th>
                <th><input type="checkbox" name="car_table_insurance_special_crash_1" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_special_crash_1 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_special_crash_2p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_special_crash_2p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_special_crash_2" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_special_crash_2 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_special_crash_3p" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_special_crash_3p == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
                <th><input type="checkbox" name="car_table_insurance_special_crash_3" class="checkboxButton" @if(!empty($row) and $row->car_table_insurance_special_crash_3 == 'Yes'){{ 'checked' }}@endif value="Yes"> Yes</th>
            </tr>
        </table>
        <p>&nbsp;</p>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="car_table_insurance_id" id="car_table_insurance_id" value="{{ @$row->car_table_insurance_id }}">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                {{-- <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button> --}}
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

			$(".sub_menu_car_table_insurance").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
