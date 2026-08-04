@extends('../../layouts.app')

@section('title', 'Import Excel พ.ร.บ.')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/import_excel_insurance_prb/import_excel_insurance_prb')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="prb_faq_image_th" id="prb_faq_image_th"> Recommend 1920 x 724 px
@if(!empty($row) and $row->prb_faq_image_th != '') 
                    <br><img src="{{asset('public/uploads/prb_faq/'.$row->prb_faq_image_th)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(En)</label>
            <div class="col-md-9">
                <input type="file" name="prb_faq_image_en" id="prb_faq_image_en"> Recommend 1920 x 724 px
@if(!empty($row) and $row->prb_faq_image_en != '') 
                    <br><img src="{{asset('public/uploads/prb_faq/'.$row->prb_faq_image_en)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="prb_faq_image_ch" id="prb_faq_image_ch"> Recommend 1920 x 724 px
@if(!empty($row) and $row->prb_faq_image_ch != '') 
                    <br><img src="{{asset('public/uploads/prb_faq/'.$row->prb_faq_image_ch)}}" width="150">
@endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">Import Excel</label>
            <div class="col-md-9">
                <input type="file" name="import_excel_insurance_prb" id="import_excel_insurance_prb" class="form-control" required> Recommend Extentsion .xlsx
                <p><a href="{{ asset('public/backend/import_excel/import_excel_insurance_prb.xlsx') }}">Example</a></p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>

    {{-- log import excel --}}
    @php
	$log = DB::table('log_import_excel')
		->where('log_import_excel_insurance', '=', 'prb')
		->orderBy('log_import_excel_id', 'desc')
		->get();
	@endphp
	<table width="100%" border="1">
		<tr>
			<th>Filename</th>
			<th>Date</th>
			<th>Time</th>
			<th>Upload By</th>
		</tr>
	@if(!empty($log))
		@foreach($log as $r)
			@php
			$exp_log_import_excel_datetime_create = explode(' ', $r->log_import_excel_datetime_create)
			@endphp
		<tr>
			<td>{{ $r->log_import_excel_file_name }}</td>
			<td>{{ $exp_log_import_excel_datetime_create[0] }}</td>
			<td>{{ $exp_log_import_excel_datetime_create[1] }}</td>
			<td>{{ $r->log_import_excel_user }}</td>
		</tr>
		@endforeach
	@endif
	</table>
    {{-- End log import excel --}}
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

			$(".sub_menu_12").css("display", "block");

			$(".sub_menu_import_excel_insurance_prb").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
