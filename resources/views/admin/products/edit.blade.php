@extends('admin.master')

@section('content')
    <div id="app">
        <div class="row clearfix justify-content-center">
            <div class="col-md-9 ">
                <div class="card border border-light">
                    <div class="card-header">
                        <span class="card-title">ویرایش محصول {{ $product->title }}</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update' , $product ) }}" refer method="post" enctype="multipart/form-data">
                            {{ method_field('patch') }}
                            {{ csrf_field()  }}
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">عنوان محصول :</span>
                                </div>
                                <input name="title" type="text" class="form-control" aria-label="عنوان محصول :"
                                       aria-describedby="inputGroup-sizing-sm" value="{{ $product->title }}" placeholder="عنوان محصول را وارد کنید...">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">توضیحات محصول :</span>
                                </div>
                                <textarea name="description" placeholder="توضیحات محصول را وارد کنید..." class="form-control" aria-label="با ناحیه متن" style="margin-top: 0px; margin-bottom: 0px; height: 200px;" >
                                    {{ $product->description }}
                                </textarea>
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">نام مستعار :</span>
                                </div>
                                <input name="slug" type="text" class="form-control" aria-label="نام مستعار :"
                                       aria-describedby="inputGroup-sizing-sm" value="{{ $product->slug }}" placeholder="نام مستعار محصول را وارد کنید...">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">قیمت :</span>
                                </div>
                                <input name="price" type="number" class="form-control" aria-label="قیمت :"
                                       aria-describedby="inputGroup-sizing-sm" value="{{ $product->price }}" placeholder="قیمت محصول را وارد کنید...">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">قیمت ویژه :</span>
                                </div>
                                <input style="-webkit-appearance: none;" name="discount_price" type="number" min="0.00" max="100000000" class="form-control" aria-label="قیمت ویژه :"
                                       aria-describedby="inputGroup-sizing-sm" value="{{ $product->discount_price }}" placeholder="قیمت ویژه محصول را وارد کنید...">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">وضعیت نشر :</span>
                                </div>
                                <div>
                                    <label class="fancy-radio custom-color-green"><input @if($product->status == 1) checked @endif name="status" value="1" type="radio"><span><i></i>فعال</span></label><br>
                                </div>
                                <div>
                                    <label class="fancy-radio custom-color-red"><input @if($product->status == 0) checked @endif name="status" value="0" type="radio"><span><i></i>غیر فعال</span></label>
                                </div>
                            </div>

                            <attribute-component :brands="{{ $brands }}" :product="{{ $product }}"></attribute-component>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">افزودن تصویر :</span>
                                </div>
                                <div id="photo" class="dropzone form-control">
                                    <input name="photos_id[]" type="hidden" id="product-photos">
                                </div>
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">تصاویر محصول :</span>
                                </div>
                                @foreach($product->photos as $photo)
                                    <div class="col-md-3" id="photo_id_{{ $photo->id }}">
                                        <img class="img-thumbnail" src="{{ asset('storage/photos/' . $photo->path) }}"><br><br>
                                        <button type="button" class="btn btn-outline-danger" onclick="removeImages({{ $photo->id }})">حدف</button>
                                    </div>
                                @endforeach
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
                                <button type="submit" onclick="addPhotosIds()" class="btn btn-outline-success" title="save">
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
    </div>


@endsection()

@section('scripts')
    <script type="text/javascript" src="{{ asset('assets/dropzone/dropzone.js') }}"></script>
    <script>
        var photoGallery = []
        let photos = [].concat({{ $product->photos->pluck('id') }})
        Dropzone.autoDiscover = false;
        var drop = new Dropzone('#photo' , {
            url : "{{ route('photos.upload') }}",
            addRemoveLinks : true,
            sending : function (file , xhr , formData){
                formData.append("_token" , "{{ csrf_token() }}")
            },
            success : function (file , response){
                photoGallery.push(response.photo_id)
            }
        });

        addPhotosIds = function (){
            document.getElementById('product-photos').value = photoGallery.concat(photos)
        }

        removeImages = function (id)
        {
            let index = photos.indexOf(id)
            photos.splice(index , 1)
            document.getElementById('photo_id_'+id).remove()
        }
    </script>

@endsection
