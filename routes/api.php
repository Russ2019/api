<?php

use Illuminate\Http\Request;


/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/


Route::group(['prefix'=>'products'], function(){
  Route::apiResource('/{poduct}/reviews','ReviewController');
});


Route::apiResource('/products','ProductController');
