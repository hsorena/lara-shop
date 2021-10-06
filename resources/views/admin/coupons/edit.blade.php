@extends('admin.master')

@section('content')
    <div id="app">
        <div class="row clearfix justify-content-center">
            <div class="col-md-9 ">
                <div class="card border border-light">
                    <div class="card-header">
                        <span class="card-title">ویرایش کد {{ $coupon->title }}</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('coupons.update' , ['coupon' => $coupon->id] ) }}" refer method="post" enctype="multipart/form-data">
                            {{ method_field('patch') }}
                            {{ csrf_field()  }}
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">عنوان کد تخفیف :</span>
                                </div>
                                <input name="title" type="text" class="form-control" aria-label="عنوان کد تخفیف :"
                                       aria-describedby="inputGroup-sizing-sm" value="{{ $coupon->title }}" placeholder="عنوان کد تخفیف را وارد کنید...">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">کد :</span>
                                </div>
                                <input name="code" type="text" class="form-control" aria-label=" کد :"
                                       aria-describedby="inputGroup-sizing-sm" value="{{ $coupon->code }}" placeholder="کد را وارد کنید...">
                            </div>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">میزان تخفیف :</span>
                                </div>
                                <input name="price" type="number" class="form-control" aria-label="میزان تخفیف :"
                                       aria-describedby="inputGroup-sizing-sm" value="{{ $coupon->price }}" placeholder="میزان تخفیف را وارد کنید...">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">وضعیت نشر :</span>
                                </div>
                                <div>
                                    <label class="fancy-radio custom-color-green"><input @if($coupon->status == 1) checked @endif name="status" value="1" type="radio"><span><i></i>فعال</span></label><br>
                                </div>
                                <div>
                                    <label class="fancy-radio custom-color-red"><input @if($coupon->status == 0) checked @endif name="status"  value="0" type="radio"><span><i></i>غیر فعال</span></label>
                                </div>
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
    </div>
@endsection()
