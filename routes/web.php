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


Route::get('/', 'FrontEndController@index')->name('frontend');
Route::post('/all/service/add', 'FrontEndController@allserviceadd')->name("allserviceadd");
Route::post('/contact/insert', 'FrontEndController@contactinsert')->name("contactinsert");
Route::get('/cleaning', 'FrontEndController@cleaning')->name('cleaning');
Route::get('/babysitting', 'FrontEndController@babysitting')->name('babysitting');
Route::get('/cooking', 'FrontEndController@cooking')->name('cooking');
Route::get('/plumbing', 'FrontEndController@plumbing')->name('plumbing');
Route::get('/electrician', 'FrontEndController@electrician')->name('electrician');
Route::get('/contact', 'FrontEndController@contact')->name('contact');
Route::get('/about', 'FrontEndController@about')->name('about');
Route::get('/works', 'FrontEndController@works')->name('works');
Route::get('/search/add/{id}', 'FrontEndController@searchAdd')->name('searchAdd');
Route::get('/search', 'FrontEndController@search')->name('search');
Route::get('/all/service/read/{mark_as_read}', 'FrontEndController@allserviceread');

Auth::routes();
//welcome page or index page
Route::get('/home', 'HomeController@index')->name('home');
//service  page start
Route::get('/add/service', 'ServiceController@add');
Route::get('/service/deactive/{service_id}', 'ServiceController@adminservicedeactive');
Route::get('/service/active/{service_id}', 'ServiceController@adminserviceactive');
Route::get('/service/delete/{service_id}', 'ServiceController@delete');
Route::post('/service/edit/submit', 'ServiceController@serviceEditSubmit');
Route::get('/service/edit/{service_id}', 'ServiceController@serviceEdit');

//sub service start for cleaning

Route::resource('/service', 'ServiceController');
//service page end
Route::get('/why/deactive/{why_id}', 'WhyBdHomeController@adminwhydeactive');
Route::get('/why/active/{why_id}', 'WhyBdHomeController@adminwhyactive');
Route::get('/why/delete/{why_id}', 'WhyBdHomeController@delete');
Route::get('/whyBdHomeadd', 'WhyBdHomeController@whyBdHomeadd');
Route::get('/whyBgHome', 'WhyBdHomeController@whyBgHome');
Route::get('/whybgview', 'WhyBdHomeController@whybgview')->name("whybgview");
Route::post('/whyBgAdd', 'WhyBdHomeController@whyBgAdd')->name("bgadd");
// Route::get('/whybg/deactive/{whybg_id}', 'WhyBdHomeController@adminwhybgdeactive');
Route::get('/whybg/active/{whybg_id}', 'WhyBdHomeController@adminwhybgactive');
Route::get('/whybg/delete/{whybg_id}', 'WhyBdHomeController@deletebg');
Route::get('/callbook', 'WhyBdHomeController@callbook')->name("callbook");
Route::post('/callbookadd', 'WhyBdHomeController@callbookadd')->name("callbookadd");
Route::get('/callbookview', 'WhyBdHomeController@callbookview')->name("callbookview");
Route::get('/callbook/active/{call_book_id}', 'WhyBdHomeController@callBookactive');
//front all service page view
Route::get('/front/service/view', 'WhyBdHomeController@frontserviceview')->name("frontserviceview");

Route::resource('/whybdhome', 'WhyBdHomeController');
