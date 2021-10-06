<!doctype html>
<html lang="en">

<head>
    <title>پنل مدیریت | خانه</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Brego Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

{{--    <link rel="icon" href="favicon.png" type="image/x-icon">--}}
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate-css/vivify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-select/dist/css/bootstrap-select.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}"/>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/site.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dropzone/dropzone.css') }}">


</head>
<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ asset('assets/image/icon.svg') }}" width="40" height="40" alt="Brego"></div>
        <p>لطفا صبر کنید...</p>
    </div>
</div>

<!-- Theme Setting -->
<div class="themesetting">
    <a href="#" class="theme_btn"><i class="icon-magic-wand"></i></a>
    <ul class="choose-skin list-unstyled mb-0">
        <li data-theme="green">
            <div class="green"></div>
        </li>
        <li data-theme="orange">
            <div class="orange"></div>
        </li>
        <li data-theme="blush" class="active">
            <div class="blush"></div>
        </li>
        <li data-theme="cyan">
            <div class="cyan"></div>
        </li>
    </ul>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="#"><img src="{{asset('assets/image/icon.svg')}}" alt="Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="جستجو در اینجا..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>
            </div>

            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="page-social.html" class="social icon-menu" title="News">اجتماعی</a></li>
                        <li><a href="page-news.html" class="news icon-menu" title="News">اخبار</a></li>
                        <li><a href="javascript:void(0);" class="megamenu_toggle icon-menu" title="منوی مگا">مگا</a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-envelope"></i>
                                <span class="notification-dot bg-green">4</span>
                            </a>
                            <ul class="dropdown-menu right_chat email vivify fadeIn">
                                <li class="header">شما 4 ایمیل جدید دارید</li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                            <div class="media-body">
                                                <span class="name">آرش خادملو <small
                                                        class="float-right">همین الان</small></span>
                                                <span class="message">به روز رسانی گیتهاب</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                            <div class="media-body">
                                                <span class="name">آرش خادملو <small
                                                        class="float-right">12 دقیقه پیش</small></span>
                                                <span class="message">پیام جدید</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                            <div class="media-body">
                                                <span class="name">آرش خادملو <small
                                                        class="float-right">38 دقیقه پیش</small></span>
                                                <span class="message">رفع اشکال طراحی</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media mb-0">
                                            <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                            <div class="media-body">
                                                <span class="name">آرش خادملو <small
                                                        class="float-right">2 ساعت پیش</small></span>
                                                <span class="message">رفع اشکال</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="notification-dot bg-azura">4</span>
                            </a>
                            <ul class="dropdown-menu feeds_widget vivify fadeIn">
                                <li class="header">شما 4 اطلاعیه جدید دارید</li>
                                <li>
                                    <a href="#">
                                        <div class="feeds-left bg-red"><i class="fa fa-check"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-danger">مشکل حل شده<small
                                                    class="float-right text-muted">9:10 صبح</small></h4>
                                            <small>ما همه اشکال طراحی با پاسخگو را رفع کرده ایم</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="feeds-left bg-info"><i class="fa fa-user"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-info">کاربر جدید <small
                                                    class="float-right text-muted">9:15 صبح</small></h4>
                                            <small>حس خوبی دارم توپ توپم! با تشکر از تیم</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="feeds-left bg-orange"><i class="fa fa-question-circle"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-warning">هشدار سرور <small
                                                    class="float-right text-muted">9:10 صبح</small></h4>
                                            <small>اتصال شما خصوصی نیست</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="feeds-left bg-green"><i class="fa fa-thumbs-o-up"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-success">2 بازخورد جدید <small
                                                    class="float-right text-muted">9:10 صبح</small></h4>
                                            <small>این یک پایان هوشمند برای سایت شما خواهد بود</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i
                                    class="icon-bubbles"></i></a></li>
                        <li><a href="#" class="icon-menu"><i class="icon-power"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="megamenu" class="megamenu particles_js">
        <button class="megamenu_toggle btn btn-danger"><i class="icon-close"></i></button>
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mega-card">
                        <h6 class="title">تنظیمات عمومی</h6>
                        <ul class="setting-list list-unstyled mb-0">
                            <li>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                                <span>هرکسی مرا دنبال کند</span>
                            </li>
                            <li>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                                <span>ایمیل تغییر مسیر</span>
                            </li>
                            <li>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                                <span>اطلاعیه</span>
                            </li>
                            <li>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                                <span>به روز رسانی خودکار</span>
                            </li>
                            <li>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                                <span>آفلاین</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mega-card">
                        <h6 class="title">لینک سریع</h6>
                        <ul class="guick_link">
                            <li><a href="#" title="">خانه</a></li>
                            <li><a href="#" title="">درباره ما</a></li>
                            <li><a href="#" title="">سوالات متداول</a></li>
                            <li><a href="#" title="">حریم خصوصی</a></li>
                            <li><a href="#" title="">نقشه سایت</a></li>
                            <li><a href="#" title="">تماس با ما</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mega-card">
                        <h6 class="title">تماس با ما</h6>
                        <form>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" placeholder="نام را وارد کنید">
                            </div>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" placeholder="ایمیل را وارد کنید">
                            </div>
                            <div class="input-group mb-2">
                                <textarea class="form-control" placeholder="پیام" rows="2"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-round">تایید</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="mega-card">
                        <h6 class="title">گالری تصویر</h6>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://via.placeholder.com/1024x640"
                                         alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://via.placeholder.com/1024x640"
                                         alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://via.placeholder.com/1024x640"
                                         alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">قبلی</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">بعدی</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="card mt-4">
                    <div class="header">
                        <h2>سوالات متداول</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">اقدام</a></li>
                                    <li><a href="javascript:void(0);">دیگر اقدام</a></li>
                                    <li><a href="javascript:void(0);">یک چیز دیگر</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="accordion" id="accordion-faqs">
                            <div>
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne-faqs" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            س: نحوه استفاده از متغیرهای SCSS برای ساخت رنگ سفارشی <span
                                                class="float-right badge  badge-primary">23</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne-faqs" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordion-faqs">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
                                        جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                                        ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo-faqs" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            س: چهار سؤال درباره استراتژی DevOps شما چیست؟ <span
                                                class="float-right badge  badge-success">8</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo-faqs" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion-faqs">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
                                        جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                                        ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree-faqs" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            س: مقایسه مایکروسافت و مفاهیم برنامه نویسی کاربردی <span
                                                class="float-right badge  badge-danger">13</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree-faqs" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordion-faqs">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
                                        جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                                        ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>

    <div id="rightbar" class="rightbar">
        <div class="slim_scroll">
            <div class="chat_detail vivify fadeIn delay-100">
                <button class="btn btn-sm btn-block btn-primary btn-round mb-4 back_btn" title=""><i
                        class="icon-control-rewind mr-1"></i> بازگشت
                </button>
                <ul class="chat-widget clearfix">
                    <li class="left float-left">
                        <img src="https://via.placeholder.com/140x140" class="rounded" alt="">
                        <div class="chat-info">
                            <span class="message">سلام، آرش<br>به روز رسانی در پروژه X چیست؟</span>
                        </div>
                    </li>
                    <li class="right">
                        <img src="https://via.placeholder.com/140x140" class="rounded" alt="">
                        <div class="chat-info">
                            <span class="message">سلام،، علیرضا<br> تقریبا تکمیل شده است من امروز به شما یک ایمیل ارسال خواهم کرد.</span>
                        </div>
                    </li>
                    <li class="left float-left">
                        <img src="https://via.placeholder.com/140x140" class="rounded" alt="">
                        <div class="chat-info">
                            <span class="message">عالیه. شما را در شب می گیرم.</span>
                        </div>
                    </li>
                    <li class="right">
                        <img src="https://via.placeholder.com/140x140" class="rounded" alt="">
                        <div class="chat-info">
                            <span class="message">Sمطمئنا امروز یک انفجار خواهیم داشت.</span>
                        </div>
                    </li>
                </ul>
                <div class="input-group p-t-15">
                    <textarea rows="3" class="form-control" placeholder="متن را اینجا وارد کنید..."></textarea>
                </div>
            </div>
            <div class="chat_list">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="جستجو...">
                    </div>
                </form>
                <ul class="right_chat list-unstyled mb-0">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object" src="https://via.placeholder.com/140x140" alt="">
                                <div class="media-body">
                                    <span class="name">آرش خادملو</span>
                                    <span class="message">همین الان</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                <div class="media-body">
                                    <span class="name">آرش خادملو</span>
                                    <span class="message">38 دقیقه پیش</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                <div class="media-body">
                                    <span class="name">آرش خادملو</span>
                                    <span class="message">2 ساعت پیش</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                <div class="media-body">
                                    <span class="name">آرش خادملو</span>
                                    <span class="message">2 ساعت پیش</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                <div class="media-body">
                                    <span class="name">آرش خادملو</span>
                                    <span class="message">1day ago</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                <div class="media-body">
                                    <span class="name">آرش خادملو</span>
                                    <span class="message">38 دقیقه پیش</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                <div class="media-body">
                                    <span class="name">آرش خادملو</span>
                                    <span class="message">2 ساعت پیش</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="#"><img src="{{asset('assets/image/icon.svg')}}" alt="Logo" class="img-fluid logo"><span>پنل مدیریت</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i
                    class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="header">محصولات</li>
                    <li class="active">

                    <li>
                        <a href="#" class="has-arrow"><i class="fa fa-shopping-cart"></i><span>محصولات</span></a>
                        <ul>
                            <li><a href="{{ route('products.create') }}"><i class="fa fa-plus"></i>محصول جدید</a></li>
                            <li><a href="{{ route('products.index') }}"><i class="fa fa-list"></i>لیست محصولات</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="has-arrow"><i class="fa fa-code-fork"></i><span>دسته بندی محصولات</span></a>
                        <ul>
                            <li><a href="{{ route('categories.index') }}"><i class="fa fa-list"></i>دسته بندی ها</a>
                            </li>
                            <li><a href="{{ route('categories.create') }}"><i class="fa fa-plus"></i>دسته بندی جدید</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="has-arrow"><i class="fa fa-bars"></i><span>ویژگی های محصولات</span></a>
                        <ul>
                            <li><a href="{{ route('attributes.index') }}"><i class="fa fa-list"></i>لیست ویژگی ها</a>
                            </li>
                            <li><a href="{{ route('attributes.create') }}"><i class="fa fa-plus"></i>ویژگی جدید</a></li>
                            <li><a href="{{ route('attributes-values.create') }}"><i class="fa fa-plus"></i>مقدار
                                    جدید</a></li>
                            <li><a href="{{ route('attributes-values.index') }}"><i class="fa fa-list"></i>لیست
                                    مقادیر</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="has-arrow"><i class="fa fa-bookmark"></i><span>برند ها</span></a>
                        <ul>
                            <li><a href="{{ route('brands.index') }}"><i class="fa fa-list"></i>لیست برند ها</a></li>
                            <li><a href="{{ route('brands.create') }}"><i class="fa fa-plus"></i>برند جدید</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="has-arrow"><i class="fa fa-gift"></i><span>کد های تخفیف</span></a>
                        <ul>
                            <li><a href="{{ route('coupons.index') }}"><i class="fa fa-list"></i>لیست کد ها</a></li>
                            <li><a href="{{ route('coupons.create') }}"><i class="fa fa-plus"></i>کد جدید</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                {{--                <div class="col-md-6 col-sm-12">--}}
                {{--                    <h1>داشبورد</h1>--}}
                {{--                </div>--}}
                <div class="col-md-12 col-sm-12 text-right">
                    <div class="inlineblock vivify swoopInTop delay-900 mr-4">بازدیدکنندگان <span id="mini-bar-chart1"
                                                                                                  class="mini-bar-chart"></span>
                    </div>
                    <div class="inlineblock vivify swoopInTop delay-950 mr-4">بازدیدها <span id="mini-bar-chart2"
                                                                                             class="mini-bar-chart"></span>
                    </div>
                    <div class="inlineblock vivify swoopInTop delay-1000">چت ها <span id="mini-bar-chart3"
                                                                                      class="mini-bar-chart"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Javascript -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>
<script src="{{ asset('../assets/vendor/toastr/toastr.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{ asset('assets/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
@yield('scripts')
</body>
</html>
