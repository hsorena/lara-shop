@extends('admin.master')
@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-9 ">
            <div class="card border border-light">
                <div class="card-header">
                    <span class="card-title">ویرایش دسته ی {{ $category->name }}</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.update' , $category) }}" refer method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">نام دسته :</span>
                            </div>
                            <input name="name" value="{{ $category->name }}" type="text" class="form-control"
                                   aria-label="نام دسته :" aria-describedby="inputGroup-sizing-sm"
                                   placeholder="نام دسته را وارد کنید...">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">دسته والد :</span>
                            </div>
                            <select class="form-control" name="parent_id">
                                <option value="" @if($category->id == null) selected @endif>بدون والد</option>
                                @foreach($categories as $category_data)
                                    <option value="{{ $category_data->id }}" @if($category->parent_id == $category_data->id) selected @endif>{{ $category_data->name }}</option>
                                    @if (count($category_data->sub_category))
                                        @include('admin.partials.category' , ['categories' => $category_data->sub_category , 'level' => 1, 'selected_category'=>$category])
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">متای توضیحات :</span>
                            </div>
                            <textarea name="meta_desc" type="text" class="form-control" aria-label="متای توضیحات :"
                                      aria-describedby="inputGroup-sizing-sm">{{ $category->meta_desc }}</textarea>
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">متای عنوان :</span>
                            </div>
                            <input name="meta_title" value="{{ $category->meta_title }}" type="text"
                                   class="form-control" aria-label="متای عنوان :"
                                   aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">متای کلیدواژه ها :</span>
                            </div>
                            <input name="meta_keywords" value="{{ $category->meta_keywords }}" type="text"
                                   class="form-control" aria-label="متای کلیدواژه ها :"
                                   aria-describedby="inputGroup-sizing-sm">
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

