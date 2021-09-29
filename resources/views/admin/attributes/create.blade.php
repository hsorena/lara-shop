@extends('admin.master')

@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-9 ">
            <div class="card border border-light">
                <div class="card-header">
                    <span class="card-title" >ایجاد ویژگی جدید</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('attributes.store') }}" refer method="post">
                        @csrf
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">عنوان ویژگی :</span>
                            </div>
                            <input name="title" type="text" class="form-control" aria-label="عنوان ویژگی :" aria-describedby="inputGroup-sizing-sm" placeholder="عنوان ویژگی را وارد کنید...">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">نوع ویژگی :</span>
                            </div>
                            <select name="type" class="custom-select">
                                <option value="select">لیست تکی</option>
                                <option value="multiple">لیست چندتایی</option>
                            </select>
                        </div>

                        <div class="btn-group-toggle float-right">
                            <button type="submit" class="btn btn-outline-success" title="save">
                                <span class="sr-only"></span>
                                <i class="fa fa-save"></i>
                                دخیره
                            </button>
                            <button type="reset" onclick="window.location='{{ route('attributes.index') }}'" class="btn btn-outline-danger">
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
