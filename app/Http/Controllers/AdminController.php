<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
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





}
