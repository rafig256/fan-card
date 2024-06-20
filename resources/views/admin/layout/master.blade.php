<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap-reboot.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/vazir-ui.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/dashboard.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.rtl.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/assets/css/main-box.css')}}" crossorigin="anonymous">

    <!--<link rel="stylesheet" href="assets/css/">-->
    <script src="{{assert('admin/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/dash.js')}}"></script>
</head>
<body>
<div class="cont">
    <div class="dashboard">
        <div class="nvwl">
            <div class="nvtxt vuf-extrabold">
                <span class="uf-auth">کاربر گرامی </span>
                به پنل مدیریت هواداران دکتر پزشکیان خوش آمدید
            </div>
            <div class="bbtn">
                <a href="#">خروج</a>
            </div>
        </div>
        <div class="dash-row">

            <div class="dash-m">

                <!--item of menu-->
                <div class="item-select">

                    <div class="nl vuf-extrabold">کاربران</div>
                    <div class="icon bi bi-caret-left-fill"></div>

                </div>

                <div class="item-select-box">
                    <div class="ist">

                        <a href="#">لیست کاربران</a>
                        <a href="#">افزودن کاربر</a>
                    </div>
                </div>
                <!--item of menu-->

                <!--item of menu-->
                <div class="item-select">

                    <div class="nl vuf-extrabold">صورتحساب ها</div>
                    <div class="icon bi bi-caret-left-fill"></div>

                </div>

                <div class="item-select-box">
                    <div class="ist">
                        <a href="#">پرداخت شده</a>
                        <a href="#">پرداخت نشده</a>
                    </div>
                </div>
                <!--item of menu-->

                <!--item of menu-->
                <div class="item-select">

                    <div class="nl vuf-extrabold">تیکت ها</div>
                    <div class="icon bi bi-caret-left-fill"></div>

                </div>

                <div class="item-select-box">
                    <div class="ist">
                        <a href="#">پاسخ داده شده</a>
                        <a href="#">در حال بررسی</a>
                        <a href="#">بسته شده</a>

                    </div>
                </div>
                <!--item of menu-->

                <!--item of menu-->
                <div class="item-select">

                    <div class="nl vuf-extrabold">سفارش ها</div>
                    <div class="icon bi bi-caret-left-fill"></div>

                </div>

                <div class="item-select-box">
                    <div class="ist">
                        <a href="#">تکمیل شده</a>
                        <a href="#">مرجوعی</a>
                        <a href="#">لغو شده</a>
                        <a href="#">در انتظار پرداخت</a>

                    </div>
                </div>
                <!--item of menu-->

                <!--item of menu-->
                <div class="item-select">

                    <div class="nl vuf-extrabold">کالا ها</div>
                    <div class="icon bi bi-caret-left-fill"></div>

                </div>

                <div class="item-select-box">
                    <div class="ist">
                        <a href="#">لیست کالا ها</a>
                        <a href="#">افزودن کالا ها</a>
                        <a href="#">افزودن دسته بندی</a>
                        <a href="#">لیست دسته بندی ها</a>
                        <a href="#">سایر لورم</a>
                    </div>
                </div>
                <!--item of menu-->
            </div>
            <div class="dash-v">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>
