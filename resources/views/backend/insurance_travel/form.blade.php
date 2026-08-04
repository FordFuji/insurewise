@extends('../../layouts.app')

@section('title', 'ประกันการเดินทาง')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/insurance_travel/insurance_travel_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="insurance_travel_image_th" id="insurance_travel_image_th"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_travel_image_th != '') 
                    <br><img src="{{asset('public/uploads/insurance_travel/'.$row->insurance_travel_image_th)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(En)</label>
            <div class="col-md-9">
                <input type="file" name="insurance_travel_image_en" id="insurance_travel_image_en"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_travel_image_en != '') 
                    <br><img src="{{asset('public/uploads/insurance_travel/'.$row->insurance_travel_image_en)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="insurance_travel_image_ch" id="insurance_travel_image_ch"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_travel_image_ch != '') 
                    <br><img src="{{asset('public/uploads/insurance_travel/'.$row->insurance_travel_image_ch)}}" width="150">
@endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">แถวที่</label>
            <div class="col-md-9">
                <select name="insurance_travel_row_id" id="insurance_travel_row_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($rows))
    @foreach($rows as $r)
                    <option value="{{ $r->insurance_travel_row_id }}" @if(!empty($row) and $row->insurance_travel_row_id == $r->insurance_travel_row_id){{ 'selected' }}@endif>{{ $r->insurance_travel_row_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">รูปภาพ</label>
            <div class="col-md-9">
                <input type="file" name="insurance_travel_image" id="insurance_travel_image"> Recommend 91 x 68 px
@if(!empty($row) and $row->insurance_travel_image != '') 
                    <br><img src="{{asset('public/uploads/insurance_travel/'.$row->insurance_travel_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ</label>
            <div class="col-md-9">
                <input type="text" name="insurance_travel_name" id="insurance_travel_name" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">แผน</label>
            <div class="col-md-9">
                <input type="text" name="insurance_travel_plan" id="insurance_travel_plan" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_plan }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เบี้ยเริ่มต้น</label>
            <div class="col-md-9">
                <input type="number" name="insurance_travel_premium_price" id="insurance_travel_premium_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_premium_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_travel_text1" id="insurance_travel_text1" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_text1 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_travel_accident" id="insurance_travel_accident" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_accident }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_travel_text_2" id="insurance_travel_text_2" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_text_2 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_travel_sick" id="insurance_travel_sick" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_sick }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_travel_text_3" id="insurance_travel_text_3" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_text_3 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_travel_vaccine" id="insurance_travel_vaccine" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_vaccine }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_travel_text_4" id="insurance_travel_text_4" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_text_4 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_travel_deposit" id="insurance_travel_deposit" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_deposit }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_travel_text_5" id="insurance_travel_text_5" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_text_5 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_travel_external" id="insurance_travel_external" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_external }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_travel_text_6" id="insurance_travel_text_6" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_text_6 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_travel_injury" id="insurance_travel_injury" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_injury }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3">
                <input type="text" name="insurance_travel_text_7" id="insurance_travel_text_7" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_text_7 }}@endif" required>
            </div>
            <div class="col-md-9">
                <input type="text" name="insurance_travel_property" id="insurance_travel_property" class="form-control" value="@if(!empty($row)){{ $row->insurance_travel_property }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="insurance_travel_id" id="insurance_travel_id" value="{{ @$row->insurance_travel_id }}">
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

			$(".sub_menu_6").css("display", "block");

			$(".sub_menu_insurance_travel").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
