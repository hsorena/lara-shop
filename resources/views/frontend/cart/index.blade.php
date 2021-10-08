@extends('frontend.master')

@section('content')
    <div class="container">
        <!-- Breadcrumb Start-->
        <ul class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{ route('cart.show') }}">سبد خرید</a></li>
        </ul>
        <!-- Breadcrumb End-->
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-12">
                @if(Session::has('coupon-used'))
                    <div class="alert alert-warning">{{ Session('coupon-used') }}</div>
                @endif
                @if(Session::has('coupon-no-exists'))
                    <div class="alert alert-warning">{{ Session('coupon-no-exists') }}</div>
                @endif
                @if(Session::has('cart') && count(Session::get('cart')->items))
                    <h1 class="title"><i class="fa fa-shopping-cart"></i>سبد خرید</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td class="text-center" width="25%">تصویر</td>
                                <td class="text-left">نام محصول</td>
                                <td class="text-left">کد محصول</td>
                                <td class="text-left">تعداد</td>
                                <td class="text-right">قیمت واحد</td>
                                <td class="text-right">کل</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(Session::get('cart')->items as $product)
                                <tr>
                                    <td class="text-center">
                                        <a href="{{ route('product.get' , ['slug' => $product['item']->slug]) }}">
                                            <img width="100px"
                                                 src="{{ asset('storage/photos/'.$product['item']->photos[0]->path)  }}"
                                                 alt=""
                                                 title=""
                                                 class="img-thumbnail"/>
                                        </a>
                                    </td>
                                    <td class="text-left">
                                        <a href="{{ route('product.get' , ['slug' => $product['item']->slug]) }}">
                                            {{ $product['item']->title }}
                                        </a><br/>
                                    </td>
                                    <td class="text-left">{{ $product['item']->sku }}</td>
                                    <td class="text-left">
                                        <div class="input-group btn-block quantity">
                                            <p class="" style="margin-top: 10px;font-size: 20px;">
                                                <span>{{$product['qty']}}</span></p>
                                            <span class="input-group-btn">
                                            <a href="{{ route('cart.add' , [ 'id'=> $product['item']->id]) }}"
                                               data-toggle="tooltip" title="افزایش" class="btn btn-primary"><i
                                                    class="fa fa-plus"></i></a>
                                            <button type="button" data-toggle="tooltip" title="کاهش"
                                                    class="btn btn-danger" onclick="event.preventDefault();
                                                document.getElementById('remove-cart-item_{{$product['item']->id}}').submit();"><i
                                                    class="fa fa-minus"></i></button>
                                            <form id="remove-cart-item_{{$product['item']->id}}"
                                                  action="{{ route('cart.remove', ['id' => $product['item']->id]) }}"
                                                  method="post" style="display: none;">
                                                @csrf
                                            </form>
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-right">{{ $product['item']->discount_price ? $product['item']->discount_price : $product['item']->price }}
                                        تومان
                                    </td>
                                    <td class="text-right">{{ $product['price'] }} تومان</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <h2 class="subtitle">حالا مایلید چه کاری انجام دهید؟</h2>
                    <p>در صورتی که کد تخفیف در اختیار دارید میتوانید از آن در اینجا استفاده کنید.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">استفاده از کوپن تخفیف</h4>
                                </div>
                                <div id="collapse-coupon" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <label class="col-sm-4 control-label" for="input-coupon">کد تخفیف خود را در اینجا وارد کنید</label>
                                        <form action="{{ route('coupon.add') }}" method="post">
                                            @csrf
                                            <div class="input-group">
                                                <input required type="text" name="code" placeholder="کد تخفیف خود را در اینجا وارد کنید" class="form-control" />
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary" >اعمال کوپن</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-8">
                            <table class="table table-bordered">
                                <tr>
                                    <td class="text-right"><strong>جمع کل:</strong></td>
                                    <td class="text-right">{{ $cart->totalPurePrice }} تومان</td>
                                </tr>
                                @if(Auth::check() && Session::get('cart')->coupon)
                                    <tr>
                                        <td class="text-right"><strong> کد تخفیف :  {{ Session::get('cart')->coupon['coupon']->title }} </strong></td>
                                        <td class="text-right">{{ Session::get('cart')->couponDiscount }} تومان</td>
                                    </tr>
                                @endif
                                <tr>
                                    <td class="text-right"><strong>تخفیف :</strong></td>
                                    <td class="text-right">{{ $cart->totalDiscountPrice }} تومان</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>مبلغ پرداختی :</strong></td>
                                    <td class="text-right">{{ $cart->totalPrice }} تومان</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="pull-left"><a href="checkout.html" class="btn btn-primary">تسویه حساب</a></div>&nbsp;&nbsp;&nbsp;
                        <div class="pull-left"><a href="{{ route('home') }}" class="btn btn-default">ادامه خرید</a>
                        </div>
                    </div>
                @else
                    <div class="row text-center">
                        <div class="col-4">
                            <h1>سبد خرید شما خالی است!</h1>
                            <img src="{{ asset('storage/photos/emty-cart.png') }}" alt="">
                        </div>
                    </div>
                @endif
            </div>
            <!--Middle Part End -->
        </div>
    </div>
@endsection
