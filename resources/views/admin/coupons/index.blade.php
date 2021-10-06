@extends('admin.master')


@section('content')
    <div class="row clearfix justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">لیست کدهای تخفیف</span>
                </div>

                <div class="card-body">
                    @if(Session::has('coupon_created'))
                        <div class="alert alert-success">{{Session('coupon_created')}}</div>
                    @endif
                    @if(Session::has('coupon_updated'))
                        <div class="alert alert-info">{{Session('coupon_updated')}}</div>
                    @endif
                    @if(Session::has('coupon_deleted'))
                        <div class="alert alert-danger">{{Session('coupon_deleted')}}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table header-border table-hover table-custom spacing5">
                            <thead>
                            <tr>
                                <th>عنوان</th>
                                <th>کد</th>
                                <th>میزان تخفیف</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coupons as $coupon)
                                <tr>
                                    <th class="w60">{{ $coupon->title }}</th>
                                    <td>{{ $coupon->code }}</td>
                                    <td>{{ $coupon->price }}</td>
                                    <td>
                                        @if($coupon->status)
                                            <div>
                                                <label class="fancy-radio custom-color-green"><input checked name="status" value="1" type="radio"><span><i></i>فعال</span></label><br>
                                            </div>
                                        @else
                                            <div>
                                                <label class="fancy-radio custom-color-red"><input checked name="status" value="0" type="radio"><span><i></i>غیرفعال</span></label><br>
                                            </div>
                                        @endif

                                    </td>
                                    <td>
                                        <a href="{{ route('coupons.edit' , ['id' => $coupon->id])}}" type="button"
                                           class="btn btn-outline-warning mb-2" title="ویرایش"><span
                                                class="sr-only"></span> <i class="fa fa-edit"></i></a>
                                        <form class="inlineblock" method="post"
                                              action="{{ route('coupons.destroy' , ['id' => $coupon->id])}}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-outline-danger mb-2" title="حذف"><span
                                                    class="sr-only"></span> <i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
