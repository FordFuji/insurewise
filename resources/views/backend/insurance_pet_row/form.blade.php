@extends('../../layouts.app')

@section('title', 'ประกันสัตว์เลี้ยง')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/insurance_pet_row/insurance_pet_row_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <div class="form-group">
            <label class="col-md-3 control-label">รูปภาพ</label>
            <div class="col-md-9">
                <input type="file" name="insurance_pet_row_image" id="insurance_pet_row_image"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_pet_row_image != '') 
                    <br><img src="{{asset('public/uploads/insurance_pet_row/'.$row->insurance_pet_row_image)}}" width="150">
@endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ</label>
            <div class="col-md-9">
                <input type="text" name="insurance_pet_row_name" id="insurance_pet_row_name" class="form-control" value="@if(!empty($row)){{ $row->insurance_pet_row_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="insurance_pet_row_id" id="insurance_pet_row_id" value="{{ @$row->insurance_pet_row_id }}">
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

			$(".sub_menu_7").css("display", "block");

			$(".sub_menu_insurance_pet_row").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
