@extends('../../layouts.app')

@section('title', 'ประกันบ้าน/คอนโด')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/insurance_home/insurance_home_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="insurance_home_image" id="insurance_home_image"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_home_image != '') 
                    <br><img src="{{asset('public/uploads/insurance_home/'.$row->insurance_home_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">แถวที่</label>
            <div class="col-md-9">
                <select name="insurance_home_row_id" id="insurance_home_row_id" class="form-control" required>
                    <option value="">กรุณาเลือก</option>
@if(!empty($rows))
    @foreach($rows as $r)
                    <option value="{{ $r->insurance_home_row_id }}" @if(!empty($row) and $row->insurance_home_row_id == $r->insurance_home_row_id){{ 'selected' }}@endif>{{ $r->insurance_home_row_name}}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ</label>
            <div class="col-md-9">
                <input type="text" name="insurance_home_name" id="insurance_home_name" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">แผน</label>
            <div class="col-md-9">
                <input type="text" name="insurance_home_plan" id="insurance_home_plan" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_plan }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เบี้ยเริ่มต้น</label>
            <div class="col-md-9">
                <input type="number" name="insurance_home_premium_price" id="insurance_home_premium_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_premium_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_home_text_1" id="insurance_home_text_1" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_text_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_home_accident" id="insurance_home_accident" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_accident }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_home_text_2" id="insurance_home_text_2" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_text_2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_home_sick" id="insurance_home_sick" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_sick }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_home_text_3" id="insurance_home_text_3" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_text_3 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_home_vaccine" id="insurance_home_vaccine" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_vaccine }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_home_text_4" id="insurance_home_text_4" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_text_4 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_home_deposit" id="insurance_home_deposit" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_deposit }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_home_text_5" id="insurance_home_text_5" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_text_5 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_home_external" id="insurance_home_external" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_external }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_home_text_6" id="insurance_home_text_6" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_text_6 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_home_injury" id="insurance_home_injury" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_injury }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_home_text_7" id="insurance_home_text_7" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_text_7 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_home_property" id="insurance_home_property" class="form-control" value="@if(!empty($row)){{ $row->insurance_home_property }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="insurance_home_id" id="insurance_home_id" value="{{ @$row->insurance_home_id }}">
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

			$(".sub_menu_8").css("display", "block");

			$(".sub_menu_insurance_home").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
