@extends('../../layouts.app')

@section('title', 'News & Article')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/news_and_article/news_and_article_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="news_and_article_image" id="news_and_article_image"> Recommend 392 x 293 px
@if(!empty($row) and $row->news_and_article_image != '') 
                    <br><img src="{{asset('public/uploads/news_and_article/'.$row->news_and_article_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">News Or Article</label>
            <div class="col-md-9">
                <select name="news_and_article_news_or_article" id="news_and_article_news_or_article" class="form-control" required>
                    <option value="">Please Select</option>
                    <option value="News" @if(!empty($row) and $row->news_and_article_news_or_article == 'News'){{ 'selected '}}@endif>News</option>
                    <option value="Article" @if(!empty($row) and $row->news_and_article_news_or_article == 'Article'){{ 'selected '}}@endif>Article</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Suggest</label>
            <div class="col-md-9">
                <input type="checkbox" name="news_and_article_suggest" value="Yes" @if(!empty($row) and $row->news_and_article_suggest == 'Yes'){{ 'checked' }}@endif> Suggest
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Topic</label>
            <div class="col-md-9">
                <input type="text" name="news_and_article_topic" id="news_and_article_topic" class="form-control" value="@if(!empty($row)){{ $row->news_and_article_topic }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Description</label>
            <div class="col-md-9">
                <textarea name="news_and_article_description" id="news_and_article_description" class="form-control" rows="4" required>@if(!empty($row)){{ $row->news_and_article_description }}@endif</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Date</label>
            <div class="col-md-9">
                <input type="text" name="news_and_article_date" id="news_and_article_date" class="form-control" value="@if(!empty($row)){{ $row->news_and_article_date }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Detail</label>
            <div class="col-md-9">
                <textarea name="news_and_article_detail" id="news_and_article_detail" class="form-control" rows="4">@if(!empty($row)){{ $row->news_and_article_detail }}@endif</textarea>
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
                    CKEDITOR.replace("news_and_article_detail", {
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
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="news_and_article_id" id="news_and_article_id" value="{{ @$row->news_and_article_id }}">
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
        $("#news_and_article_date").datepicker({ dateFormat: 'yy-mm-dd' });
    });
    </script>
    <script>
        $(document).ready(function() {
			App.init();

			//$(".sub_menu_2").css("display", "block");

			$(".menu_news_and_article").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
