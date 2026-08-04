@extends('../../layouts.app')

@section('title', 'รุ่นย่อย/CC')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/sub_model_car/sub_model_car_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="sub_model_car_image_th" id="sub_model_car_image_th"> Recommend 1920 x 724 px
@if(!empty($row) and $row->sub_model_car_image_th != '') 
                    <br><img src="{{asset('public/uploads/sub_model_car/'.$row->sub_model_car_image_th)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(En)</label>
            <div class="col-md-9">
                <input type="file" name="sub_model_car_image_en" id="sub_model_car_image_en"> Recommend 1920 x 724 px
@if(!empty($row) and $row->sub_model_car_image_en != '') 
                    <br><img src="{{asset('public/uploads/sub_model_car/'.$row->sub_model_car_image_en)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="sub_model_car_image_ch" id="sub_model_car_image_ch"> Recommend 1920 x 724 px
@if(!empty($row) and $row->sub_model_car_image_ch != '') 
                    <br><img src="{{asset('public/uploads/sub_model_car/'.$row->sub_model_car_image_ch)}}" width="150">
@endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">Brand Car</label>
            <div class="col-md-9">
                <select name="brand_car_id" id="brand_car_id" class="form-control" onchange="changeBrandCar(this.value);" required>
                    <option value="">Please Select</option>
@if(!empty($brand_car))
    @foreach($brand_car as $r)
                    <option value="{{ $r->brand_car_id }}" @if(!empty($row) and $row->brand_car_id == $r->brand_car_id){{ 'selected' }}@endif>{{ $r->brand_car_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Model Car</label>
            <div class="col-md-9">
                <select name="model_car_id" id="model_car_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($model_car))
    @foreach($model_car as $r)
                    <option value="{{ $r->model_car_id }}" @if(!empty($row) and $row->model_car_id == $r->model_car_id){{ 'selected' }}@endif>{{ $r->model_car_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">รุ่นย่อย/CC</label>
            <div class="col-md-9">
                <input type="text" name="sub_model_car_name" id="sub_model_car_name" class="form-control" value="@if(!empty($row)){{ $row->sub_model_car_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="sub_model_car_id" id="sub_model_car_id" value="{{ @$row->sub_model_car_id }}">
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

			$(".sub_menu_sub_model_car").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}

        function changeBrandCar(brand_car_id) {
            //alert(brand_car_id);
            $.post('{{ url("ajaxChangeBrandCar") }}', { brand_car_id: brand_car_id, "_token": "{{ csrf_token() }}" }, function(data) {
                $("#model_car_id").html(data);
            });
        }
	</script>
@endsection
