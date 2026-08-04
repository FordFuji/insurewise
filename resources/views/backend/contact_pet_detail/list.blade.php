@extends('../../layouts.app')

@section('title', 'ประกันสัตว์เลี้ยง')

@section('content')
    {{-- <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/contact_pet_detail/form')}}';" style="margin-bottom: 10px;">Add</button> --}}
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>แผนประกันภัย</th>
					<th>ชื่อ - นามสกุล</th>
					<th>เบอร์โทรศัพท์</th>
					<th>อีเมล์</th>
					<th>Datetime Create</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>                             
    </div>
	{{-- Export Excel --}}
	<form action="{{ url('backend/contact_pet_detail_export_excel') }}" method="post">
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
						"url": "{{url('backend/contact_pet_detail/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "contact_pet_detail_id"},
						{"data" : "insurance_pet_name"},
						{"data" : "contact_pet_detail_name_surname"},
						{"data" : "contact_pet_detail_tel"},
						{"data" : "contact_pet_detail_email"},
						{"data" : "contact_pet_detail_datetime_create"},
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
			$(".sub_menu_7").css("display", "block");

			$(".sub_menu_contact_pet_detail").prop('class', 'active');
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
