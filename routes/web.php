<?php

use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\NewsController;
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
Route::get('/megamenu', [HomeController::class, 'megamenu'])->name('megamenu');
Route::get('/haber', [HomeController::class, 'haber'])->name('haber');
Route::get('/köşeyazısı', [HomeController::class, 'köşeyazısı'])->name('köşeyazısı');
Route::get('/makale', [HomeController::class, 'makale'])->name('makale');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contanct', [HomeController::class, 'contanct'])->name('contanct');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/fag', [HomeController::class, 'fag'])->name('fag');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/news/{id}/{slug}', [HomeController::class, 'news'])->name('news');
Route::get('/categorynews/{id}/{slug}', [HomeController::class, 'categorynews'])->name('categorynews');



// **** ADMİN ****
Route::middleware('auth')->prefix('admin')->group(function(){
    #Admin role
    Route::middleware('admin')->group(function (){

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
    //***Message***
    Route::prefix('messages')->group(function () {
        Route::get('/', [MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}',[MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}',[MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show',[MessageController::class, 'show'])->name('admin_message_show');

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

    //***Report***
    Route::prefix('report')->group(function () {
        Route::get('/', [\App\Http\Controllers\admin\ReportController::class, 'index'])->name('admin_report');
        Route::get('create', [\App\Http\Controllers\admin\ReportController::class, 'create'])->name('admin_report_add');
        Route::post('store', [\App\Http\Controllers\admin\ReportController::class, 'store'])->name('admin_report_store');
        Route::get('edit/{id}',[\App\Http\Controllers\admin\ReportController::class, 'edit'])->name('admin_report_edit');
        Route::post('update/{id}',[\App\Http\Controllers\admin\ReportController::class, 'update'])->name('admin_report_update');
        Route::get('delete/{id}',[\App\Http\Controllers\admin\ReportController::class, 'destroy'])->name('admin_report_delete');
        Route::get('show/{id}',[\App\Http\Controllers\admin\ReportController::class, 'show'])->name('admin_report_show');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin_users');
        Route::get('create', [UserController::class, 'create'])->name('admin_user_add');
        Route::post('store', [UserController::class, 'store'])->name('admin_user_store');
        Route::get('edit/{id}',[UserController::class, 'edit'])->name('admin_user_edit');
        Route::post('update/{id}',[UserController::class, 'update'])->name('admin_user_update');
        Route::get('delete/{id}',[UserController::class, 'destroy'])->name('admin_user_delete');
        Route::get('show/{id}',[UserController::class, 'show'])->name('admin_user_show');
        Route::get('userrole/{id}',[UserController::class, 'user_roles'])->name('admin_user_roles');
        Route::post('userrolestore/{id}',[UserController::class, 'user_role_store'])->name('admin_user_role_add');
        Route::get('userroledelete/{userid}/{roleid}',[UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
    });

    });
});
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('myprofile');
});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile',[UserController::class,'index'])->name('profile.show');
    //***News***
    Route::prefix('news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('user_news');
        Route::get('create', [NewsController::class, 'create'])->name('user_news_add');
        Route::post('store', [NewsController::class, 'store'])->name('user_news_store');
        Route::get('edit/{id}',[NewsController::class, 'edit'])->name('user_news_edit');
        Route::post('update/{id}',[NewsController::class, 'update'])->name('user_news_update');
        Route::get('delete/{id}',[NewsController::class, 'destroy'])->name('user_news_delete');
        Route::get('show',[NewsController::class, 'show'])->name('user_news_show');
    });

    //***News Image Gallery***
    Route::prefix('image')->group(function () {
        Route::get('create/{news_id}', [App\Http\Controllers\admin\ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{news_id}', [App\Http\Controllers\admin\ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}/{news_id}',[App\Http\Controllers\admin\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show',[App\Http\Controllers\admin\ImageController::class, 'show'])->name('admin_image_show');
    });
    //***Report***
    Route::prefix('report')->group(function () {
        Route::get('/', [\App\Http\Controllers\ReportController::class, 'index'])->name('user_report');
        Route::get('create', [\App\Http\Controllers\ReportController::class, 'create'])->name('user_report_add');
        Route::post('store', [\App\Http\Controllers\ReportController::class, 'store'])->name('user_report_store');
        Route::get('edit/{id}',[\App\Http\Controllers\ReportController::class, 'edit'])->name('user_report_edit');
        Route::post('update/{id}',[\App\Http\Controllers\ReportController::class, 'update'])->name('user_report_update');
        Route::get('delete/{id}',[\App\Http\Controllers\ReportController::class, 'destroy'])->name('user_report_delete');
        Route::get('show/{id}',[\App\Http\Controllers\ReportController::class, 'show'])->name('user_report_show');
    });
});


Route::get('/admin/login', [Homecontroller::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [Homecontroller::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class,'logout'])->name('admin_logout');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (){
    return Inertia::render('Dashboard');
})->name('dashboard');
