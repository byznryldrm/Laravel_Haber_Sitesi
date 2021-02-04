<?php

use App\Http\Controllers\admin\UserController;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin.news_add','CKEditorController');
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


// **** ANASAYFA ****

Route::get('/', function () {
    return view('layouts.main');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/megamenu', [HomeController::class, 'megamenu'])->name('megamenu');
Route::get('/gundem', [HomeController::class, 'gundem'])->name('gundem');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
//Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/fag', [HomeController::class, 'fag'])->name('fag');
Route::get('/news/{id}/{slug}', [HomeController::class, 'news'])->name('news');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');

// **** ADMİN ****
Route::middleware('auth')->prefix('admin')->group(function(){

    Route::get('/', [App\Http\Controllers\admin\homecontroller::class, 'index'])->name('admin_home');

    Route::get('/category', [App\Http\Controllers\admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('/category/add', [App\Http\Controllers\admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('/category/create', [App\Http\Controllers\admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('/category/edit/{id}', [App\Http\Controllers\admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('/category/update/{id}', [App\Http\Controllers\admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('/category/delete/{id}', [App\Http\Controllers\admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('/category/show', [App\Http\Controllers\admin\CategoryController::class, 'show'])->name('admin_category_show');

    //***News***
    Route::prefix('news')->group(function () {
        Route::get('/', [App\Http\Controllers\admin\NewsController::class, 'index'])->name('admin_news');
        Route::get('create', [App\Http\Controllers\admin\NewsController::class, 'create'])->name('admin_news_add');
        Route::post('store', [App\Http\Controllers\admin\NewsController::class, 'store'])->name('admin_news_store');
        Route::get('edit/{id}',[App\Http\Controllers\admin\NewsController::class, 'edit'])->name('admin_news_edit');
        Route::post('update/{id}',[App\Http\Controllers\admin\NewsController::class, 'update'])->name('admin_news_update');
        Route::get('delete/{id}',[App\Http\Controllers\admin\NewsController::class, 'destroy'])->name('admin_news_delete');
        Route::get('show',[App\Http\Controllers\admin\NewsController::class, 'show'])->name('admin_news_show');

    });

    //***News Image Gallery***
    Route::prefix('image')->group(function () {
        Route::get('create/{news_id}', [App\Http\Controllers\admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{news_id}', [App\Http\Controllers\admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{news_id}',[App\Http\Controllers\admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show',[App\Http\Controllers\admin\ImageController::class, 'show'])->name('admin_image_show');
    });
    //***Setting***
    Route::get('setting', [App\Http\Controllers\admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [App\Http\Controllers\admin\SettingController::class, 'update'])->name('admin_setting_update');

});
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('myprofile');
});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile',[UserController::class,'index'])->name('profile.show');
});

Route::get('/admin/login', [Homecontroller::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [Homecontroller::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class,'logout'])->name('admin_logout');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (){
    return Inertia::render('Dashboard');
})->name('dashboard');
