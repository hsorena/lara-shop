@extends('admin.master')
@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-9 ">
            <div class="card border border-light">
                <div class="card-header">
                    <span class="card-title">ویرایش ویژگی {{ $attribute->name }}</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('attributes.update' , $attribute) }}" refer method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">عنوان ویژگی :</span>
                            </div>
                            <input name="title" value="{{ $attribute->title }}" type="text" class="form-control"
                                   aria-label="عنوان ویژگی :" aria-describedby="inputGroup-sizing-sm"
                                   placeholder="عنوان ویژگی را وارد کنید...">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">مقدار ویژگی :</span>
                            </div>
                            <select class="selectpicker">
                                @foreach($attributes as $attr)
                                    @foreach($attr->attributeValues as $attrVal)
                                        <option @if($attr->id == $attrVal->id) selected @endif>{{ $attrVal->title }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>


                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">نوع ویژگی :</span>
                            </div>
                            <select name="type" class="selectpicker">
                                <option value="select" @if($attribute->type == 'select') selected @endif >لیست تکی
                                </option>
                                <option value="multiple" @if($attribute->type == 'multiple') selected @endif>لیست
                                    چندتایی
                                </option>
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

