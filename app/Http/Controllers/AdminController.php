<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    //copied from LoginController
    protected $redirectTo = RouteServiceProvider::ADMIN_DASH;

    use AuthenticatesUsers;
    /*
  * Admin Login page show method
  * */
    public function loginPage(){
        return view('admin.login');
    }
    /*
     * Admin Register page show method
     * */
    public function adminRegPage(){
        return view('admin.register');
    }

    //Admin Register Method

    public function adminRegAdmin(Request $request){
        Admin::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'cell' =>$request->cell,
            'uname' =>$request->uname,
            'password' =>Hash::make($request->pass),
        ]);
        return redirect()->route('admin.login');
    }


    public function dashboard(){
        return view('admin.dashboard');
    }
    //Added admin auth guard

    protected function guard()
    {
        return Auth::guard('admin');
    }










}
