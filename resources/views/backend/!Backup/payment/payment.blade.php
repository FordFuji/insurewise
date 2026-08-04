@extends('../../layouts.app')

@section('title', 'Payment')

@section('content')
    {{-- <button class="btn btn-sm btn-primary m-r-5" type="button" onclick="window.location.href='{{url('backend/promocode/promocode_add_edit')}}';" style="margin-bottom: 10px;">Add</button> --}}
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
					<th>&nbsp;</th>
                    <th>ID</th>
                    <th>Order No</th>
					<th>Payment Method</th>
					<th>Name - Surname</th>
					<th>Telephone</th>
					<th>Datetime</th>
					<th>Price</th>
					<th>Slip</th>
                    <th>Datetime Create</th>
					<th>Datetime Update</th>
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
						"url": "{{url('backend/payment/server_processing')}}",
						"data": function (d) {},
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					},
					"columns": [
						{"data" : "check_payment"},
						{"data" : "payment_id"},
						{"data" : "order_no"},
						{"data" : "payment_payment_method"},
						{"data" : "payment_name_surname"},
						{"data" : "payment_telephone"},
						{"data" : "payment_datetime"},
						{"data" : "payment_price"},
						{"data" : "payment_slip"},
						{"data" : "payment_datetime_create"},
						{"data" : "payment_datetime_update"},
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
			$(".menu_payment").prop('class', 'active');
		});

		function checkPayment(payment_id) {
			if($("#id_" + payment_id).is(":checked") == true) {
				var order_detail_status = 'Yes';
			} else if($("#id_" + payment_id).is(":checked") == false) {
				var order_detail_status = 'No';
			}

			//alert(order_detail_status);
			$.post('{{ url("ajaxPaymentOrderStatus") }}', { payment_id: payment_id, order_detail_status: order_detail_status, "_token": "{{ csrf_token() }}" }, function(data) {

			});
		}
	</script>
@endsection
