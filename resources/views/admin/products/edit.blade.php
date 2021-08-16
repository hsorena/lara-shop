@extends('admin.master')
@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-9 ">
            <div class="card border border-light">
                <div class="card-header">
                    <span class="card-title">ویرایش دسته ی {{ $brand->name }}</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('brands.update' , $brand) }}" refer method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">عنوان برند :</span>
                            </div>
                            <input name="title" value="{{ $brand->title }}" type="text" class="form-control"
                                   aria-label="عنوان :" aria-describedby="inputGroup-sizing-sm"
                                   placeholder="عنوان برند را وارد کنید...">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">توضیحات :</span>
                            </div>
                            <textarea name="description" type="text" class="form-control" aria-label="توضیحات :"
                                      aria-describedby="inputGroup-sizing-sm">{{ $brand->description }}</textarea>
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">تصویر برند :</span>
                            </div>
                            <img src="{{ asset('storage/photos/' . $brand->photo->path) }}" alt="" width="75px">
                        </div>


                        <div class="form-group">
                            <input type="hidden" name="photo_id" id="photo-brand">
                            <div id="photo" class="dropzone"></div>
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

@section('scripts')
    <script>
        var drop = new Dropzone('#photo' , {
            url : "{{ route('photos.upload') }}",
            addRemoveLinks : true,
            maxFiles : 1,
            sending : function (file , xhr , formData){
                formData.append("_token" , "{{ csrf_token() }}")
            },
            success : function (file , response){
                document.getElementById('photo-brand').value = response.photo_id
            }
        });
    </script>
@endsection

