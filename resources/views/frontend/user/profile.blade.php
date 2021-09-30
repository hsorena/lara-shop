@extends('frontend.master')

@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="login.html">حساب کاربری</a></li>
                <li><a href="register.html">ثبت نام</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Right Part Start -->
                <aside id="column-right" class="col-sm-4 hidden-xs">

                    <h3 class="subtitle"><p class="capitalize">{{ Auth::user()->name . ' ' . Auth::user()->last_name}} عزیز به صفحه کاربری خود خوش آمدید!</p> </h3>
                    <div class="panel panel-default" style="background: #f8f9fa">
                        <div class="list-group" style="margin-top: 20px; margin-right: 10px">
                            <ul class="list-item">
                                <li><a href="#">حساب کاربری</a></li>
                                <li><a href="#">لیست آدرس ها</a></li>
                                <li><a href="wishlist.html">لیست علاقه مندی</a></li>
                                <li><a href="#">تاریخچه سفارشات</a></li>
                                <li><a href="#">دانلود ها</a></li>
                                <li><a href="#">امتیازات خرید</a></li>
                                <li><a href="#">بازگشت</a></li>
                                <li><a href="#">تراکنش ها</a></li>
                                <li><a href="#">خبرنامه</a></li>
                                <li><a href="#">پرداخت های تکرار شونده</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>

                <div class="col-sm-8"><br>
                    <h3 class="subtitle" style="margin-top: 17px;"></h3>
                    <div class="panel panel-default" style="height: 500px">
                        <div class="panel-body">
                            sample text
                        </div>
                    </div>
                </div>
                <!--Right Part End -->
            </div>
        </div>
    </div>
@endsection
