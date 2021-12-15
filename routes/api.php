<?php

use App\Models\Pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('institutions_fees', 'InstitutionsFeesAPIController');
     Route::resource('search_exams', 'SearchExamAPIController');
/* Route::post('password/email', 'ForgotPassword2Controller@forgot'); */
Route::post('forgot-password', '\App\Http\Controllers\API\AuthController@forgot_password');
Route::group([
    'prefix' => 'auth',
], function () {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signUp');
    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::post('change-password', 'AuthController@change_password');
        Route::get('logout', 'AuthController@logout');
        Route::resource('persontypes', 'PersontypeAPIController');
    });
});
// Route::resource('aranceles', 'ArancelesAPIController');


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

route::post('pedidos', function(Request $request){
    $input = $request->all();
   Pedidos::where('id', '=', $input['id'])->update(['estado' => $input['estado']]);
    return json_encode("ok");
});

