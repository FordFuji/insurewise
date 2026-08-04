@extends('../../layouts.app')

@section('title', 'พ.ร.บ.')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/prb/prb_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="prb_image" id="prb_image"> Recommend 1920 x 724 px
@if(!empty($row) and $row->prb_image != '') 
                    <br><img src="{{asset('public/uploads/prb/'.$row->prb_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ</label>
            <div class="col-md-9">
                <input type="text" name="prb_name" id="prb_name" class="form-control" value="@if(!empty($row)){{ $row->prb_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ(2)</label>
            <div class="col-md-9">
                <input type="text" name="prb_name2" id="prb_name2" class="form-control" value="@if(!empty($row)){{ $row->prb_name2 }}@endif">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ(3)</label>
            <div class="col-md-9">
                <input type="text" name="prb_name3" id="prb_name3" class="form-control" value="@if(!empty($row)){{ $row->prb_name3 }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ราคา</label>
            <div class="col-md-9">
                <input type="number" name="prb_price" id="prb_price" class="form-control" value="@if(!empty($row)){{ $row->prb_price }}@endif" required>
            </div>
        </div>
        <legend><input type="text" name="prb_text1" id="prb_text1" class="form-control" value="@if(!empty($row)){{ $row->prb_text1 }}@endif" required></legend>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="prb_text1_1" id="prb_text1_1" class="form-control" value="@if(!empty($row)){{ $row->prb_text1_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="prb_medical_expenses_price1" id="prb_medical_expenses_price1" class="form-control" value="@if(!empty($row)){{ $row->prb_medical_expenses_price1 }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="prb_text1_2" id="prb_text1_2" class="form-control" value="@if(!empty($row)){{ $row->prb_text1_2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="prb_died_price1" id="prb_died_price1" class="form-control" value="@if(!empty($row)){{ $row->prb_died_price1 }}@endif" required>
            </div>
        </div>
        <legend><input type="text" name="prb_text2" id="prb_text2" class="form-control" value="@if(!empty($row)){{ $row->prb_text2 }}@endif" required></legend>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="prb_text2_1" id="prb_text2_1" class="form-control" value="@if(!empty($row)){{ $row->prb_text2_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="prb_medical_expenses_price2" id="prb_medical_expenses_price2" class="form-control" value="@if(!empty($row)){{ $row->prb_medical_expenses_price2 }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="prb_text2_2" id="prb_text2_2" class="form-control" value="@if(!empty($row)){{ $row->prb_text2_2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="prb_died_price2" id="prb_died_price2" class="form-control" value="@if(!empty($row)){{ $row->prb_died_price2 }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="prb_text2_3" id="prb_text2_3" class="form-control" value="@if(!empty($row)){{ $row->prb_text2_3 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="prb_dismemberment_price" id="prb_dismemberment_price" class="form-control" value="@if(!empty($row)){{ $row->prb_dismemberment_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="prb_text2_4" id="prb_text2_4" class="form-control" value="@if(!empty($row)){{ $row->prb_text2_4 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="prb_daily_compensation_price" id="prb_daily_compensation_price" class="form-control" value="@if(!empty($row)){{ $row->prb_daily_compensation_price }}@endif" required>
            </div>
        </div>
        {{-- <div class="form-group">
            <label class="col-md-3 control-label">Answer</label>
            <div class="col-md-9">
                <textarea name="prb_answer" id="prb_answer" class="form-control" rows="4" required>@if(!empty($row)){{ $row->prb_answer }}@endif</textarea>
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="prb_id" id="prb_id" value="{{ @$row->prb_id }}">
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

			$(".sub_menu_5").css("display", "block");

			$(".sub_menu_prb").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
