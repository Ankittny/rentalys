<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Validator;
class AdminController extends Controller{

    public function index(){
        return view("admin.login");
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
    // login Auth
    public function adminlogin(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin/dashboard');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }



    public function logoutadmin(){
        Auth::logout();
        return redirect('/admin/login');
    }
}
