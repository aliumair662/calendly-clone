<?php

use App\Events\TestEvent;
use Illuminate\Http\Request;
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

Route::get('broadcast', function () {
    return view('sockets.broadcast');
});

Route::get('target', function () {
    return view('sockets.target');
});

Route::post('broadcast', function (Request $request) {
    event(new TestEvent($request->message));
    return response()->json(['message' => 'success']);
});
