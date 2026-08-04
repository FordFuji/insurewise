@extends('../../layouts.app')

@section('title', 'ติดต่อเจ้าหน้าที่')

@section('content')
    {{-- <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/quotation_health/form')}}';" style="margin-bottom: 10px;">Add</button> --}}
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Health Name</th>
					<th>Name Surname</th>
                    <th>Telephone</th>
					<th>Email</th>
					<th>ช่วงเวลาติดต่อกลับ</th>
					<th>Create Date</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>                             
    </div>
	{{-- Export Excel --}}
	<form action="{{ url('backend/quotation_health_export_excel') }}" method="post">
		@csrf
		<input type="submit" value="Export Excel" value="{{ date('Y-m-d') }}"> วันที่ <input type="text" name="date_start" id="date_start" value="{{ date('Y-m-d') }}"> ถึงวันที่ <input type="text" name="date_end" id="date_end" value="{{ date('Y-m-d') }}">
	</form>
	{{-- End Export Excel --}}
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
						"url": "{{url('backend/quotation_health/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "quotation_health_id"},
						{"data" : "insurance_healthy_name"},
						{"data" : "quotation_health_name_surname"},
						{"data" : "quotation_health_telephone"},
						{"data" : "quotation_health_email"},
						{"data" : "quotation_health_call"},
						{"data" : "quotation_health_datetime_create"},
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
			$(".sub_menu_3").css("display", "block");

			$(".sub_menu_quotation_health").prop('class', 'active');
		});
	</script>

	{{-- Export Excel --}}
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

	<script>
		$(function() {
		  	$("#date_start").datepicker({ dateFormat: 'yy-mm-dd' });
			$("#date_end").datepicker({ dateFormat: 'yy-mm-dd' });
		});
	</script>
	{{-- End Export Excel --}}
@endsection
