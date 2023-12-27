<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            return view('user.home');
        }
    }


    public function index()
    {
        if(Auth::id())
        {
            return redirect('/redirect');
        }

        else
        {
            $data = Product::all();
            return view('user.home', compact('data'));
        }

    }

    public function products()
    {
        return view('user.products');
    }

    public function single()
    {
        return view('user.single');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function cart()
    {
        return view('user.cart');
    }

    public function shoulder()
    {
        return view('user.shoulder');
    }

    public function tote()
    {
        return view('user.tote');
    }

    public function sling()
    {
        return view('user.sling');
    }
}
