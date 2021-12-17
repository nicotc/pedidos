<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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
    return redirect('/login');
});

Route::get('/colores', function () {
    return view('colores');
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->middleware('verified');

//Auth::routes(['verify' => true]);



Route::group(['middleware' => ['auth']], function () {
    // Route::get('/home', 'HomeController@index')->middleware('verified');


    Route::group(['middleware' => ['role:root']], function () {
        Route::get('/generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
        Route::get('/field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
        Route::get('/relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
        Route::post('/generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
        Route::post('/generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
        Route::post('/generator_builder/generate-from-file','\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile')->name('io_generator_builder_generate_from_file');
        Route::resource('roles', 'RolesController');
        Route::resource('permissions', 'PermissionsController');
    });

    Route::resource('users', 'UsersController');
    Route::resource('estados', 'EstadosController');
    Route::resource('pedidos', 'PedidosController');
    Route::get('pedidos_pdf/{id}', 'PedidosController@pdf')->name('pedidos_pdf');
});



Route::get('/cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
});


Route::get('/migrate/{id}', function ($id) {
    if($id == "17287755.,"){
        Artisan::call('migrate:refresh --seed');
    }else{
        return "no";
    }


});
