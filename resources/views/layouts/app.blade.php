<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<base href="">
	<meta charset="utf-8" />
	<title>Insurewise :: @yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="csrf-token" content="{{csrf_token()}}">

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="{{asset('public/backend/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet')}}" />
	<link href="{{asset('public/backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/backend/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/backend/css/animate.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/backend/css/style.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/backend/css/style-responsive.min.css')}}" rel="stylesheet" />
	<link href="{{asset('public/backend/css/theme/default.css')}}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{asset('public/backend/plugins/DataTables/css/data-table.css')}}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('public/backend/plugins/pace/pace.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->

</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="#" class="navbar-brand"><span class="navbar-logo"></span> Insurewise</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{asset('public/backend/img/user-13.jpg')}}" alt="" />
							<span class="hidden-xs"><?php if(!empty($row_user)) echo $row_user->user_name;?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
@if(Session::get('department_id') == '1')
							<li><a href="{{url('backend/user/user_add_edit/'.Session::get('user_id'))}}">Edit User</a></li>
							<li class="divider"></li>
@endif
							<li><a href="{{url('backend/logout')}}">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
        		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="{{asset('public/backend/img/user-13.jpg')}}" alt="" /></a>
						</div>
						<div class="info">
							{{ Session::get('user_name') }}
							<small>{{ Session::get('department_name') }}</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-th"></i>
						    <span>Data</span>
						</a>
@if(Session::get('user_id') != '')
						<ul class="sub-menu">
							<li class="has-sub menu_sub_authen"><a href="javascript:check_menu(1);">Authen</a>
								<ul class="sub-menu sub_menu_1">
									<li class="sub_sub_menu_department"><a href="{{url('backend/department/')}}">Department</a></li>
									<li class="sub_sub_menu_user"><a href="{{url('backend/user/')}}">User</a></li>
								</ul>
							</li>
							<!-- <li class="about_us"><a href="{{url('backend/about_us/')}}">About Us</a></li> -->
							<!-- <li class="has-sub menu_sub_authen"><a href="javascript:check_menu(2);">Study Online</a>
								<ul class="sub-menu sub_menu_2">
									<li class="sub_menu_coach"><a href="{{url('backend/coach/')}}">Coach</a></li>
									<li class="sub_menu_study_online"><a href="{{url('backend/study_online/')}}">Study Online</a></li>
								</ul>
							</li> -->
							<li class="menu_banner_slide"><a href="{{url('backend/banner_slide/')}}">Banner Slide</a></li>
							<li class="has-sub menu_sub_insurance"><a href="javascript:check_menu(9);">ประกัน</a>
								<ul class="sub-menu sub_menu_9">
									<li class="sub_menu_insurance_company"><a href="{{url('backend/insurance_company/')}}">บริษัทประกัน</a></li>
								</ul>
							</li>
							<li class="has-sub menu_sub_insurance_car"><a href="javascript:check_menu(2);">ประกันรถยนต์</a>
								<ul class="sub-menu sub_menu_2">
									<li class="sub_menu_contact_car"><a href="{{url('backend/contact_car/')}}">Contact Car</a></li>
									<li class="sub_menu_quotation_car"><a href="{{url('backend/quotation_car/')}}">ขอใบเสนอราคา</a></li>
									<li class="sub_menu_car_contact_confirm"><a href="{{url('backend/car_contact_confirm/')}}">Confirm Contact Car</a></li>
									<li class="sub_menu_brand_car"><a href="{{url('backend/brand_car/')}}">Brand Car</a></li>
									<li class="sub_menu_model_car"><a href="{{url('backend/model_car/')}}">Model Car</a></li>
									<li class="sub_menu_sub_model_car"><a href="{{url('backend/sub_model_car/')}}">รุ่นย่อย/CC</a></li>
									<li class="sub_menu_year_car"><a href="{{url('backend/year_car/')}}">Year Car</a></li>
									{{-- <li class="sub_menu_province_car"><a href="{{url('backend/province_car/')}}">ทะเบียนจังหวัด</a></li> --}}
									<li class="sub_menu_level_car"><a href="{{url('backend/level_car/')}}">ประเภทประกัน</a></li>
									<li class="sub_menu_damages_first"><a href="{{url('backend/damages_first/')}}">ค่าเสียหายส่วนแรก</a></li>
									<li class="sub_menu_type_repair"><a href="{{url('backend/type_repair/')}}">ประเภทการซ่อม</a></li>
									{{-- <li class="sub_menu_car_company"><a href="{{url('backend/car_company/')}}">บริษัทประกันภัยรถยนต์</a></li> --}}
									<li class="sub_menu_car_table_insurance"><a href="{{url('backend/car_table_insurance/')}}">ตารางความคุ้มครอง</a></li>
									<li class="sub_menu_insurance_car"><a href="{{url('backend/insurance_car/')}}">ประกันรถยนต์</a></li>
									<li class="sub_menu_car_faq"><a href="{{url('backend/car_faq/')}}">FAQ</a></li>
								</ul>
							</li>
							<li class="has-sub menu_sub_insurance_car"><a href="javascript:check_menu(3);">ประกันสุขภาพ</a>
								<ul class="sub-menu sub_menu_3">
									<li class="sub_menu_healthy_contact"><a href="{{url('backend/healthy_contact/')}}">ดูรายละเอียด</a></li>
									<li class="sub_menu_quotation_health"><a href="{{url('backend/quotation_health/')}}">ติดต่อเจ้าหน้าที่</a></li>
									<li class="sub_menu_healthy_contact_confirm"><a href="{{url('backend/healthy_contact_confirm/')}}">Confirm Contact</a></li>
									<li class="sub_menu_type_insurance"><a href="{{url('backend/type_insurance/')}}">Type Insurance</a></li>
									<li class="sub_menu_insurance_healthy"><a href="{{url('backend/insurance_healthy/')}}">ประกันสุขภาพ</a></li>
									<li class="sub_menu_healthy_faq"><a href="{{url('backend/healthy_faq/')}}">FAQ</a></li>
								</ul>
							</li>
							<li class="has-sub menu_sub_insurance_golf"><a href="javascript:check_menu(4);">ประกันกอล์ฟ</a>
								<ul class="sub-menu sub_menu_4">
									<li class="sub_menu_golf_contact"><a href="{{url('backend/golf_contact/')}}">Contact</a></li>
									<li class="sub_menu_insurance_golf"><a href="{{url('backend/insurance_golf/')}}">ประกันกอล์ฟ</a></li>
									<li class="sub_menu_golf_faq"><a href="{{url('backend/golf_faq/')}}">FAQ</a></li>
								</ul>
							</li>
							<li class="has-sub menu_sub_insurance_prb"><a href="javascript:check_menu(5);">พ.ร.บ.</a>
								<ul class="sub-menu sub_menu_5">
									<li class="sub_menu_prb"><a href="{{url('backend/prb/')}}">พ.ร.บ.</a></li>
									<li class="sub_menu_prb_faq"><a href="{{url('backend/prb_faq/')}}">FAQ</a></li>
								</ul>
							</li>
							<li class="has-sub menu_sub_insurance_travel"><a href="javascript:check_menu(6);">ประกันการเดินทาง</a>
								<ul class="sub-menu sub_menu_6">
									<li class="sub_menu_contact_travel"><a href="{{url('backend/contact_travel/')}}">Contact</a></li>
									<li class="sub_menu_contact_travel_detail"><a href="{{url('backend/contact_travel_detail/')}}">Contact Detail</a></li>
									{{-- <li class="sub_menu_insurance_travel_row"><a href="{{url('backend/insurance_travel_row/')}}">ประกันการเดินทาง(แถวที่)</a></li> --}}
									<li class="sub_menu_insurance_travel"><a href="{{url('backend/insurance_travel/')}}">ประกันการเดินทาง</a></li>
									<li class="sub_menu_travel_faq"><a href="{{url('backend/travel_faq/')}}">FAQ</a></li>
								</ul>
							</li>
							<li class="has-sub menu_sub_insurance_pet"><a href="javascript:check_menu(7);">ประกันสัตว์เลี้ยง</a>
								<ul class="sub-menu sub_menu_7">
									<li class="sub_menu_contact_pet"><a href="{{url('backend/contact_pet/')}}">Contact Pet</a></li>
									<li class="sub_menu_contact_pet_detail"><a href="{{url('backend/contact_pet_detail/')}}">Contact Pet Detail</a></li>
									{{-- <li class="sub_menu_insurance_pet_row"><a href="{{url('backend/insurance_pet_row/')}}">แบบประกันภัย(แถวที่)</a></li> --}}
									<li class="sub_menu_insurance_pet"><a href="{{url('backend/insurance_pet/')}}">ประกันสัตว์เลี้ยง</a></li>
									<li class="sub_menu_pet_faq"><a href="{{url('backend/pet_faq/')}}">FAQ</a></li>
								</ul>
							</li>
							<li class="has-sub menu_sub_insurance_home"><a href="javascript:check_menu(8);">ประกันอัคคีภัย</a>
								<ul class="sub-menu sub_menu_8">
									<li class="sub_menu_contact_home"><a href="{{url('backend/contact_home/')}}">Contact Home</a></li>
									<li class="sub_menu_contact_detail_home"><a href="{{url('backend/contact_detail_home/')}}">Contact Detail Home</a></li>
									<li class="sub_menu_contact_condo"><a href="{{url('backend/contact_condo/')}}">Contact Condo</a></li>
									<li class="sub_menu_contact_condo_detail"><a href="{{url('backend/contact_condo_detail/')}}">Contact Condo Detail</a></li>
									<li class="sub_menu_insurance_home"><a href="{{url('backend/insurance_home/')}}">ประกันบ้านที่อยู่อาศัย</a></li>
									{{-- <li class="sub_menu_insurance_condo_row"><a href="{{url('backend/insurance_condo_row/')}}">ประกันคอนโด(แถวที่)</a></li> --}}
									<li class="sub_menu_insurance_condo"><a href="{{url('backend/insurance_condo/')}}">ประกันคอนโด</a></li>
									<li class="sub_menu_home_faq"><a href="{{url('backend/home_faq/')}}">FAQ(บ้าน)</a></li>
									<li class="sub_menu_condo_faq"><a href="{{url('backend/condo_faq/')}}">FAQ(คอนโด)</a></li>
								</ul>
							</li>
							<li class="has-sub menu_sub_insurance_car"><a href="javascript:check_menu(9);">ประกันภัยมะเร็ง</a>
								<ul class="sub-menu sub_menu_9">
									{{-- <li class="sub_menu_healthy_contact"><a href="{{url('backend/healthy_contact/')}}">Contact</a></li>
									<li class="sub_menu_healthy_contact_confirm"><a href="{{url('backend/healthy_contact_confirm/')}}">Confirm Contact</a></li>
									<li class="sub_menu_type_insurance"><a href="{{url('backend/type_insurance/')}}">Type Insurance</a></li>
									<li class="sub_menu_insurance_healthy"><a href="{{url('backend/insurance_healthy/')}}">ประกันสุขภาพ</a></li> --}}
									<li class="sub_menu_contact_cancer"><a href="{{url('backend/contact_cancer/')}}">Contact</a></li>
									<li class="sub_menu_cancer_faq"><a href="{{url('backend/cancer_faq/')}}">FAQ</a></li>
									<li class="sub_menu_insurance_cancer"><a href="{{url('backend/insurance_cancer/')}}">ประกันภัยมะเร็ง</a></li>
								</ul>
							</li>
							<li class="has-sub menu_sub_insurance_car"><a href="javascript:check_menu(10);">ประกันภัยอุบัติเหตุ</a>
								<ul class="sub-menu sub_menu_10">
									{{-- <li class="sub_menu_healthy_contact"><a href="{{url('backend/healthy_contact/')}}">Contact</a></li>
									<li class="sub_menu_healthy_contact_confirm"><a href="{{url('backend/healthy_contact_confirm/')}}">Confirm Contact</a></li>
									<li class="sub_menu_type_insurance"><a href="{{url('backend/type_insurance/')}}">Type Insurance</a></li>
									<li class="sub_menu_insurance_healthy"><a href="{{url('backend/insurance_healthy/')}}">ประกันสุขภาพ</a></li> --}}
									<li class="sub_menu_contact_accident"><a href="{{url('backend/contact_accident/')}}">Contact</a></li>
									<li class="sub_menu_confirm_accident"><a href="{{url('backend/confirm_accident/')}}">Detail</a></li>
									<li class="sub_menu_confirm_accident2"><a href="{{url('backend/confirm_accident2/')}}">Confirm</a></li>
									<li class="sub_menu_accident_faq"><a href="{{url('backend/accident_faq/')}}">FAQ</a></li>
									<li class="sub_menu_insurance_accident"><a href="{{url('backend/insurance_accident/')}}">ประกันภัยอุบัติเหตุ</a></li>
								</ul>
							</li>
							<li class="has-sub menu_sub_insurance_car"><a href="javascript:check_menu(11);">ประกันภัยอื่นๆ</a>
								<ul class="sub-menu sub_menu_11">
									<li class="sub_menu_contact_transportation"><a href="{{url('backend/contact_transportation/')}}">Contact ประกันภัยขนส่ง</a></li>
									<li class="sub_menu_detail_transportation"><a href="{{url('backend/detail_transportation/')}}">Detail ประกันภัยขนส่ง</a></li>
									<li class="sub_menu_confirm_transportation"><a href="{{url('backend/confirm_transportation/')}}">Confirm ประกันภัยขนส่ง</a></li>
									<li class="sub_menu_contact_business"><a href="{{url('backend/contact_business/')}}">Contact ประกันภัยธุรกิจ</a></li>
									<li class="sub_menu_contact_extended"><a href="{{url('backend/contact_extended/')}}">Contact ประกันอะไหล่รถยนต์</a></li>
									<li class="sub_menu_extended_insurance"><a href="{{url('backend/extended_insurance/')}}">ประกันอะไหล่รถยนต์</a></li>
									<li class="sub_menu_insurance_business"><a href="{{url('backend/insurance_business/')}}">ประกันภัยธุรกิจ</a></li>
									<li class="sub_menu_extended_faq"><a href="{{url('backend/extended_faq/')}}">FAQ(ประกันอะไหล่รถยนต์)</a></li>
									<li class="sub_menu_business_faq"><a href="{{url('backend/business_faq/')}}">FAQ(ประกันภัยธุรกิจ)</a></li>
									<li class="sub_menu_transportation_faq"><a href="{{url('backend/transportation_faq/')}}">FAQ(ประกันขนส่งสินค้า)</a></li>
									<li class="sub_menu_insurance_transportation"><a href="{{url('backend/insurance_transportation/')}}">ประกันขนส่งสินค้า</a></li>
								</ul>
							</li>
							<li class="has-sub menu_sub_import_excel"><a href="javascript:check_menu(12);">Import Excel</a>
								<ul class="sub-menu sub_menu_12">
									<li class="sub_menu_import_excel_insurance_car"><a href="{{url('backend/import_excel_insurance_car/')}}">Import Excel ประกันรถยนต์</a></li>
									<li class="sub_menu_import_excel_insurance_health"><a href="{{url('backend/import_excel_insurance_health/')}}">Import Excel ประกันสุขภาพ</a></li>
									{{-- <li class="sub_menu_import_excel_insurance_golf"><a href="{{url('backend/import_excel_insurance_golf/')}}">Import Excel ประกันกอล์ฟ</a></li> --}}
									<li class="sub_menu_import_excel_insurance_prb"><a href="{{url('backend/import_excel_insurance_prb/')}}">Import Excel พ.ร.บ.</a></li>
									<li class="sub_menu_import_excel_insurance_travel"><a href="{{url('backend/import_excel_insurance_travel/')}}">Import Excel ประกันการเดินทาง</a></li>
									<li class="sub_menu_import_excel_insurance_pet"><a href="{{url('backend/import_excel_insurance_pet/')}}">Import Excel ประกันสัตว์เลี้ยง</a></li>
									<li class="sub_menu_import_excel_insurance_home"><a href="{{url('backend/import_excel_insurance_home/')}}">Import Excel ประกันบ้านที่อยู่อาศัย</a></li>
									<li class="sub_menu_import_excel_insurance_condo"><a href="{{url('backend/import_excel_insurance_condo/')}}">Import Excel ประกันคอนโด</a></li>
									<li class="sub_menu_import_excel_insurance_extended"><a href="{{url('backend/import_excel_insurance_extended/')}}">Import Excel ประกันอะไหล่รถยนต์</a></li>
									<li class="sub_menu_import_excel_insurance_business"><a href="{{url('backend/import_excel_insurance_business/')}}">Import Excel ประกันธุรกิจ</a></li>
									<li class="sub_menu_import_excel_insurance_accident"><a href="{{url('backend/import_excel_insurance_accident/')}}">Import Excel ประกันภัยอุบัติเหตุ</a></li>
									<li class="sub_menu_import_excel_insurance_cancer"><a href="{{url('backend/import_excel_insurance_cancer/')}}">Import Excel ประกันภัยมะเร็ง</a></li>
									<li class="sub_menu_import_excel_insurance_transportation"><a href="{{url('backend/import_excel_insurance_transportation/')}}">Import Excel ประกันภัยการขนส่ง</a></li>
								</ul>
							</li>
							<li class="menu_member"><a href="{{url('backend/member/')}}">Member</a></li>
							<li class="menu_news_and_article"><a href="{{url('backend/news_and_article/')}}">News & Article</a></li>
							<li class="menu_promotion"><a href="{{url('backend/promotion/')}}">Promotion</a></li>
							<li class="menu_contact_us_form"><a href="{{url('backend/contact_us_form/')}}">Contact Us(Form)</a></li>
						</ul>
@endif
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
			<!-- begin page-header -->
			<h1 class="page-header">Managed Tables <small>@yield('title')</small></h1>
			<!-- end page-header -->

			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">@yield('title')</h4>
                        </div>
                        <div class="panel-body">
                        	@yield('content')
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('public/backend/jquery-1.12.3.js')}}"></script>
	<script src="{{asset('public/backend/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
	<script src="{{asset('public/backend/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
	<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--[if lt IE 9]>
		<script src="{{asset('public/backend/crossbrowserjs/html5shiv.js')}}"></script>
		<script src="{{asset('public/backend/crossbrowserjs/respond.min.js')}}"></script>
		<script src="{{asset('public/backend/crossbrowserjs/excanvas.min.js')}}"></script>
	<![endif]-->
	<script src="{{asset('public/backend/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('public/backend/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset('public/backend/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('public/backend/js/table-manage-default.demo.min.js')}}"></script>
	<script src="{{asset('public/backend/js/apps.min.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

    @yield('script_footer')
</body>
</html>
