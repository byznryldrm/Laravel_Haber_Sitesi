<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

class Homecontroller extends Controller
{
    //
    public static function getsetting()
    {
        return Setting::first();
    }

    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = News::select('id','title','image','description','slug')->limit(4)->get();
        $data=[
            'setting' => $setting,
            'slider' => $slider,
            'page' => 'home'
        ];
        return view('home.index',$data);
    }
    public function news($id,$slug)
    {

        $data= News::find($id);
        print_r($data);
        exit();
    }

    public function aboutus()
    {

        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function megamenu()
    {
        return view('home.about');
    }

    public function gundem()
    {
        return view('home.about');
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }


    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
    }

    public function profil()
    {
        return view('home.about');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {

            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


}
