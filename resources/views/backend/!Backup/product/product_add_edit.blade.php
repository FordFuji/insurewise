@extends('../../layouts.app')

@section('title', 'Product')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/product/product_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Data</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="product_image" id="product_image"> Recommend 474 x 510 px
@if(!empty($row) and $row->product_image != '')
                    <br><img src="{{asset('public/uploads/product/'.$row->product_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Category(Th)</label>
            <div class="col-md-9">
                <input type="text" name="product_category_name_th" id="product_category_name_th" value="@php if(!empty($row)) echo $row->product_category_name_th @endphp" class="form-control" required> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Category(En)</label>
            <div class="col-md-9">
                <input type="text" name="product_category_name_en" id="product_category_name_en" value="@php if(!empty($row)) echo $row->product_category_name_en @endphp" class="form-control" required> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Category(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="product_category_name_ch" id="product_category_name_ch" value="@php if(!empty($row)) echo $row->product_category_name_ch @endphp" class="form-control" required> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(Th)</label>
            <div class="col-md-9">
                <input type="text" name="product_name_th" id="product_name_th" value="@php if(!empty($row)) echo $row->product_name_th @endphp" class="form-control" required> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(En)</label>
            <div class="col-md-9">
                <input type="text" name="product_name_en" id="product_name_en" value="@php if(!empty($row)) echo $row->product_name_en @endphp" class="form-control" required> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="product_name_ch" id="product_name_ch" value="@php if(!empty($row)) echo $row->product_name_ch @endphp" class="form-control" required> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Code</label>
            <div class="col-md-9">
                <input type="text" name="product_code" id="product_code" value="@php if(!empty($row)) echo $row->product_code @endphp" class="form-control" required> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Description(Th)</label>
            <div class="col-md-9">
                <textarea name="product_description_th" id="product_description_th" class="form-control" rows="4" required>@php if(!empty($row)) echo $row->product_description_th @endphp</textarea> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Description(En)</label>
            <div class="col-md-9">
                <textarea name="product_description_en" id="product_description_en" class="form-control" rows="4" required>@php if(!empty($row)) echo $row->product_description_en @endphp</textarea> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Description(Ch)</label>
            <div class="col-md-9">
                <textarea name="product_description_ch" id="product_description_ch" class="form-control" rows="4" required>@php if(!empty($row)) echo $row->product_description_ch @endphp</textarea> 
            </div>
        </div>
        <legend>Feature</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Feature(Th)</label>
            <div class="col-md-9">
                <textarea name="product_feature_th" id="product_feature_th">@php if(!empty($row)) echo $row->product_feature_th @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("product_feature_th", {
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
            <label class="col-md-3 control-label">Feature(En)</label>
            <div class="col-md-9">
                <textarea name="product_feature_en" id="product_feature_en">@php if(!empty($row)) echo $row->product_feature_en @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("product_feature_en", {
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
            <label class="col-md-3 control-label">Feature(Ch)</label>
            <div class="col-md-9">
                <textarea name="product_feature_ch" id="product_feature_ch">@php if(!empty($row)) echo $row->product_feature_ch @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("product_feature_ch", {
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
        <legend>Addition</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Addition(Th)</label>
            <div class="col-md-9">
                <textarea name="product_addition_th" id="product_addition_th">@php if(!empty($row)) echo $row->product_addition_th @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("product_addition_th", {
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
            <label class="col-md-3 control-label">Addition(En)</label>
            <div class="col-md-9">
                <textarea name="product_addition_en" id="product_addition_en">@php if(!empty($row)) echo $row->product_addition_en @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("product_addition_en", {
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
            <label class="col-md-3 control-label">Addition(Ch)</label>
            <div class="col-md-9">
                <textarea name="product_addition_ch" id="product_addition_ch">@php if(!empty($row)) echo $row->product_addition_ch @endphp</textarea> 
                <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                <script>
				    CKEDITOR.replace("product_addition_ch", {
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
        <legend>Price</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Product</label>
            <div class="col-md-8">
                <input type="number" name="product_price" id="product_price" class="form-control" value="@php if(!empty($row)) echo $row->product_price; @endphp" required> 
            </div>
            <div class="col-md-1">
                Baht
            </div>
        </div>
        <legend>Gallery</legend>
        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-9">
                <input type="file" name="product_gallery_image[]" multiple="true"> Recommend 474 x 510 px
@if(!empty($product_gallery)) 
    @foreach($product_gallery as $r)
                <br><img src="{{asset('public/uploads/product/'.$r->product_gallery_image)}}" width="150"> <a href="{{url('backend/product_gallery_delete/'.$r->product_gallery_id.'/'.$product_id)}}" onclick="return confirm('Confirm Delete');">Delete</a><br>
    @endforeach
@endif
            </div>
        </div>
        <legend>Stock</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Stock</label>
            <div class="col-md-9">
                <input type="number" name="product_stock" id="product_stock" class="form-control" value="@php if(!empty($row)) echo $row->product_stock; @endphp" required> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="product_id" id="product_id" value="{{ @$row->product_id }}">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>
@endsection

@section('script_footer')
    <script>
        $(document).ready(function() {
			App.init();

			$(".menu_product").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.product_feature_th.setData('');
            CKEDITOR.instances.product_feature_en.setData('');
            CKEDITOR.instances.product_feature_ch.setData('');

            CKEDITOR.instances.product_addition_th.setData('');
            CKEDITOR.instances.product_addition_en.setData('');
            CKEDITOR.instances.product_addition_ch.setData('');
		}
	</script>
@endsection
