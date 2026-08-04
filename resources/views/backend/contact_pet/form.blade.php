@extends('../../layouts.app')

@section('title', 'ประกันสัตว์เลี้ยง')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/insurance_pet/insurance_pet_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">รูปภาพ</label>
            <div class="col-md-9">
                <input type="file" name="insurance_pet_image" id="insurance_pet_image"> Recommend 91 x 68 px
@if(!empty($row) and $row->insurance_pet_image != '') 
                    <br><img src="{{asset('public/uploads/insurance_pet/'.$row->insurance_pet_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">แถวที่</label>
            <div class="col-md-9">
                <select name="insurance_pet_row_id" id="insurance_pet_row_id" class="form-control" required>
                    <option value="">กรุณาเลือก</option>
@if(!empty($rows))
    @foreach($rows as $r)
                    <option value="{{ $r->insurance_pet_row_id }}" @if(!empty($row) and $row->insurance_pet_row_id == $r->insurance_pet_row_id){{ 'selected' }}@endif>{{ $r->insurance_pet_row_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ</label>
            <div class="col-md-9">
                <input type="text" name="insurance_pet_name" id="insurance_pet_name" class="form-control" value="@if(!empty($row)){{ $row->insurance_pet_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">แผน</label>
            <div class="col-md-9">
                <input type="text" name="insurance_pet_plan" id="insurance_pet_plan" class="form-control" value="@if(!empty($row)){{ $row->insurance_pet_plan }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เบี้ยเริ่มต้น</label>
            <div class="col-md-9">
                <input type="number" name="insurance_pet_premium_price" id="insurance_pet_premium_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_pet_premium_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ค่ารักษาจากอุบัติเหตุ</label>
            <div class="col-md-9">
                <input type="text" name="insurance_pet_accident" id="insurance_pet_accident" class="form-control" value="@if(!empty($row)){{ $row->insurance_pet_accident }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ค่ารักษาจากการเจ็บป่วย</label>
            <div class="col-md-9">
                <input type="text" name="insurance_pet_sick" id="insurance_pet_sick" class="form-control" value="@if(!empty($row)){{ $row->insurance_pet_sick }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง</label>
            <div class="col-md-9">
                <input type="text" name="insurance_pet_vaccine" id="insurance_pet_vaccine" class="form-control" value="@if(!empty($row)){{ $row->insurance_pet_vaccine }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ค่าฝากเลี้ยงกรณีไปต่างประเทศ</label>
            <div class="col-md-9">
                <input type="text" name="insurance_pet_deposit" id="insurance_pet_deposit" class="form-control" value="@if(!empty($row)){{ $row->insurance_pet_deposit }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">บาดเจ็บคนภายนอก</label>
            <div class="col-md-9">
                <input type="text" name="insurance_pet_injured" id="insurance_pet_injured" class="form-control" value="@if(!empty($row)){{ $row->insurance_pet_injured }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง</label>
            <div class="col-md-9">
                <input type="text" name="insurance_pet_funeral" id="insurance_pet_funeral" class="form-control" value="@if(!empty($row)){{ $row->insurance_pet_funeral }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์</label>
            <div class="col-md-9">
                <input type="text" name="insurance_pet_property" id="insurance_pet_property" class="form-control" value="@if(!empty($row)){{ $row->insurance_pet_property }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="insurance_pet_id" id="insurance_pet_id" value="{{ @$row->insurance_pet_id }}">
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

			$(".sub_menu_insurance_pet").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
