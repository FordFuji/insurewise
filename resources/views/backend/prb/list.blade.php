@extends('../../layouts.app')

@section('title', 'พ.ร.บ.')

@section('content')
    <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/prb/form')}}';" style="margin-bottom: 10px;">Add</button>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>รูปภาพ</th>
					<th>ชื่อ</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>                             
    </div>
	<form action="{{ url('backend/prb_pdf') }}" method="post" enctype="multipart/form-data">
		@csrf
	<br>Upload PDF <input type="file" name="prb_pdf_file"> @if(!empty($prb_pdf))<a href="{{ asset('public/uploads/prb/'.$prb_pdf->prb_pdf_file)}}" target="_blank">{{ $prb_pdf->prb_pdf_file }}</a>@endif<br><input type="submit" name="submit" value="Upload PDF">
	</form>
	{{-- ลบ Data ประกัน --}}
    <br><div align="right"><input type="button" value="Clear Data" onclick="clearData();"></div><br>
    {{-- End ลบ Data ประกัน --}}
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
						"url": "{{url('backend/prb/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "prb_id"},
						{"data" : "prb_image"},
						{"data" : "prb_name"},
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
			$(".sub_menu_5").css("display", "block");

			$(".sub_menu_prb").prop('class', 'active');
		});

		// ลบ Data ประกัน
        function clearData() {
            if(confirm('Confirm Delete') == true) {
                $.post('{{ url("ajaxClearInsurancePrb") }}', { "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('Clear Data Success');

					location.reload();
                });
            }
        }
        // End ลบ Data ประกัน
	</script>
@endsection
