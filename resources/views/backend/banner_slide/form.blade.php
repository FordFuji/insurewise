@extends('../../layouts.app')

@section('title', 'New Activities')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/banner_slide/banner_slide_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="banner_slide_image" id="banner_slide_image"> Recommend 1920 x 937 px
@if(!empty($row) and $row->banner_slide_image != '') 
                    <br><img src="{{asset('public/uploads/banner_slide/'.$row->banner_slide_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image Mobile</label>
            <div class="col-md-9">
                <input type="file" name="banner_slide_image_mobile" id="banner_slide_image_mobile"> Recommend 768 x 900 px
@if(!empty($row) and $row->banner_slide_image_mobile != '') 
                    <br><img src="{{asset('public/uploads/banner_slide/'.$row->banner_slide_image_mobile)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="banner_slide_id" id="banner_slide_id" value="{{ @$row->banner_slide_id }}">
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

			$(".menu_banner_slide").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
