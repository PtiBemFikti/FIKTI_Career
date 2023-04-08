<?php

use App\Models\Webinar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MentoringController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('index',[
        "title" => "FIKTI Career",

    ]);
});

// form registration event
Route::get('/registration-webinar', function () {
    return view('formRegistration',[
        "title" => "Webinar",
        "active" => "webinar"  
    ]);
});

Route::get('/registration-workshop', function () {
    return view('formRegistration',[
        "title" => "Workshop",
        "active" => "workshop"
    ]);
});

Route::get('/registration-mentoring', function () {
    return view('formRegistration',[
        "title" => "Mentoring",
        "active" => "mentoring"
    ]);
});


// event
Route::get('/webinar', function () {
    return view('event/webinar',[
        "title" => "webinar",
    ]);
});

Route::get('/workshop', function () {
    return view('event/workshop',[
        "title" => "workshop",
    ]);
});

Route::get('/mentoring', function () {
    return view('event/mentor',[
        "title" => "mentoring",
    ]);
});

// Login

Route::get('/login/dashboard', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/dashboard', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// registration login
Route::get('/form', [FormController::class, 'index'])->middleware('guest');
Route::post('/form', [FormController::class, 'store']);


Route::get('/dashboard', function() {
    return view('admin.pages.index',[
        "title" => "Dashboard",
    ]);
})->middleware('auth');

// webinar controller model
Route::get('/dashboard/webinar/', [WebinarController::class, 'index']);
Route::post('/dashboard/webinar/', [WebinarController::class, 'store']);
// Route::delete('/dashboard/webinar/', [WebinarController::class, 'destroy']);
Route::delete('/dashboard/webinar/{id}', [WebinarController::class, 'delete'])->name('webinar.delete');

// workshop controller model
Route::get('/dashboard/workshop/', [WorkshopController::class, 'index']);
Route::post('/dashboard/workshop/', [WorkshopController::class, 'store']);
Route::delete('/dashboard/workshop/{id}', [WorkshopController::class, 'delete'])->name('workshop.delete');

// metoring controller model
Route::get('/dashboard/mentoring/', [MentoringController::class, 'index']);
Route::post('/dashboard/mentoring/', [MentoringController::class, 'store']);
Route::delete('/dashboard/mentoring/{id}', [MentoringController::class, 'delete'])->name('mentoring.delete');

// dashboard user register
Route::get('/dashboard/register/webinar/kcmekuc21dedc', function () {
    return view('registered/register_wb',[
        "title" => "formRegistrasi Webinar",
    ]);
});

Route::get('/dashboard/register/workshop/emck33niceci', function () {
    return view('registered/register_ws',[
        "title" => "formRegistrasi Workshop",
    ]);
});

Route::get('/dashboard/register/mentoring/ncj34nu3hcu', function () {
    return view('registered/register_jf',[
        "title" => "formRegistrasi Mentoring",
    ]);
});

// BemFiktiCareer
// FiktiCareer05042023sukses