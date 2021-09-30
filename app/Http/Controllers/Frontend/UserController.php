<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Address;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function signupForm()
    {
        return view('frontend.user.signup');
    }

    public function signup(Request $request)
    {
        $user = new User();
        $user->name = $request->firstname;
        $user->last_name = $request->lastname;
        $user->national_code = $request->national_code;
        $user->mobile = $request->mobile;
        $user->telephone = $request->telephone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $address = new Address();
        $address->address = $request->address;
        $address->company = $request->company;
        $address->province_id = $request->province_id;
        $address->city_id = $request->city_id;
        $address->postal_code = $request->postal_code;
        $address->user_id = 1;
        $address->save();
        Session::flash('register_success' , 'ثبت نام شما با موفقیت انجام شد');
        return redirect(route('login'));
    }

    public function profile()
    {
        if (Auth::guest())
        {
            return redirect()->route('login');
        }
        return view('frontend.user.profile');
    }
}
