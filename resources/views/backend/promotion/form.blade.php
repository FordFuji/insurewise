@extends('../../layouts.app')

@section('title', 'Promotion')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/promotion/promotion_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="promotion_image" id="promotion_image"> Recommend 605 x 275 px
@if(!empty($row) and $row->promotion_image != '') 
                    <br><img src="{{asset('public/uploads/promotion/'.$row->promotion_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Topic</label>
            <div class="col-md-9">
                <input type="text" name="promotion_topic" id="promotion_topic" class="form-control" value="@if(!empty($row)){{ $row->promotion_topic }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Text1</label>
            <div class="col-md-9">
                <textarea name="promotion_text1" id="promotion_text1" class="form-control" rows="4" required>@if(!empty($row)){{ $row->promotion_text1 }}@endif</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Text2</label>
            <div class="col-md-9">
                <textarea name="promotion_text2" id="promotion_text2" class="form-control" rows="4" required>@if(!empty($row)){{ $row->promotion_text2 }}@endif</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image Detail</label>
            <div class="col-md-9">
                <input type="file" name="promotion_detail_image" id="promotion_detail_image"> Recommend 1920 x 724 px
@if(!empty($row) and $row->promotion_detail_image != '') 
                    <br><img src="{{ asset('public/uploads/promotion/'.$row->promotion_detail_image) }}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Condition</label>
            <div class="col-md-9">
                <textarea name="promotion_condition" id="promotion_condition" class="form-control" rows="4" required>@if(!empty($row)){{ $row->promotion_condition }}@endif</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="promotion_id" id="promotion_id" value="{{ @$row->promotion_id }}">
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

			//$(".sub_menu_2").css("display", "block");

			$(".menu_promotion").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
