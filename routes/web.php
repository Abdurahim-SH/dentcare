<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestiominalController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\MakeAppointmentController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home
Route::get('/',[MainController:: class , 'index'])->name('index');
Route::get('/about',[MainController:: class , 'about'])->name('about');
Route::get('/service',[MainController:: class , 'service'])->name('service');
Route::get('/price',[MainController:: class , 'price'])->name('price');
Route::get('/team',[MainController:: class , 'team'])->name('team');
Route::get('/testiominal',[MainController:: class , 'testiominal'])->name('testiominal');
Route::get('/appointment',[MainController:: class , 'appointment'])->name('appointment');
Route::get('/contact',[MainController:: class , 'contact'])->name('contact');

// POST and CATEGORY //
Route::get('/post/{slug}',[MainController:: class , 'postDetail'])->name('post.detail');
Route::get('/category/{slug}',[MainController::class,'categoryPosts'])->name('categoryPosts');
// ckeditor
Route::post('ckeditor/upload', [MainController::class,'upload'])->name('ckeditor.upload');





// MAIL

Route::post('/send',[MailController::class, 'mail'])->name('mail.post');
Route::get('/search',[MailController:: class , 'searchPage'])->name('search.page');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Auth::routes();

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/lang/{lang}',function($lang){ 

    session(['lang'=>$lang]);

    return back();

});

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function(){

    Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class,
        'tag' => TagController::class,
        'about' => AboutController::class,
        'service' => ServiceController::class,
        'testiominal' => TestiominalController::class,
        'appointment' => AppointmentController::class,
        'team' => TeamController::class,
        'price' => PriceController::class,
        'contact' => ContactController::class,
        'make_appointment' => MakeAppointmentController::class,
    ]);

});



