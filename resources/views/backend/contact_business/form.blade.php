@extends('../../layouts.app')

@section('title', 'FAQ(ประกันภัยธุรกิจ)')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/insurance_business/insurance_business_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="insurance_business_image_th" id="insurance_business_image_th"> Recommend 1920 x 724 px
@if(!empty($row) and $row->insurance_business_image_th != '') 
                    <br><img src="{{asset('public/uploads/insurance_business/'.$row->insurance_business_image_th)}}" width="150">
@endif
            </div>
        </div>
         --}}
        <div class="form-group">
            <label class="col-md-3 control-label">จำนวนเงินเอาประกันภัย</label>
            <div class="col-md-9">
                <input type="number" name="insurance_business_price" id="insurance_business_price" class="form-control" value="@if(!empty($row)){{ $row->insurance_business_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ต่อปี</label>
            <div class="col-md-9">
                <input type="number" name="insurance_business_price_per_year" id="insurance_business_price_per_year" class="form-control" value="@if(!empty($row)){{ $row->insurance_business_price_per_year }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">อัคคีภัย</label>
            <div class="col-md-9">
                <input type="text" name="insurance_business_fire" id="insurance_business_fire" class="form-control" value="@if(!empty($row)){{ $row->insurance_business_fire }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เงินทดแทนรายได้(สูงสุด 20 วันทำการ)</label>
            <div class="col-md-9">
                <input type="text" name="insurance_business_money_salary" id="insurance_business_money_salary" class="form-control" value="@if(!empty($row)){{ $row->insurance_business_money_salary }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ประกันเงินสด</label>
            <div class="col-md-9">
                <input type="text" name="insurance_business_money" id="insurance_business_money" class="form-control" value="@if(!empty($row)){{ $row->insurance_business_money }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เงินชดเชยเสียชีวิต</label>
            <div class="col-md-9">
                <input type="text" name="insurance_business_die" id="insurance_business_die" class="form-control" value="@if(!empty($row)){{ $row->insurance_business_die }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="insurance_business_id" id="insurance_business_id" value="{{ @$row->insurance_business_id }}">
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

			$(".sub_menu_insurance_business").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
