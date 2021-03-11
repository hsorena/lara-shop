<!doctype html>
<html lang="en">

<head>
    <title>پنل مدیریت | خانه</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Brego Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="favicon.png" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/animate-css/vivify.min.css">

    <link rel="stylesheet" href="../assets/vendor/c3/c3.min.css"/>
    <link rel="stylesheet" href="../assets/vendor/chartist/css/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="../assets/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="../assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css"/>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/site.min.css">

</head>
<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../assets/images/icon.svg" width="40" height="40" alt="Brego"></div>
        <p>لطفا صبر کنید...</p>
    </div>
</div>

<!-- Theme Setting -->
<div class="themesetting">
    <a href="#" class="theme_btn"><i class="icon-magic-wand"></i></a>
    <ul class="choose-skin list-unstyled mb-0">
        <li data-theme="green"><div class="green"></div></li>
        <li data-theme="orange"><div class="orange"></div></li>
        <li data-theme="blush" class="active"><div class="blush"></div></li>
        <li data-theme="cyan"><div class="cyan"></div></li>
    </ul>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="index.html"><img src="../assets/images/icon.svg" alt="Brego Logo" class="img-fluid logo"></a>
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
                        <li><a href="javascript:void(0);" class="megamenu_toggle icon-menu" title="منوی مگا">مگا</a></li>
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
                                                <span class="name">آرش خادملو <small class="float-right">همین الان</small></span>
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
                                                <span class="name">آرش خادملو <small class="float-right">12 دقیقه پیش</small></span>
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
                                                <span class="name">آرش خادملو <small class="float-right">38 دقیقه پیش</small></span>
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
                                                <span class="name">آرش خادملو <small class="float-right">2 ساعت پیش</small></span>
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
                                            <h4 class="title text-danger">مشکل حل شده<small class="float-right text-muted">9:10 صبح</small></h4>
                                            <small>ما همه اشکال طراحی با پاسخگو را رفع کرده ایم</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="feeds-left bg-info"><i class="fa fa-user"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-info">کاربر جدید <small class="float-right text-muted">9:15 صبح</small></h4>
                                            <small>حس خوبی دارم توپ توپم! با تشکر از تیم</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="feeds-left bg-orange"><i class="fa fa-question-circle"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-warning">هشدار سرور <small class="float-right text-muted">9:10 صبح</small></h4>
                                            <small>اتصال شما خصوصی نیست</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="feeds-left bg-green"><i class="fa fa-thumbs-o-up"></i></div>
                                        <div class="feeds-body">
                                            <h4 class="title text-success">2 بازخورد جدید <small class="float-right text-muted">9:10 صبح</small></h4>
                                            <small>این یک پایان هوشمند برای سایت شما خواهد بود</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="icon-bubbles"></i></a></li>
                        <li><a href="page-login.html" class="icon-menu"><i class="icon-power"></i></a></li>
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
                                <textarea  class="form-control" placeholder="پیام" rows="2"></textarea>
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
                                    <img class="d-block w-100" src="https://via.placeholder.com/1024x640" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://via.placeholder.com/1024x640" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://via.placeholder.com/1024x640" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">قبلی</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
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
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
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
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-faqs" aria-expanded="true" aria-controls="collapseOne">
                                            س: نحوه استفاده از متغیرهای SCSS برای ساخت رنگ سفارشی <span class="float-right badge  badge-primary">23</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne-faqs" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faqs">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo-faqs" aria-expanded="false" aria-controls="collapseTwo">
                                            س: چهار سؤال درباره استراتژی DevOps شما چیست؟ <span class="float-right badge  badge-success">8</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo-faqs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faqs">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree-faqs" aria-expanded="false" aria-controls="collapseThree">
                                            س: مقایسه مایکروسافت و مفاهیم برنامه نویسی کاربردی <span class="float-right badge  badge-danger">13</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree-faqs" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faqs">
                                    <div class="card-body">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
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
                <button class="btn btn-sm btn-block btn-primary btn-round mb-4 back_btn" title=""><i class="icon-control-rewind mr-1"></i> بازگشت</button>
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
                    <textarea  rows="3" class="form-control" placeholder="متن را اینجا وارد کنید..."></textarea>
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
            <a href="index.html"><img src="../assets/images/icon.svg" alt="Brego Logo" class="img-fluid logo"><span>برگو</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="https://via.placeholder.com/140x140" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>خوش آمديد،</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>آرش خادملو</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                        <li><a href="page-profile.html"><i class="icon-user"></i>پروفایل من</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>پیام</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>تنظیمات</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.html"><i class="icon-power"></i>خروج</a></li>
                    </ul>
                </div>
                <button class="btn btn-sm btn-block btn-primary btn-round mt-3" title=""><i class="icon-plus mr-1"></i> ایجاد جدید</button>
            </div>
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="header">اصلی</li>
                    <li class="active">
                        <a href="#Dashboard" class="has-arrow"><i class="icon-speedometer"></i><span>داشبورد</span></a>
                        <ul>
                            <li class="active"><a href="index.html">نسخه روشن</a></li>
                        </ul>
                    </li>
                    <li class="header">برنامه</li>
                </ul>
            </nav>
        </div>
    </div>

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>داشبورد</h1>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="inlineblock vivify swoopInTop delay-900 mr-4">بازدیدکنندگان <span id="mini-bar-chart1" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-950 mr-4">بازدیدها <span id="mini-bar-chart2" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-1000">چت ها <span id="mini-bar-chart3" class="mini-bar-chart"></span></div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                                <div class="ml-4">
                                    <span>درآمد کلی</span>
                                    <h4 class="mb-0 font-weight-medium">7805 تومان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-azura text-white rounded-circle"><i class="fa fa-credit-card"></i></div>
                                <div class="ml-4">
                                    <span>هزینه جدید</span>
                                    <h4 class="mb-0 font-weight-medium">3651 تومان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-users"></i></div>
                                <div class="ml-4">
                                    <span>بازدید روزانه</span>
                                    <h4 class="mb-0 font-weight-medium">5,805</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-in-bg bg-pink text-white rounded-circle"><i class="fa fa-life-ring"></i></div>
                                <div class="ml-4">
                                    <span>نرخ بیکاری</span>
                                    <h4 class="mb-0 font-weight-medium">13651 تومان</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>بازدید کنندگان سایت</h2>
                            <ul class="header-dropdown dropdown">

                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">اقدام</a></li>
                                        <li><a href="javascript:void(0);">دیگر اقدام</a></li>
                                        <li><a href="javascript:void(0);">یک چیز دیگر</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="world-map-markers" class="jvector-map" style="height: 245px"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider3" class="carousel vert slide" data-ride="carousel" data-interval="1700">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="card-value float-right text-muted"><i class="wi wi-fog"></i></div>
                                                <h3 class="mb-1">12°C</h3>
                                                <div>لندن</div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="card-value float-right text-muted"><i class="wi wi-day-cloudy"></i></div>
                                                <h3 class="mb-1">18°C</h3>
                                                <div>نیو یورک</div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="card-value float-right text-muted"><i class="wi wi-sunrise"></i></div>
                                                <h3 class="mb-1">37°C</h3>
                                                <div>دهلی نو</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="2000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="card-value float-right text-muted"><i class="icon-drawer"></i></div>
                                                <h3 class="mb-1">302</h3>
                                                <div>صندوق ورودی</div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="card-value float-right text-muted"><i class="icon-star"></i></div>
                                                <h3 class="mb-1">21</h3>
                                                <div>ستاره دار</div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="card-value float-right text-muted"><i class="icon-notebook"></i></div>
                                                <h3 class="mb-1">2</h3>
                                                <div>پیش نویس</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-value float-right text-muted"><i class="icon-bubbles"></i></div>
                                    <h3 class="mb-1">102</h3>
                                    <div>پیام ها</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>دنبال کنندگان جدید</h2>
                        </div>
                        <div class="body">
                            <ul class="right_chat w_followers list-unstyled mb-0">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                            <div class="media-body">
                                                <span class="name">@MelissaMcCoy</span>
                                                <span class="message">طراح، بلاگر</span>
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
                                                <span class="name">@Joge Lucky</span>
                                                <span class="message">توسعه دهنده جاوا</span>
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
                                                <span class="name">@JuanMartinez</span>
                                                <span class="message">مدیر عامل، پارادایم شیفت</span>
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
                                                <span class="name">@آرش خادملو</span>
                                                <span class="message">مدیر هنری، فیلم برش</span>
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
                                                <span class="name">@LouisHenry</span>
                                                <span class="message">نویسنده، مجله ویرایشگر</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="https://via.placeholder.com/45x45" alt="">
                                            <div class="media-body">
                                                <span class="name">@آرش خادملو</span>
                                                <span class="message">مدیر هنری، فیلم برش</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table header-border table-hover table-custom spacing5">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>محصول</th>
                                <th>محبوبیت</th>
                                <th>تخفیف</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="w60">1</th>
                                <td>محدوده دکور خانه</td>
                                <td>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-primary">70%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>ملزومات حمام</td>
                                <td>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">70%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>دیزنی شاهزاده خانم پینک 18 "کیسه مدرسه</td>
                                <td>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-dark">70%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>آیفون ایکس اس</td>
                                <td>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-danger">70%</span>
                                </td>
                            </tr>
                            <tr>
                                <th>5</th>
                                <td>ساعت هوشمند اپل</td>
                                <td>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-warning">70%</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/jvectormap.bundle.js"></script>
<script src="../assets/vendor/toastr/toastr.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>
