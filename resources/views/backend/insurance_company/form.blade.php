@extends('../../layouts.app')

@section('title', 'บริษัทประกัน')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/insurance_company/insurance_company_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="insurance_company_image_th" id="insurance_company_image_th"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_company_image_th != '') 
                    <br><img src="{{asset('public/uploads/insurance_company/'.$row->insurance_company_image_th)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(En)</label>
            <div class="col-md-9">
                <input type="file" name="insurance_company_image_en" id="insurance_company_image_en"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_company_image_en != '') 
                    <br><img src="{{asset('public/uploads/insurance_company/'.$row->insurance_company_image_en)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="insurance_company_image_ch" id="insurance_company_image_ch"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_company_image_ch != '') 
                    <br><img src="{{asset('public/uploads/insurance_company/'.$row->insurance_company_image_ch)}}" width="150">
@endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">Logo</label>
            <div class="col-md-9">
                <input type="file" name="insurance_company_logo" id="insurance_company_logo"> Recommend 70 x 70 px
@if(!empty($row) and $row->insurance_company_logo != '') 
                    <br><img src="{{asset('public/uploads/insurance_company/'.$row->insurance_company_logo)}}" width="70">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Logo 2</label>
            <div class="col-md-9">
                <input type="file" name="insurance_company_logo2" id="insurance_company_logo2"> Recommend 29 x 29 px
@if(!empty($row) and $row->insurance_company_logo2 != '') 
                    <br><img src="{{asset('public/uploads/insurance_company/'.$row->insurance_company_logo2)}}" width="29">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="insurance_company_image" id="insurance_company_image"> Recommend 148 x 27 px
@if(!empty($row) and $row->insurance_company_image != '') 
                    <br><img src="{{asset('public/uploads/insurance_company/'.$row->insurance_company_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Company</label>
            <div class="col-md-9">
                <input type="text" name="insurance_company_name" id="insurance_company_name" class="form-control" value="@if(!empty($row)){{ $row->insurance_company_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Link</label>
            <div class="col-md-9">
                <input type="text" name="insurance_company_link" id="insurance_company_link" class="form-control" value="@if(!empty($row)){{ $row->insurance_company_link }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="insurance_company_id" id="insurance_company_id" value="{{ @$row->insurance_company_id }}">
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

			$(".sub_menu_9").css("display", "block");

			$(".sub_menu_insurance_company").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
