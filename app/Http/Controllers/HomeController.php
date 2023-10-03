<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == "1") {
            return view('admin.admindashboard');
        } else {
            return view('home');
        }
    }

    public  function  userindex()
    {
        $users = User::where('usertype',"0")->get();
        $data = compact('users');
        return view('admin.users.user')->with($data);
    }
    
    public function userdelete($id)
    {
    $del = User::find($id);
   $del->delete();
   return redirect()->back();
    }
}
