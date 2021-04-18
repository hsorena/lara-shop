@extends('admin.master')


@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">لیست برند ها</span>
                </div>

                <div class="card-body">
                    @if(Session::has('brand_created'))
                        <div class="alert alert-success">{{Session('brand_created')}}</div>
                    @endif
                    @if(Session::has('brand_updated'))
                        <div class="alert alert-info">{{Session('brand_updated')}}</div>
                    @endif
                    @if(Session::has('brand_deleted'))
                        <div class="alert alert-danger">{{Session('brand_deleted')}}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table header-border table-hover table-custom spacing5">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان برند</th>
                                <th>توضیحات</th>
                                <th>تصویر</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <th class="w60">{{ $brand->id }}</th>
                                    <td>{{ $brand->title }}</td>
                                    <td>{{ $brand->description }}</td>
                                    <td><img width="75px" src="{{ asset('/storage/photos/' . $brand->photo->path) }}">
                                    </td>
                                    <td>
                                        <a href="{{ route('brands.edit' , ['id' => $brand->id])}}" type="button"
                                           class="btn btn-outline-warning mb-2" title="ویرایش"><span
                                                class="sr-only"></span> <i class="fa fa-edit"></i></a>
                                        <form class="inlineblock" method="post"
                                              action="{{ route('brands.destroy' , ['id' => $brand->id])}}">
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
