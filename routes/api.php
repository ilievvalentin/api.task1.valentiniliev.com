<?php

use App\Hyperlink;
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

Route::get('hyperlinks', 'HyperlinkController@index');
Route::get('hyperlinks/{hyperlink}', 'HyperlinkController@show');
Route::patch('hyperlinks/{hyperlink}', 'HyperlinkController@update');
