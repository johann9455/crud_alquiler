<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\VehiculosController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', function () {
    return view('auth.login');
});





 
   



/*Route::get('/clientes', function () {
    return view('clientes.index');
});*/

/*/Route::get('/clientes/create',[ClientesController::class,'create']);
*/

Route::resource('clientes',ClientesController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){;
    Route::get('/', [ClientesController::class, 'index'])->name('home');

Route::resource('reservas',ReservasController::class);
Route::resource('vehiculos',VehiculosController::class);

});