<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.pages.home');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'address' => 'required',
            'phone' => 'required',
        ]);
        $requestData = $request->all();
        Booking::create($requestData);
        Session::flash('success', 'Cảm ơn bạn đã đăng ký , chúng tôi sẽ liên hệ bạn sớm nhất');
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
