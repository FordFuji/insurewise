@extends('../../layouts.app')

@section('title', 'ประเภทการซ่อม')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/type_repair/type_repair_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="type_repair_image_th" id="type_repair_image_th"> Recommend 1920 x 724 px
@if(!empty($row) and $row->type_repair_image_th != '') 
                    <br><img src="{{asset('public/uploads/type_repair/'.$row->type_repair_image_th)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(En)</label>
            <div class="col-md-9">
                <input type="file" name="type_repair_image_en" id="type_repair_image_en"> Recommend 1920 x 724 px
@if(!empty($row) and $row->type_repair_image_en != '') 
                    <br><img src="{{asset('public/uploads/type_repair/'.$row->type_repair_image_en)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="type_repair_image_ch" id="type_repair_image_ch"> Recommend 1920 x 724 px
@if(!empty($row) and $row->type_repair_image_ch != '') 
                    <br><img src="{{asset('public/uploads/type_repair/'.$row->type_repair_image_ch)}}" width="150">
@endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">ประเภทการซ่อม</label>
            <div class="col-md-9">
                <input type="text" name="type_repair_name" id="type_repair_name" class="form-control" value="@if(!empty($row)){{ $row->type_repair_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="type_repair_id" id="type_repair_id" value="{{ @$row->type_repair_id }}">
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

			$(".sub_menu_2").css("display", "block");

			$(".sub_menu_type_repair").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
