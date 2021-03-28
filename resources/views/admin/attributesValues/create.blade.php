@extends('admin.master')

@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-9 ">
            <div class="card border border-light">
                <div class="card-header">
                    <span class="card-title" >ایجاد مقدار ویژگی جدید</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('attributes-values.store') }}" refer method="post">
                        @csrf
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">عنوان :</span>
                            </div>
                            <input name="title" type="text" class="form-control" aria-label="عنوان :" aria-describedby="inputGroup-sizing-sm" placeholder="مقدار ویژگی را وارد کنید...">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">انتخاب ویژگی :</span>
                            </div>
                            <select name="attribute_id" class="selectpicker">
                                <option value="">انتخاب کنید...</option>
                                @foreach($attributes as $attribute)
                                    <option value="{{ $attribute->id }}">{{ $attribute->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="btn-group-toggle float-right">
                            <button type="submit" class="btn btn-outline-success" title="save">
                                <span class="sr-only"></span>
                                <i class="fa fa-save"></i>
                                دخیره
                            </button>
                            <button type="reset" class="btn btn-outline-danger">
                                <span class="sr-only"></span>
                                <i class="fa fa-trash-o"></i>
                                انصراف
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection()
