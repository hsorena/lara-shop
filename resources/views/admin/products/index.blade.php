@extends('admin.master')


@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">لیست محصولات</span>
                </div>


                <div class="card-body">
                    @if(Session::has('product_created'))
                        <div class="alert alert-success">{{Session('product_created')}}</div>
                    @endif
                    @if(Session::has('product_updated'))
                        <div class="alert alert-success">{{Session('product_updated')}}</div>
                    @endif
                    @if(Session::has('product_deleted'))
                        <div class="alert alert-danger">{{Session('product_deleted')}}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table header-border table-hover table-custom spacing5">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>کد محصول</th>
                                <th>عنوان محصول</th>
                                <th>توضیحات</th>
                                <th>تصویر</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th class="w60">{{ $product->id }}</th>
                                    <th class="w60">{{ $product->sku }}</th>
                                    <td>{{ $product->title }}</td>
                                    <td>{{print(substr($product->description , 0 , 50)) . '...'   }}</td>
                                    <td><img width="75px" src="{{ asset('/storage/photos/' . $product->photos[0]->path) }}">
                                    </td>
                                    <td>
                                        <a href="{{ route('products.edit' , ['id' => $product->id]) }}" type="button"
                                           class="btn btn-outline-warning mb-2" title="ویرایش"><span
                                                class="sr-only"></span> <i class="fa fa-edit"></i></a>
                                        <form class="inlineblock" method="post"
                                              action="{{ route('products.destroy' , ['product' => $product])}}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-outline-danger mb-2" title="حذف"><span
                                                    class="sr-only"></span> <i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
