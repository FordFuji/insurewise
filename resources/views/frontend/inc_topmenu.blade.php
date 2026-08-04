<section id="topmenu" class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
    <div class="wrap_menu">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-lg-2 col-xl-3">
                    <a href="{{ url('index') }}">
                        <img src="{{ asset('public/frontend/images/logo.svg') }}" alt="" class="sizelogo">
                    </a>
                </div>
                <div class="col-lg-8 col-xl-7 posstatic">
                    <div class="menugroup">
                        <ul class="mainmenu">
                            <li><a href="#">ประกันรถยนต์</a>
                                <div class="dropdown_menu_container">
                                    <ul class="submenudrop">
                                        <div class="row">
                                            <div class="col">
                                                <ul>
                                                    <li><a href="{{ url('car_insurance_landing') }}">ประกันภัยรถยนต์</a></li>
                                                    <li><a href="{{ url('compulsory') }}">พ.ร.บ.</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">ประกันสุขภาพ</a>
                                <div class="dropdown_menu_container">
                                    <ul class="submenudrop">
                                        <div class="row">
                                            <div class="col">
                                                <ul>
                                                    <li><a href="{{ url('health_insurance_landing') }}">ประกันสุขภาพ</a>
                                                    </li>
                                                    <li><a href="{{ url('cancer_insurance') }}">ประกันมะเร็ง</a></li>
                                                    <li><a href="{{ url('accident_insurance') }}">ประกันอุบัติเหตุ</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">ประกันอัคคีภัย</a>
                                <div class="dropdown_menu_container">
                                    <ul class="submenudrop">
                                        <div class="row">
                                            <div class="col">
                                                <ul>
                                                    <li><a
                                                            href="{{ url('home_insurance') }}">ประกันบ้านที่อยู่อาศัย</a>
                                                    </li>
                                                    <li><a href="{{ url('condo_insurance') }}">ประกันคอนโด</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">ประกันภัยอื่นๆ</a>
                                <div class="dropdown_menu_container">
                                    <ul class="submenudrop">
                                        <div class="row  g-0">

                                            <div class="col">
                                                <ul>

                                                    <li><a href="{{ url('transportation_insurance') }}">ประกันขนส่งสินค้า</a></li>
                                                    <li><a href="{{ url('extended_insurance') }}">ประกันอะไหล่รถยนต์</a></li>
                                                    <li><a href="{{ url('travel_insurance') }}">ประกันเดินทาง</a></li>
                                                    <li><a href="{{ url('golf_insurance') }}">ประกันกอล์ฟ</a></li>
                                                    <li><a href="{{ url('business_insurance') }}">ประกันภัยธุรกิจ</a></li>
                                                    <li><a href="{{ url('pet_insurance') }}">ประกันสัตว์เลี้ยง</a></li>

                                                </ul>

                                            </div>

                                        </div>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{ url('news') }}">ข่าวสารและบทความ</a></li>
                            <li><a href="{{ url('promotion') }}">โปรโมชั่น</a></li>
                            <li><a href="{{ url('contact') }}">ติดต่อเรา</a></li>
                        </ul>
                    </div>


                </div>
                <div class="col-lg-2 col-xl-2 text-end">
                    <div class="dropdown">
@if(Session::get('member_id') == '')
                        <a class="registerBTN dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fi fi-rr-user"></i> สมัครสมาชิก
                        </a>
@else
                        <a href="{{ url('acct_page') }}"><i class="fi fi-rr-user"></i></a>
                        <a class="registerBTN dropdown-toggle" href="{{ url('logout') }}">
                             ออกจากระบบ
                        </a>
@endif

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" data-width="648" data-height="700" data-fancybox
                                    data-src="#register" href="javascript:;">สมัครสมาชิก</a></li>
                            <li><a class="dropdown-item" href="#" data-width="648" data-height="500" data-fancybox
                                    data-src="#login" href="javascript:;">เข้าสู่ระบบ</a></li>
                            <div style="display: none;" id="register">
                                <div class="titleTopic text-center">
                                    สมัครสมาชิก
                                </div>
                                <form action="{{ url('saveMember') }}" method="post" onsubmit="return saveMember();">
                                @csrf
                                <div class="contactform">
                                    {{-- <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" required>
                                        <label for="floatingInput">รหัสสมาชิก <span>*</span>
                                        </label>
                                    </div> --}}
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="inc_member_name_surname"
                                            placeholder="name@example.com" name="inc_member_name_surname" required>
                                        <label for="inc_member_name_surname">ชื่อ-นามสกุล <span>*</span>
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="inc_member_tel"
                                            placeholder="name@example.com" name="inc_member_tel" required>
                                        <label for="inc_member_tel">เบอร์โทรศัพท์ <span>*</span>
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="inc_member_email"
                                            placeholder="name@example.com" name="inc_member_email" required>
                                        <label for="inc_member_email">อีเมล
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="inc_member_password"
                                            placeholder="name@example.com" name="inc_member_password" required>
                                        <label for="inc_member_password">รหัสผ่าน
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="inc_member_confirm_password"
                                            placeholder="name@example.com" name="inc_member_confirm_password" required>
                                        <label for="inc_member_confirm_password">ยืนยันรหัสผ่าน
                                        </label>
                                    </div>
                                    <div class="form-floating  mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here"
                                            id="inc_member_address" name="inc_member_address" style="height: 100px" required></textarea>
                                        <label for="inc_member_address">ที่อยู่ปัจจุบัน</label>
                                    </div>
                                    <center> <button type="submit" class="btn btn-primary">สมัครสมาชิก</button></center>
                                </div>
                                </form>
                            </div>
                            <div style="display: none;" id="login">
                                <div class="titleTopic text-center">
                                    เข้าสู่ระบบ
                                </div>
                                <form action="{{ url('login') }}" method="post">
                                @csrf
                                <div class="contactform">
                                    {{-- <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">รหัสสมาชิก <span>*</span>
                                        </label>
                                    </div> --}}

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="inc_member_email2"
                                            placeholder="name@example.com" name="inc_member_email2">
                                        <label for="inc_member_email2">อีเมล
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="inc_member_password2"
                                            name="inc_member_password2" placeholder="name@example.com">
                                        <label for="inc_member_password2">รหัสผ่าน
                                        </label>
                                    </div>


                                    <center> {{-- <a href="acct_page.php" class="btn btn-primary">เข้าสู่ระบบ</a> --}}
                                        <input type="submit" class="btn btn-primary" value="เข้าสู่ระบบ"> 
                                        <br><br>
                                        <a href="#" data-width="648" data-height="300" data-fancybox data-src="#forget"
                                            href="javascript:;" class="forgetpass">ลืมรหัสผ่าน ?</a>
                                        <div style="display: none;" id="forget">
                                            <div class="titleTopic text-center">
                                                ลืมรหัสผ่าน
                                            </div>
                                            <div class="contactform">


                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="floatingInput"
                                                        placeholder="name@example.com">
                                                    <label for="floatingInput">อีเมล
                                                    </label>
                                                </div>
                                            </div>

                                            <center><a href="#" class="btn btn-primary">ส่งรหัสผ่านใหม่</a></center>
                                        </div>
                                    </center>

                                </div>
                            </form>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mobilemenu" class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
    <div class="wrap_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <button type="button" class="btn-open first"><svg xmlns="http://www.w3.org/2000/svg" width="22"
                            height="22" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg></button>

                    <div class="zeynep">
                        <div class="acct_mobile">
                                <div class="row">
                                    <div class="col-12">
@if(Session::get('member_id') == '')
                                        <li><a class="btn btn-register" data-width="648" data-height="700" data-fancybox
                                                data-src="#register" href="javascript:;">สมัครสมาชิก</a></li>
                                        <li><a class="btn btn-register" href="#" data-width="648" data-height="500"
                                                data-fancybox data-src="#login" href="javascript:;">เข้าสู่ระบบ</a></li>
@else
                                        <li><a href="{{ url('acct_page') }}"><i class="fi fi-rr-user"></i></a></li>
                                        <li><a class="btn btn-register" href="{{ url('logout') }}">ออกจากระบบ</a></li>
@endif
                                    </div>
                                </div>
                            </div>
                        <ul>
                            <li class="has-submenu">
                                <a href="#" data-submenu="stores">ประกันรถยนต์</a>

                                <div id="stores" class="submenu">
                                    <div class="submenu-header">
                                        <a href="#" data-submenu-close="stores">ประกันรถยนต์</a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="{{ url('car_insurance_landing') }}">
                                                ประกันภัยรถยนต์</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('compulsory') }}">
                                                พ.ร.บ.</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenu">
                                <a href="#" data-submenu="about">ประกันสุขภาพ</a>

                                <div id="about" class="submenu">
                                    <div class="submenu-header">
                                        <a href="{{ url('health_insurance_landing') }}"
                                            data-submenu-close="about">ประกันสุขภาพ</a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="{{ url('health_insurance_landing') }}">ประกันสุขภาพ</a>
                                        </li>
                                        <li><a href="{{ url('cancer_insurance') }}">ประกันมะเร็ง</a></li>
                                        <li><a href="{{ url('accident_insurance') }}">ประกันอุบัติเหตุ</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenu">
                                <a href="#" data-submenu="fire">ประกันอัคคีภัย</a>

                                <div id="fire" class="submenu">
                                    <div class="submenu-header">
                                        <a href="#" data-submenu-close="fire">ประกันอัคคีภัย</a>
                                    </div>
                                    <ul>
                                        <li><a href="{{ url('home_insurance') }}">ประกันบ้านที่อยู่อาศัย</a></li>
                                        <li><a href="{{ url('condo_insurance') }}">ประกันคอนโด</a></li>


                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenu">
                                <a href="#" data-submenu="others">ประกันภัยอื่นๆ</a>

                                <div id="others" class="submenu">
                                    <div class="submenu-header">
                                        <a href="#" data-submenu-close="others">ประกันภัยอื่นๆ</a>
                                    </div>
                                    <ul>

                                        <li><a href="{{ url('transportation_insurance') }}">ประกันขนส่งสินค้า</a></li>
                                        <li><a href="{{ url('extended_insurance') }}">ประกันอะไหล่รถยนต์</a></li>
                                        <li><a href="{{ url('travel_insurance') }}">ประกันเดินทาง</a></li>
                                        <li><a href="{{ url('golf_insurance') }}">ประกันกอล์ฟ</a></li>

                                        <li><a href="{{ url('business_insurance') }}">ประกันภัยธุรกิจ</a></li>
                                        <li><a href="{{ url('pet_insurance') }}">ประกันสัตว์เลี้ยง</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="{{ url('news') }}">ข่าวสารและบทความ</a>
                            </li>
                            <li>
                                <a href="{{ url('promotion') }}">โปรโมชั่น</a>
                            </li>

                            <li>
                                <a href="{{ url('contact') }}">ติดต่อเรา</a>
                            </li>



                        </ul>

                    </div>
                    <div class="zeynep-overlay"></div>
                </div>
                <div class="col-6">
                    <div class="mainlogo">
                        <a href="{{ url('index') }}">
                            <img src="{{ asset('public/frontend/images/logo.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3">

                </div>
            </div>

        </div>
    </div>
</section>

<script>
    $(function () {
        // init zeynepjs side menu
        var zeynep = $('.zeynep').zeynep({
            opened: function () {
                // log
                console.log('the side menu opened')
            },
            closed: function () {
                // log
                console.log('the side menu closed')
            }
        })

        // dynamically bind 'closing' event
        zeynep.on('closing', function () {
            // log
            console.log('this event is dynamically binded')
        })

        // handle zeynepjs overlay click
        $('.zeynep-overlay').on('click', function () {
            zeynep.close()
        })

        // open zeynepjs side menu
        $('.btn-open').on('click', function () {
            zeynep.open()
        })
    })
</script>

<script>
    $(window).scroll(function () {
        if ($(this).scrollTop() > 25) {
            $('.wrap_menu').addClass("sticky");
        } else {
            $('.wrap_menu').removeClass("sticky");
        }

    });
    $(document).ready(function () {
        var mmH = $('.wrap_menu').outerHeight(true);

        $('.wrapperPages').eq(0).css('padding-top', mmH);


    });

    function saveMember() {
        if($("#inc_member_password").val() != $("#inc_member_confirm_password").val()) {
            alert('รหัสผ่านต้องเหมือนกับยืนยันรหัสผ่าน');

            $("#inc_member_password").val('');
            $("#inc_member_confirm_password").val('');

            $("#inc_member_password").focus();

            return false;
        } else {
            return true;
        }
    }
</script>