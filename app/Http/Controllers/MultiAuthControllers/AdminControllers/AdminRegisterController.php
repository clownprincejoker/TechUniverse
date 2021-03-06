<?php

namespace App\Http\Controllers\MultiAuthControllers\AdminControllers;

use App\Models\MultiAuth\Admin;
use App\Models\Other\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ModelControllers\ImageController;
use App\Notifications\Registration\AdminRegistrationNotification;

class AdminRegisterController extends Controller
{
    public function show(){
      return redirect()->route('index');
    }

    protected function validation($request){
        return $this->validate($request, [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:admins',
            'reg_password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function register(Request $request){
        $this->validation($request);

        $image = (new ImageController)->store($request);

        $admin = Admin::create([
          'first_name' => $request->Input('first_name'),
          'last_name' => $request->Input('last_name'),
          'email' => $request->Input('email'),
          'date_of_birth' => $request->Input('date_of_birth'),
          'password' => Hash::make($request->Input('reg_password')),
          'profile_pic' => $image->id,
        ]);

        $admin->notify(new AdminRegistrationNotification($admin));
        return redirect()->route('index')->with('please_verify', 'To complete your registration please follow the link sent to your eamil');
    }
}
