@extends('admin.master')

@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-9 ">
            <div class="card border border-light">
                <div class="card-header">
                    <span class="card-title" >ایجاد دسته ی جدید</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" refer method="post">
                        @csrf
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">نام دسته :</span>
                            </div>
                            <input name="name" type="text" class="form-control" aria-label="نام دسته :" aria-describedby="inputGroup-sizing-sm" placeholder="نام دسته را وارد کنید...">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">دسته والد :</span>
                            </div>
                                <select class="selectpicker" name="parent_id" placeholder="دسته والد را انتخاب کنید...">
                                    <option selected></option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }} </option>

                                        @if (count($category->childrenRecursive) > 0)
                                            @include('admin.partials.category' , ['categories' => $category->childrenRecursive , 'level' => 1])
                                        @endif
                                    @endforeach
                                </select>
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">متای توضیحات :</span>
                            </div>
                            <input name="meta_desc" type="text" class="form-control" aria-label="متای توضیحات :" aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">متای عنوان :</span>
                            </div>
                            <input name="meta_title" type="text" class="form-control" aria-label="متای عنوان :" aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">متای کلیدواژه ها :</span>
                            </div>
                            <input name="meta_keywords" type="text" class="form-control" aria-label="متای کلیدواژه ها :" aria-describedby="inputGroup-sizing-sm">
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
