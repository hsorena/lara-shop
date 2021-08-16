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
                    <div class="table-responsive">
                        <table class="table header-border table-hover table-custom spacing5">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>نام دسته</th>
                                <th>متا عنوان</th>
                                <th>متا کلید</th>
                                <th>متا توضیح</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th class="w60">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->meta_title }}</td>
                                    <td>{{ $category->meta_keywords }}</td>
                                    <td>{{ $category->meta_desc }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit' , ['id' => $category->id])}}" type="button"
                                           class="btn btn-outline-warning mb-2" title="ویرایش"><span
                                                class="sr-only"></span> <i class="fa fa-edit"></i></a>
                                        <form class="inlineblock" method="post"
                                              action="{{ route('categories.destroy' , ['id' => $category->id])}}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-outline-danger mb-2" title="حذف"><span
                                                    class="sr-only"></span> <i class="fa fa-trash"></i></button>
                                        </form>
                                        <a href="{{ route('categories.indexSetting' , ['id' => $category->id])}}" type="button"
                                           class="btn btn-outline-primary mb-2" title="ویرایش"><span
                                                class="sr-only"></span> <i class="fa fa-cog"></i></a>
                                    </td>
                                    @if(count($category->sub_category) > 0)
                                        @include('admin.partials.category_list' , ['categories' => $category->sub_category , 'level' => 1])
                                    @endif
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
