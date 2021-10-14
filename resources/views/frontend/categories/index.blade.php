@extends('frontend.master')

@section('content')
    <div class="container" id="app">
        <!-- Breadcrumb Start-->
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="category.html">الکترونیکی</a></li>
        </ul>
        <!-- Breadcrumb End-->
        <product-component :category="{{ $category }}"></product-component>
    </div>
@endsection

@section('vue')
    <script type="text/javascript" src="{{ asset('js/vue.min.js') }}"></script>
@endsection
