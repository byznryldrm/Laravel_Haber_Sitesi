<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;
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
        $last= News::select('id','title','image','description','slug')->limit(4)->orderByDesc('id')->get();
        $hot = News::select('id','title','image','description','slug')->limit(4)->inRandomOrder()->get();
        $another = News::select('id','title','image','description','slug')->limit(4)->inRandomOrder()->get();
        $data=[
            'setting' => $setting,
            'slider' => $slider,
            'last' => $last,
            'hot' => $hot,
            'another' => $another,
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
    public function sendmessage(Request $request)
    {
        $data=new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('contanct')->with('success','Mesajınız Kayıt Edilmiştir.');
    }
    public function category()
    {
        $setting = Setting::first();
        $slider = News::select('id','title','image','description','slug')->get();
        $data=[
            'setting' => $setting,
            'slider' => $slider,
        ];
        return view('home._category',$data);
    }
    public function categorynews($id, $slug)
    {
        $datalist = News::where('category_id',$id)->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.category_news', ['data' => $data,'datalist' => $datalist]);
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

    public function haber()
    {
        return view('home._category');
    }
    public function köşeyazısı()
    {
        return view('home.about');
    }
    public function makale()
    {
        return view('home.about');
    }

    public function contanct()
    {
        $setting = Setting::first();
        return view('home.contanct', ['setting' => $setting]);
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
