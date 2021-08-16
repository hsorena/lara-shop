@extends('admin.master')

@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-9 ">
            <div class="card border border-light">
                <div class="card-header">
                    <span class="card-title" >تعیین ویژگی های دسته بندی {{ $category->name }}</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.saveSetting' , $category->id) }}" refer method="post">
                        @csrf
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">ویژگی ها :</span>
                            </div>
                                <select class="selectpicker" name="attributesGroup[]" multiple>
                                    <option></option>
                                    @foreach($attributes as $attribute)
                                        <option value="{{ $attribute->id }}" @if(in_array($attribute->id , $category->attributes->pluck('id')->toArray())) selected @endif>{{ $attribute->title }} </option>
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
