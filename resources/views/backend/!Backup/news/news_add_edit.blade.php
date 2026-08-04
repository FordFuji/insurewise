@extends('../../layouts.app')

@section('title', 'New Activities')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/news/news_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="news_image" id="news_image"> Recommend 850 x 450 px
@if(!empty($row) and $row->news_image != '') 
                    <br><img src="{{asset('public/uploads/news/'.$row->news_image)}}" width="150">
@endif
            </div>
        </div>
        <legend>Data</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Date</label>
            <div class="col-md-9">
                <input type="text" name="news_date" id="news_date" class="form-control" value="@if(!empty($row)) {{$row->news_date}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(Th)</label>
            <div class="col-md-9">
                <input type="text" name="news_name_th" id="news_name_th" class="form-control" value="@if(!empty($row)) {{$row->news_name_th}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(En)</label>
            <div class="col-md-9">
                <input type="text" name="news_name_en" id="news_name_en" class="form-control" value="@if(!empty($row)) {{$row->news_name_en}} @endif" required>  
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="news_name_ch" id="news_name_ch" class="form-control" value="@if(!empty($row)) {{$row->news_name_ch}} @endif" required>  
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Detail(Th)</label>
            <div class="col-md-9">
                <textarea name="news_detail_th" id="news_detail_th" class="form-control" rows="4" required>@if(!empty($row)) {{$row->news_detail_th}} @endif</textarea>
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("news_detail_th", {
                        filebrowserBrowseUrl : '{{asset("public/ckfinder/ckfinder.html")}}',
                        filebrowserImageBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Images")}}',
                        filebrowserFlashBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Flash")}}',
                        filebrowserUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                        filebrowserImageUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                        filebrowserFlashUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}'
				    });
                </script>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Detail(En)</label>
            <div class="col-md-9">
                <textarea name="news_detail_en" id="news_detail_en" class="form-control" rows="4" required>@if(!empty($row)) {{$row->news_detail_en}} @endif</textarea>
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("news_detail_en", {
                        filebrowserBrowseUrl : '{{asset("public/ckfinder/ckfinder.html")}}',
                        filebrowserImageBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Images")}}',
                        filebrowserFlashBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Flash")}}',
                        filebrowserUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                        filebrowserImageUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                        filebrowserFlashUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}'
				    });
                </script>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Detail(Ch)</label>
            <div class="col-md-9">
                <textarea name="news_detail_ch" id="news_detail_ch" class="form-control" rows="4" required>@if(!empty($row)) {{$row->news_detail_ch}} @endif</textarea>
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("news_detail_ch", {
                        filebrowserBrowseUrl : '{{asset("public/ckfinder/ckfinder.html")}}',
                        filebrowserImageBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Images")}}',
                        filebrowserFlashBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Flash")}}',
                        filebrowserUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                        filebrowserImageUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                        filebrowserFlashUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}'
				    });
                </script>
            </div>
        </div>
        <legend>Gallery</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Gallery</label>
            <div class="col-md-9">
                <input type="file" name="news_gallery_image[]" id="news_gallery_image" multiple="true">
                @if(!empty($news_gallery))
                    @foreach($news_gallery as $r)
                        <br><img src="{{asset('public/uploads/news/'.$r->news_gallery_image)}}" width="150"> <a href="{{url('backend/news/deleteImage/'.$r->news_gallery_id.'/'.$r->news_id)}}" onclick="return confirm('Confirm Delete');">Delete</a><br>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="news_id" id="news_id" value="{{ @$row->news_id }}">
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

			$(".menu_news").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
