@extends('frontend.master')

@section('content')
    <div id="container">
        <div class="container" id="app">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="login.html">حساب کاربری</a></li>
                <li><a href="register.html">ثبت نام</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div class="col-sm-9" id="content">
                    <h1 class="title">ثبت نام حساب کاربری</h1>
                    <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="{{ route('login') }}">صفحه لاگین</a> مراجعه کنید.</p>
                    <form class="form-horizontal" action="{{ route('register') }}" method="post">
                        @csrf
                        <fieldset id="account">
                            <div class="form-group required">
                                <label for="input-firstname" class="col-sm-2 control-label">نام</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-firstname" placeholder="نام" value="" name="firstname">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-lastname" class="col-sm-2 control-label">نام خانوادگی</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-lastname" placeholder="نام خانوادگی" value="" name="lastname">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-email" class="col-sm-2 control-label">آدرس ایمیل</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="input-email" placeholder="آدرس ایمیل" value="" name="email">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-telephone" class="col-sm-2 control-label">شماره همراه</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="input-telephone" placeholder="شماره همراه" value="" name="mobile">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-telephone" class="col-sm-2 control-label">تلفن ثابت</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" id="input-telephone" placeholder="تلفن ثابت" value="" name="telephone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-fax" class="col-sm-2 control-label">کد ملی</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-fax" placeholder="کد ملی" value="" name="national_code">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset id="address">
                            <legend>آدرس</legend>
                            <select-city-component></select-city-component>
                            <div class="form-group required">
                                <label for="input-address-1" class="col-sm-2 control-label">آدرس</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-address-1" placeholder="آدرس" value="" name="address">
                                </div>
                            </div>

                            <div class="form-group required">
                                <label for="input-postcode" class="col-sm-2 control-label">کد پستی</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-postcode" placeholder="کد پستی" value="" name="postal_code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-company" class="col-sm-2 control-label">شرکت</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-company" placeholder="شرکت" value="" name="company">
                                </div>
                            </div>


                        </fieldset>
                        <fieldset>
                            <legend>رمز عبور شما</legend>
                            <div class="form-group required">
                                <label for="input-password" class="col-sm-2 control-label">رمز عبور</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="input-password" placeholder="رمز عبور" value="" name="password">
                                </div>
                            </div>
                        </fieldset>

                        <div class="buttons">
                            <div class="pull-right">
                                <input type="checkbox" value="1" name="agree">
                                &nbsp;من <a class="agree" href="#"><b>سیاست حریم خصوصی</b> را خوانده ام و با آن موافق هستم</a> &nbsp;
                                <input type="submit" class="btn btn-primary" value="ادامه">
                            </div>
                        </div>
                    </form>
                </div>
                <!--Middle Part End -->
                <!--Right Part Start -->
                <!--Right Part End -->
            </div>
        </div>
    </div>
@endsection

