<?php
/**
 * Created by PhpStorm.
 * User: yuse
 * Date: 2018/12/9
 * Time: 17:11
 */
use Illuminate\Support\Facades\Route;
Route::group([
    'prefix' => 'user'
],function (){
    Route::post('register','UserController@register');
    Route::post('loginweb','UserController@login')->middleware('auditor');
    Route::post('loginapp','UserController@login')->middleware('scanner');

});