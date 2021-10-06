@extends('admin.master')

@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-9 ">
            <div class="card border border-light">
                <div class="card-header">
                    <span class="card-title">ایجاد کد تخفیف جدید</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('coupons.store') }}" refer method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">عنوان کد تخفیف :</span>
                            </div>
                            <input name="title" type="text" class="form-control" aria-label="عنوان کد تخفیف :"
                                   aria-describedby="inputGroup-sizing-sm" placeholder="عنوان کد را وارد کنید...">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">کد :</span>
                            </div>
                            <input name="code" type="text" class="form-control" aria-label="کد :"
                                   aria-describedby="inputGroup-sizing-sm" placeholder="کد را وارد کنید...">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">میزان تخفیف :</span>
                            </div>
                            <input name="price" type="number" class="form-control" aria-label="میزان تخفیف :"
                                   aria-describedby="inputGroup-sizing-sm" placeholder="میزان تخفیف را وارد کنید...">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">وضعیت نشر :</span>
                            </div>
                            <div>
                                <label class="fancy-radio custom-color-green"><input name="status" value="1" type="radio"><span><i></i>فعال</span></label><br>
                            </div>
                            <div>
                                <label class="fancy-radio custom-color-red"><input name="status"  value="0" type="radio"><span><i></i>غیر فعال</span></label>
                            </div>
                        </div>


                        <div class="btn-group-toggle float-right">
                            <button type="submit" class="btn btn-outline-success" title="save">
                                <span class="sr-only"></span>
                                <i class="fa fa-save"></i>
                                دخیره
                            </button>
                            <button type="reset" onclick="window.location='{{ route('coupons.index') }}'" class="btn btn-outline-danger">
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
