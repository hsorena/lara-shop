@extends('admin.master')


@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">لیست دسته ها</span>
                </div>

                <div class="card-body">
                    @if(Session::has('error_category'))
                        <div class="alert alert-danger">{{Session('error_category')}}</div>
                    @endif

                    @if(Session::has('attr_updated'))
                        <div class="alert alert-success">{{Session('attr_updated')}}</div>
                    @endif

                    @if(Session::has('attr_deleted'))
                        <div class="alert alert-danger">{{Session('attr_deleted')}}</div>
                    @endif
                    @if(Session::has('attr_created'))
                        <div class="alert alert-success">{{Session('attr_created')}}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table header-border table-hover table-custom spacing5">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان ویژگی</th>
                                <th>نوع ویژگی</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attributes as $attribute)
                                <tr>
                                    <th class="w60">{{ $attribute->id }}</th>
                                    <td>{{ $attribute->title }}</td>
                                    <td>{{ $attribute->type }}</td>
                                    <td>
                                        <a href="{{ route('attributes.edit' , ['attribute' => $attribute])}}"
                                           type="button"
                                           class="btn btn-outline-warning mb-2" title="ویرایش"><span
                                                class="sr-only"></span> <i class="fa fa-edit"></i></a>
                                        <form class="inlineblock" method="post"
                                              action="{{ route('attributes.destroy' , ['attribute' => $attribute])}}">
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
