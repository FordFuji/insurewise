@extends('../../layouts.app')

@section('title', 'ประกันอะไหล่รถยนต์')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/extended_insurance/extended_insurance_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="extended_insurance_image_th" id="extended_insurance_image_th"> Recommend 1920 x 724 px
@if(!empty($row) and $row->extended_insurance_image_th != '') 
                    <br><img src="{{asset('public/uploads/extended_insurance/'.$row->extended_insurance_image_th)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(En)</label>
            <div class="col-md-9">
                <input type="file" name="extended_insurance_image_en" id="extended_insurance_image_en"> Recommend 1920 x 724 px
@if(!empty($row) and $row->extended_insurance_image_en != '') 
                    <br><img src="{{asset('public/uploads/extended_insurance/'.$row->extended_insurance_image_en)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="extended_insurance_image_ch" id="extended_insurance_image_ch"> Recommend 1920 x 724 px
@if(!empty($row) and $row->extended_insurance_image_ch != '') 
                    <br><img src="{{asset('public/uploads/extended_insurance/'.$row->extended_insurance_image_ch)}}" width="150">
@endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">แผน</label>
            <div class="col-md-9">
                <input type="text" name="extended_insurance_plan" id="extended_insurance_plan" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_plan }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เบี้ยประกัน (บาท/ปี)</label>
            <div class="col-md-9">
                <input type="number" name="extended_insurance_premium_price" id="extended_insurance_premium_price" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_premium_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="extended_insurance_text_1" id="extended_insurance_text_1" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_text_1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="extended_insurance_fire" id="extended_insurance_fire" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_fire }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="extended_insurance_text_2" id="extended_insurance_text_2" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_text_2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="extended_insurance_money_salary" id="extended_insurance_money_salary" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_money_salary }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="extended_insurance_text_3" id="extended_insurance_text_3" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_text_3 }}@endif" required>
            </div>
            {{-- <div class="col-md-9">
                <input type="text" name="extended_insurance_maximum" id="extended_insurance_maximum" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_maximum }}@endif" required>
            </div> --}}
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="extended_insurance_text_4" id="extended_insurance_text_4" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_text_4 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="extended_insurance_money" id="extended_insurance_money" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_money }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="extended_insurance_text_5" id="extended_insurance_text_5" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_text_5 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="extended_insurance_die" id="extended_insurance_die" class="form-control" value="@if(!empty($row)){{ $row->extended_insurance_die }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="extended_insurance_id" id="extended_insurance_id" value="{{ @$row->extended_insurance_id }}">
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

			$(".sub_menu_extended_insurance").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
