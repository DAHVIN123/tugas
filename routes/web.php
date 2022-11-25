<?php
use App\Http\Controllers\BarangsController;
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
    return view('welcome');

});



Route::get('/data', [BarangsController::class, 'index'])->name('data')->middleware('auth');
Route::get('/tambah', [BarangsController::class, 'create'])->name('tambah');
route::post('/', [BarangsController::class, 'store']);
Route::get('/search', [BarangsController::class, 'search'])->name('search');
Route::get('/edit/{id}', [BarangsController::class, 'edit'])->name('edit');
route::post('/update/{id}', [BarangsController::class, 'update']);

route::get('/destroy/{id}', [BarangsController::class, 'destroy'])->name('destroy');
Route::get('/login', [BarangsController::class, 'login'])->name('login');
Route::post('/postlogin', [BarangsController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [BarangsController::class, 'logout'])->name('logout');
Route::get('/register', [BarangsController::class, 'register'])->name('register');
Route::get('/layout', [BarangsController::class, 'layout'])->name('layout');
Route::post('/registeruser', [BarangsController::class, 'registeruser']);
