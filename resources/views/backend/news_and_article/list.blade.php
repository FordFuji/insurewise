@extends('../../layouts.app')

@section('title', 'News & Article')

@section('content')
    <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/news_and_article/form')}}';" style="margin-bottom: 10px;">Add</button>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
					<th>ปักหมุด</th>
                    <th>Image</th>
					<th>Topic</th>
					<th>Description</th>
					<th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>                             
    </div>
@endsection

@section('script_footer')
    <script>
        $(document).ready(function() {
		    App.init();
			//TableManageDefault.init();
    		
			var TableList = $('#data-table').dataTable({
            	"ordering": true,
				"stateSave": true,
				"pageLength": 10,
				lengthMenu: [
					[ 10, 25, 50, 100, -1],
					[ '10', '25', '50', '100', 'All']
				],
				dom: 'Bfrtip',
					"ajax": {
						"type": "POST",
						"url": "{{url('backend/news_and_article/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "news_and_article_id"},
						{"data" : "news_and_article_home"},
						{"data" : "news_and_article_image"},
						{"data" : "news_and_article_topic"},
						{"data" : "news_and_article_description"},
						{"data" : "news_and_article_date"},
						{"data" : "action"},
					],
				});
            
		    
		    $("#page-loader").addClass('hide');
		    $("#page-container").addClass('in');
		    
		    // start search
		    $('input.global_filter').on( 'keyup click', function () {
		        filterGlobal();
		    } );
		 
		    $('input.column_filter').on( 'keyup click', function () {
		        filterColumn( $(this).parents('td').attr('data-column') );
		    } );
		    // end search
		});
		
		function filterGlobal () {
		    $('#data-table').DataTable().search(
		        $('#global_filter').val()
		    ).draw();
		}
		 
		function filterColumn ( i ) {
		    $('#data-table').DataTable().columns( i ).search(
		        $('#col' + i + '_filter').val()
		    ).draw();
		}

		$(document).ready(function() {
			//$(".sub_menu_2").css("display", "block");

			$(".menu_news_and_article").prop('class', 'active');
		});

		function checkNewsAndArticle(news_and_article_id) {
			if($("#news_and_article_home_" + news_and_article_id).is(":checked") == true) {
				var news_home = 'Yes';
			} else if($("#news_and_article_home_" + news_and_article_id).is(":checked") == false) {
				var news_home = 'No';
			}

			// alert(news_home);

			$.post('{{ url("ajaxNewsAndArticleHome") }}', { news_and_article_id: news_and_article_id, news_home: news_home, "_token": "{{ csrf_token() }}" }, function(data) {
				location.reload();
			});
		}
	</script>
@endsection
