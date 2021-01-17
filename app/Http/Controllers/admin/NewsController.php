<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = News::all();
        return view('admin.news', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::all();
        return view('admin.news_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new News;
        $data->title  = $request->input('Title');
        $data->keywords  = $request->input('Keywords');
        $data->description  = $request->input('Description');
        $data->slug  = $request->input('Slug');
        $data->status = $request->input('Status');
        $data->category_id = $request->input('Category_id');
        $data->user_id = Auth::id();
        $data->detail= $request->input('Detail');
        $data->type= $request->input('Type');
        $data->save();
        return redirect()->route('admin_news');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news, $id)
    {
        //
        $data  = News::find($id);
        $datalist = Category::all();

        return view('admin.news_edit',['data' => $data,'datalist' => $datalist]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news, $id)
    {
        //
        $data  = News::find($id);
        $data->title  = $request->input('Title');
        $data->keywords  = $request->input('Keywords');
        $data->description  = $request->input('Description');
        $data->slug  = $request->input('Slug');
        $data->status = $request->input('Status');
        $data->category_id = $request->input('Category_id');
        $data->user_id = Auth::id();
        $data->detail= $request->input('Detail');
        $data->type= $request->input('Type');
        $data->save();
        return redirect()->route('admin_news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news, $id)
    {
        //DB::table('news')->where('id', '=', $id)->delete();
        $data  = News::find($id);
        $data->delete();
        return redirect()->route('admin_news');

    }
}
