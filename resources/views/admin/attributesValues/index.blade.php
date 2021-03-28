@extends('admin.master')


@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">مقادیر ویژگی ها </span>
                </div>

                <div class="card-body">

                    @if(Session::has('attrVal_updated'))
                        <div class="alert alert-success">{{Session('attrVal_updated')}}</div>
                    @endif

                    @if(Session::has('attrVal_deleted'))
                        <div class="alert alert-danger">{{Session('attrVal_deleted')}}</div>
                    @endif

                    @if(Session::has('attrVal_created'))
                        <div class="alert alert-success">{{Session('attrVal_created')}}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table header-border table-hover table-custom spacing5">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان</th>
                                <th>ویژگی</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attributeValues as $attributeValue)
                                <tr>
                                    <th class="w60">{{ $attributeValue->id }}</th>
                                    <td>{{ $attributeValue->title }}</td>
                                    <td>{{ $attributeValue->attributesGroup->title }}</td>
                                    <td>
                                        <a href="{{ route('attributes-values.edit' , ['id' => $attributeValue->id]) }}"
                                           type="button"
                                           class="btn btn-outline-warning mb-2" title="ویرایش"><span
                                                class="sr-only"></span> <i class="fa fa-edit"></i></a>
                                        <form class="inlineblock" method="post"
                                              action="{{ route('attributes-values.destroy' , ['id' => $attributeValue->id])}}">
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
