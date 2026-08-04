@extends('../../layouts.app')

@section('title', 'ประกันขนส่งสินค้า')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/insurance_transportation/insurance_transportation_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="insurance_transportation_image_ch" id="insurance_transportation_image_ch"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_transportation_image_ch != '') 
                    <br><img src="{{asset('public/uploads/insurance_transportation/'.$row->insurance_transportation_image_ch)}}" width="150">
@endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">Company Name</label>
            <div class="col-md-9">
                <select name="insurance_company_id" id="insurance_company_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($company))
    @foreach($company as $r)
                    <option value="{{ $r->insurance_company_id }}" @if(!empty($row) and $row->insurance_company_id == $r->insurance_company_id){{ 'selected' }}@endif>{{ $r->insurance_company_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">แผน</label>
            <div class="col-md-9">
                <input type="text" name="insurance_transportation_plan" id="insurance_transportation_plan" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_plan }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เบี้ยเรื่มต้น</label>
            <div class="col-md-9">
                <input type="text" name="insurance_transportation_price" id="insurance_transportation_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">แถวที่</label>
            <div class="col-md-9">
                <select name="insurance_transportation_row" id="insurance_transportation_row" class="form-control" required>
                    <option value="">Please Select</option>
@for($i = 1; $i <= 4; $i++)
                    <option value="{{ $i }}" @if(!empty($row) and $row->insurance_transportation_row == $i){{ 'selected' }}@endif>{{ $i }}</option>
@endfor
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3"><input type="text" name="insurance_transportation_text1" id="insurance_transportation_text1" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_text1 }}@endif" required></div>
            <div class="col-md-9">
                <input type="text" name="insurance_transportation_1" id="insurance_transportation_1" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_1 }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3"><input type="text" name="insurance_transportation_text2" id="insurance_transportation_text2" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_text2 }}@endif" required></div>
            <div class="col-md-9">
                <input type="text" name="insurance_transportation_2" id="insurance_transportation_2" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_2 }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3"><input type="text" name="insurance_transportation_text3" id="insurance_transportation_text3" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_text3 }}@endif" required></div>
            <div class="col-md-9">
                <input type="text" name="insurance_transportation_3" id="insurance_transportation_3" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_3 }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3"><input type="text" name="insurance_transportation_text4" id="insurance_transportation_text4" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_text4 }}@endif" required></div>
            <div class="col-md-9">
                <input type="text" name="insurance_transportation_4" id="insurance_transportation_4" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_4 }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3"><input type="text" name="insurance_transportation_text5" id="insurance_transportation_text5" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_text5 }}@endif" required></div>
            <div class="col-md-9">
                <input type="text" name="insurance_transportation_5" id="insurance_transportation_5" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_5 }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3"><input type="text" name="insurance_transportation_text6" id="insurance_transportation_text6" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_text6 }}@endif" required></div>
            <div class="col-md-9">
                <input type="text" name="insurance_transportation_6" id="insurance_transportation_6" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_6 }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3"><input type="text" name="insurance_transportation_text7" id="insurance_transportation_text7" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_text7 }}@endif" required></div>
            <div class="col-md-9">
                <input type="text" name="insurance_transportation_7" id="insurance_transportation_7" class="form-control" value="@if(!empty($row)){{ $row->insurance_transportation_7 }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="insurance_transportation_id" id="insurance_transportation_id" value="{{ @$row->insurance_transportation_id }}">
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

			$(".sub_menu_11").css("display", "block");

			$(".sub_menu_insurance_transportation").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
