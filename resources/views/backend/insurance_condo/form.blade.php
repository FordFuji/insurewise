@extends('../../layouts.app')

@section('title', 'ประกันคอนโด')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/insurance_condo/insurance_condo_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">รูปภาพ</label>
            <div class="col-md-9">
                <input type="file" name="insurance_condo_image" id="insurance_condo_image"> Recommend 91 x 68 px
@if(!empty($row) and $row->insurance_condo_image != '') 
                    <br><img src="{{asset('public/uploads/insurance_condo/'.$row->insurance_condo_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">แถวที่</label>
            <div class="col-md-9">
                <select name="insurance_condo_row_id" id="insurance_condo_row_id" class="form-control" required>
                    <option value="">กรุณาเลือก</option>
@if(!empty($rows))
    @foreach($rows as $r)
                    <option value="{{ $r->insurance_condo_row_id }}" @if(!empty($row) and $row->insurance_condo_row_id == $r->insurance_condo_row_id){{ 'selected' }}@endif>{{ $r->insurance_condo_row_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ</label>
            <div class="col-md-9">
                <input type="text" name="insurance_condo_name" id="insurance_condo_name" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">แผน</label>
            <div class="col-md-9">
                <input type="text" name="insurance_condo_plan" id="insurance_condo_plan" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_plan }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เบี้ยเริ่มต้น</label>
            <div class="col-md-9">
                <input type="number" name="insurance_condo_premium_price" id="insurance_condo_premium_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_premium_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_condo_text1" id="insurance_condo_text1" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_text1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_condo_accident" id="insurance_condo_accident" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_accident }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_condo_text2" id="insurance_condo_text2" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_text2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_condo_sick" id="insurance_condo_sick" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_sick }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_condo_text3" id="insurance_condo_text3" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_text3 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_condo_vaccine" id="insurance_condo_vaccine" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_vaccine }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_condo_text4" id="insurance_condo_text4" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_text4 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_condo_deposit" id="insurance_condo_deposit" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_deposit }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_condo_text5" id="insurance_condo_text5" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_text5 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_condo_injured" id="insurance_condo_injured" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_injured }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_condo_text6" id="insurance_condo_text6" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_text6 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_condo_funeral" id="insurance_condo_funeral" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_funeral }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_condo_text7" id="insurance_condo_text7" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_text7 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_condo_property" id="insurance_condo_property" class="form-control" value="@if(!empty($row)){{ $row->insurance_condo_property }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="insurance_condo_id" id="insurance_condo_id" value="{{ @$row->insurance_condo_id }}">
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

			$(".sub_menu_insurance_condo").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
