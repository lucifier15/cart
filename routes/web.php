<?php

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

Route::get('/',[
   'uses'=>'ProductController@index',
   'as'=>'product.index'    
]);

Route::get('/add-to-cart/{id}',[
   'uses'=>'ProductController@getAddToCart',
   'as'=>'product.addToCart'
   
]);

Route::get('/shopping-cart',[
   'uses'=>'ProductController@getCart',
   'as'=>'product.shoppingCart'
]);

   
Route::group(['prefix'=>'user'],function(){

Route::group(['middleware'=>'guest'],function(){
Route::get('/signup',[
   'uses'=>'UserController@getsignup',
   'as'=>'user.signup'
]);

Route::post('/signup',[
   'uses'=>'UserController@postsignup',
   'as'=>'user.signup'
]);

Route::get('/signin',[
   'uses'=>'UserController@getsignin',
   'as'=>'user.signin'
]);

Route::post('/signin',[
   'uses'=>'UserController@postsignin',
   'as'=>'user.signin'
]);
});

Route::group(['middleware'=>'auth'],function(){
	Route::get('/profile',[
   'uses'=>'UserController@getprofile',
   'as'=>'user.profile'
]);

Route::get('/logout',[
   'uses'=>'UserController@getlogout',
   'as'=>'user.logout'
]);

});

});   