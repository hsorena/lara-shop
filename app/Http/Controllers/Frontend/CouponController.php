<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    public function addCoupon(Request $request)
    {
        if (Auth::check())
        {
            if (!Coupon::where('code' , $request->code)->exists())
            {
                Session::flash('coupon-no-exists' , 'کد تخفیف وارد شده وجود ندارد');
                return back();
            }
            $check = Auth::user()->whereHas('coupons' , function ($q) use($request){
                $q->where('code' , $request->code);
            })->exists();
            if (!$check)
            {
                $coupon = Coupon::where('code' , $request->code)->first();
                $cart = Session::has('cart') ? Session::get('cart') : null;
                $cart = new Cart($cart);
                $cart->addCoupon($coupon);
                $request->session()->put('cart' , $cart);
                $user = Auth::user();
                $user->coupons()->attach($coupon->id);
//                $user->coupons()->sync($coupon->id);
                $user->save();
                return back();
            }else
            {
                Session::flash('coupon-used' , 'شما قبلا از این کد تخفیف استفاده کرده اید!');
                return back();
            }
        }
        else
        {
            Session::flash('coupon-guest' , 'برای استفاده از کد تخفیف باید عضو سایت باشید!');
            return redirect()->route('login');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
