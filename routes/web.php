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
//
//Route::get('/', function () {
//    return view('welcome');
//});
// ------------ Start Blog Front End ---------------

// Route::get('/','WelcomeController@index');

Route::get('portfolio.html','WelcomeController@portfolio');

Route::get('services.html','WelcomeController@services');

Route::get('contact.html','WelcomeController@contact');
// Start Contact 
Route::post('/save-contact','WelcomeController@save_contact');

Route::get('/details-blog/{id}','WelcomeController@details_blog');
Route::get('/all-blog-by-category/{id}','WelcomeController@all_blog_by_category');
// ------------- End Blog Front End --------------
// 
// -------------- Log In -----------------
Route::get('/admin-panel', 'AdminController@index');
Route::post('/login-check','AdminController@login');
Route::get('/logout','SuperAdminController@logout');

// -------------- Admin Panel Start ------------------
Route::get('/dashboard','SuperAdminController@index');

Route::get('/add-category','SuperAdminController@add_category');
Route::post('/save-category','SuperAdminController@save_category');
Route::get('/edit-category/{id}','SuperAdminController@edit_category');
Route::post('/update-category','SuperAdminController@update_category');
Route::get('/manage-category','SuperAdminController@manage_category');
Route::get('/unpublished-category/{id}','SuperAdminController@unpublished_category');
Route::get('/published-category/{id}','SuperAdminController@published_category');
Route::get('/delete-category/{id}','SuperAdminController@delete_category');

Route::get('/add-blog','SuperAdminController@add_blog');
Route::post('/save-blog','SuperAdminController@save_blog');
Route::get('/edit-blog/{id}','SuperAdminController@edit_blog');
Route::post('/update-blog','SuperAdminController@update_blog');
Route::get('/manage-blog','SuperAdminController@manage_blog');
Route::get('/unpublished-blog/{id}','SuperAdminController@unpublished_blog');
Route::get('/published-blog/{id}','SuperAdminController@published_blog');
Route::get('/delete-blog/{id}','SuperAdminController@delete_blog');

// End Blog Admin Panel



// Start Front End Portfolio_new

Route::get('/','FrontendController@index');


// Start Back End Portfolio_new

// For Menu
Route::get('/portfolio-dashboard','BackEndPortfolioController@index');
Route::get('/add-menu','BackEndPortfolioController@add_menu');
Route::post('/store-topmenu','BackEndPortfolioController@store_topmenu');
Route::get('/edit-menu/{id}','BackEndPortfolioController@edit_menu');
Route::post('/update-menu','BackEndPortfolioController@update_menu');
Route::get('/manage-menu','BackEndPortfolioController@manage_menu');
Route::get('/unpublished-menu/{id}','BackEndPortfolioController@unpublished_menu');
Route::get('/published-menu/{id}','BackEndPortfolioController@published_menu');
Route::get('/delete-menu/{id}','BackEndPortfolioController@delete_menu');
// End Menu
// For Sub Menu

Route::get('/add-sub-menu','BackEndPortfolioController@add_sub_menu');
Route::post('/store-sub-menu','BackEndPortfolioController@store_sub_menu');
Route::get('/manage-sub-menu','BackEndPortfolioController@manage_sub_menu');
Route::get('/edit-sub-menu/{id}','BackEndPortfolioController@edit_sub_menu');
Route::post('/update-sub-menu','BackEndPortfolioController@update_sub_menu');
Route::get('/delete-sub-menu/{id}','BackEndPortfolioController@delete_sub_menu');
Route::get('/unpublished-sub-menu/{id}','BackEndPortfolioController@unpublished_sub_menu');
Route::get('/published-sub-menu/{id}','BackEndPortfolioController@published_sub_menu');
// End Back End Protfolio_new


