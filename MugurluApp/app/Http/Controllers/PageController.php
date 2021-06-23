<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contact(){
        return view('products.contact');
    }

    public function profile($id){
        $user = User::find($id);
        return view('products.profile')->with('user', $user);
        // dd($user);
    }

    public function updateProfile(Request $request){
        $user = User::find($request->input('id'));
        $user->address = $request->input('address');
        $user->tel = $request->input('tel');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->back();
        // dd($user);
    }
}
