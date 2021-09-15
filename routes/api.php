<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'UserController@CheckService');
Route::post('/signup', 'UserController@SignUp');
Route::post('/login', 'UserController@Login');
Route::post('/checktoken', 'UserController@CheckToken')->middleware('auth:api');
Route::get('/getcategories', 'UserController@GetCategories');
Route::get('/getsubcategories', 'UserController@GetSubCategories');
Route::get('/getproductbyfilters', 'UserController@GetProductByFilters');
Route::post('/addorder', 'UserController@AddOrder')->middleware('auth:api');
Route::post('/getordersbyuser', 'UserController@GetOrdersByUser')->middleware('auth:api');
Route::post('/addaddress', 'UserController@AddAddress')->middleware('auth:api');
Route::any('/notauthorized', 'UserController@NotAuthorized');
