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


//Log in page
Route::get('/Giveapp.com','User\pageController@user');

Route::post( "/signup", "User\pageController@signupPost" );

Route::post( "/login", "User\pageController@loginPost" );

//Landing page
Route::get('/user/home','User\pageController@show');

//Profile page
Route::get('/user/profile','User\pageController@profile');

//About the website
Route::get('/user/about','User\pageController@about');

//Electronic Devices - Categories
Route::get('/user/category/electronicdevices','User\pageController@electrodevices');

//Electronic Accessories - Categories
Route::get('/user/category/electronicaccessories','User\pageController@electroaccesory');

//TV and Home Appliances - Categories
Route::get('/user/category/appliances','User\pageController@appliances');

//Health and Beauty - Categories
Route::get('/user/category/health','User\pageController@health');

//Babies and Toys - Categories
Route::get('/user/category/babies','User\pageController@babies');

//Groceries and Pets - Categories
Route::get('/user/category/groceries','User\pageController@groceries');

//Home and Lifestyle - Categories
Route::get('/user/category/lifestyle','User\pageController@lifestyle');

//Women's Fashion - Categories
Route::get('/user/category/womens','User\pageController@womens');

//Men's Fashion - Categories
Route::get('/user/category/mens','User\pageController@mens');

//Fashion Accessories - Categories
Route::get('/user/category/accessories','User\pageController@accessories');

//Sports & Travel - Categories
Route::get('/user/category/sports','User\pageController@sports');

//Automotive & Motorcycles - Categories
Route::get('/user/category/automotive','User\pageController@automotive');


//Donate Item Route
Route::get('/user/profile/donateitem','User\pageController@donate');

// Route::post("/user/profile/donateitem",'User\pageController@store');



//Admin Side
Route::get('/', function (){
	return redirect("/Giveapp.com");
});

//Log in page
Route::get('/Giveapp-Admin.com','Admin\pageController@admin');

//Dashboard
Route::get('/admin/dashboard','Admin\pageController@dashboard');

//Add Admin
Route::get('/admin/addadmin','Admin\pageController@addadmin');

//Adminstrator List
Route::get('/admin/adminlist','Admin\pageController@list');

//Item Pending List
Route::get('/admin/item','Admin\pageController@items');

//About Page
Route::get('/admin/about','Admin\pageController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
