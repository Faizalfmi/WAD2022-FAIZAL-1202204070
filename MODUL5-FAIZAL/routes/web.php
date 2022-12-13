<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use App\Models\Users;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    return view('Home-before');
});
Route::get('/homes', function () {
    return view('Home-Faizal');
});

Route::get('/login', function () {
    return view('/user/login');
})->name('login');

Route::get('/register', function () {
    return view('/user/register');
})->name('register');

Route::get('/addcar', function () {
    return view('/web/addcar');
})->name('addcar');

Route::get('/mycar', function () {
    $data = DB::table('/web/listCar')->get();
    return view('mycar', ['data' => $data]);
})->name('mycar');

Route::get('/detail/{id}', function ($id) {
    $data = DB::table('showrooms')->where('id', $id)->first();
    $tanggal = Carbon::parse($data->purchase_date)->format('m/d/Y');
    return view('detail', ['data' => $data, 'tanggal' => $tanggal]);
})->name('detail');

Route::get('/profile', function () {
    $data = Users::find(Auth::user()->id);
    return view('profile', ['data' => $data]);
})->name('profile');

Route::post('/register', [UserController::class, 'store'])->name('register.do');
Route::post('/login', [UserController::class, 'login'])->name('login.do');
Route::get('/logout', [UserController::class, 'logout'])->name('logout.do');
Route::post('/addcar', [WebController::class, 'store'])->name('addcar.do');
Route::put('/detail/{id}', [WebController::class, 'update'])->name('edit.do');
Route::get('/delete/{id}', [WebController::class, 'destroy'])->name('delete');
Route::put('/profile', [UserController::class, 'update'])->name('profile.do');