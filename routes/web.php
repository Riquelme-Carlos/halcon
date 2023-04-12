<?php
/*Permite manipular las rutas*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Auth::routes();

Route::get('/home', [ProductoController::class, 'index'])->name('home');

// Route::get('/producto', function () {
//     return view('producto.index');
// });

// Route::get('/producto/create',[ProductoController::class,'create']);

Route::resource('producto', ProductoController::class);
Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [ProductoController::class, 'index'])->name('home');
});
