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

Route::get('/', 'HomepageController@index')->name('homepage');
Route::get('/news_render', 'HomepageController@news_render')->name('news_render');
Route::get('/event_data', 'HomepageController@event_data')->name('event_data');
// EVENT
Route::get('/event/event_list', 'frontend\event\event_listController@index')->name('event_list');
Route::get('/event/event_list/fetch_data', 'frontend\event\event_listController@event_list_fetch_data')->name('event_list_fetch_data');
Route::get('/event/event_list/search', 'frontend\event\event_listController@event_list_search')->name('event_list_search');
Route::get('/event/event_detail/{yr}/{mt}/{dy}/{id}/{nama}', 'frontend\event\event_detailController@index')->name('event_detail');
Route::get('/event/event_detail/like', 'frontend\event\event_detailController@event_detail_like')->name('event_detail_like');
Route::get('/event/event_detail/interest', 'frontend\event\event_detailController@event_detail_interest')->name('event_detail_interest');
Route::get('/event/event_detail/comment', 'frontend\event\event_detailController@event_detail_comment')->name('event_detail_comment');
Route::post('/event/event_detail/viewer_update', 'frontend\event\event_detailController@event_detail_viewer_update')->name('event_detail_viewer_update');
// NEWS 
Route::get('/news/news_list', 'frontend\news\news_listController@index')->name('news_list');
Route::get('/news/news_list/fetch_data', 'frontend\news\news_listController@news_list_fetch_data')->name('news_list_fetch_data');
Route::get('/news/news_detail/{yr}/{mt}/{dy}/{id}/{nama}', 'frontend\news\news_detailController@index')->name('news_detail');
Route::get('/news/news_detail/like', 'frontend\news\news_detailController@news_detail_like')->name('news_detail_like');
Route::get('/news/news_detail/interest', 'frontend\news\news_detailController@news_detail_interest')->name('news_detail_interest');
Route::get('/news/news_detail/comment', 'frontend\news\news_detailController@news_detail_comment')->name('news_detail_comment');
Route::post('/news/news_detail/viewer_update', 'frontend\news\news_detailController@news_detail_viewer_update')->name('news_detail_viewer_update');
// puisi
Route::get('/puisi/puisi_detail', 'frontend\puisi\puisiController@puisi_detail')->name('puisi_detail');

// shop
Route::get('/shop', 'frontend\shop\shopController@index_shop')->name('index_shop');
Route::get('/shop_detail', 'frontend\shop\shopController@shop_detail')->name('shop_detail');
// ABOUT
Route::get('/about', 'frontend\about\aboutController@index_about')->name('index_about');

// Auth::routes();
Route::get('/login', 'Auth\LoginController@index_login')->name('index_login');
Route::get('/register', 'Auth\LoginController@index_register')->name('index_register');


Route::get('/login_proces', 'Auth\LoginController@login')->name('login');
Route::get('/register_proces', 'Auth\LoginController@register')->name('register');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
// nav
Route::get('/nav_header/notification', 'backend\notification\notificationController@notification')->name('notification');
// Master
// setting Website
Route::get('/master/setting/setting_carousel', 'backend\master\setting\setting_carouselController@setting_carousel')->name('setting_carousel');
Route::post('/master/setting/setting_carousel/save', 'backend\master\setting\setting_carouselController@setting_carousel_save')->name('setting_carousel_save');
Route::get('/master/setting/setting_carousel/edit', 'backend\master\setting\setting_carouselController@setting_carousel_edit')->name('setting_carousel_edit');
Route::get('/master/setting/setting_carousel/update', 'backend\master\setting\setting_carouselController@setting_carousel_update')->name('setting_carousel_update');
Route::get('/master/setting/setting_carousel/delete', 'backend\master\setting\setting_carouselController@setting_carousel_delete')->name('setting_carousel_delete');
Route::get('/master/setting/setting_carousel/datatable', 'backend\master\setting\setting_carouselController@setting_carousel_datatable')->name('setting_carousel_datatable');
Route::get('/master/setting/setting_carousel/frontend', 'backend\master\setting\setting_carouselController@setting_carousel_frontend')->name('setting_carousel_frontend');
// category event
Route::get('/master/category_event', 'backend\master\category\category_eventController@category_event')->name('category_event');
Route::get('/master/category_event/save', 'backend\master\category\category_eventController@category_event_save')->name('category_event_save');
Route::get('/master/category_event/edit', 'backend\master\category\category_eventController@category_event_edit')->name('category_event_edit');
Route::get('/master/category_event/update', 'backend\master\category\category_eventController@category_event_update')->name('category_event_update');
Route::get('/master/category_event/delete', 'backend\master\category\category_eventController@category_event_delete')->name('category_event_delete');
Route::get('/master/category_event/datatable', 'backend\master\category\category_eventController@category_event_datatable')->name('category_event_datatable');
// category news
Route::get('/master/category_news', 'backend\master\category\category_newsController@category_news')->name('category_news');
Route::get('/master/category_news/save', 'backend\master\category\category_newsController@category_news_save')->name('category_news_save');
Route::get('/master/category_news/update', 'backend\master\category\category_newsController@category_news_update')->name('category_news_update');
Route::get('/master/category_news/delete', 'backend\master\category\category_newsController@category_news_delete')->name('category_news_delete');
Route::get('/master/category_news/datatable', 'backend\master\category\category_newsController@category_news_datatable')->name('category_news_datatable');
// user
Route::get('/master/user', 'backend\master\userController@user')->name('user');
Route::post('/master/user/save', 'backend\master\userController@user_save')->name('user_save');
Route::post('/master/user/update', 'backend\master\userController@user_update')->name('user_update');
Route::get('/master/user/delete', 'backend\master\userController@user_delete')->name('user_delete');
Route::get('/master/user/datatable', 'backend\master\userController@user_datatable')->name('user_datatable');
// USER VIEW
Route::get('/user/user_profile', 'backend\user\user_profileController@user_profile')->name('user_profile');
Route::get('/user/change_password_user_profile', 'backend\user\user_profileController@change_password_user_profile')->name('change_password_user_profile');
// FUNCTION
// function event
Route::get('/shop/main_shop', 'backend\main\shop\main_shopController@main_shop')->name('main_shop');
Route::get('/shop/main_shop/create', 'backend\main\shop\main_shopController@main_shop_create')->name('main_shop_create');
Route::post('/shop/main_shop/save', 'backend\main\shop\main_shopController@main_shop_save')->name('main_shop_save');
Route::get('/shop/main_shop/edit', 'backend\main\shop\main_shopController@main_shop_edit')->name('main_shop_edit');
Route::post('/shop/main_shop/update', 'backend\main\shop\main_shopController@main_shop_update')->name('main_shop_update');
Route::get('/shop/main_shop/delete', 'backend\main\shop\main_shopController@main_shop_delete')->name('main_shop_delete');
Route::get('/shop/main_shop/datatable', 'backend\main\shop\main_shopController@main_shop_datatable')->name('main_shop_datatable');

// function event
Route::get('/main/main_event', 'backend\main\event\main_eventController@main_event')->name('main_event');
Route::get('/main/main_event/create', 'backend\main\event\main_eventController@main_event_create')->name('main_event_create');
Route::post('/main/main_event/save', 'backend\main\event\main_eventController@main_event_save')->name('main_event_save');
Route::get('/main/main_event/edit', 'backend\main\event\main_eventController@main_event_edit')->name('main_event_edit');
Route::post('/main/main_event/update', 'backend\main\event\main_eventController@main_event_update')->name('main_event_update');
Route::get('/main/main_event/delete', 'backend\main\event\main_eventController@main_event_delete')->name('main_event_delete');
Route::get('/main/main_event/datatable', 'backend\main\event\main_eventController@main_event_datatable')->name('main_event_datatable');

// function news
Route::get('/main/main_news', 'backend\main\news\main_newsController@main_news')->name('main_news');
Route::get('/main/main_news/create', 'backend\main\news\main_newsController@main_news_create')->name('main_news_create');
Route::post('/main/main_news/save', 'backend\main\news\main_newsController@main_news_save')->name('main_news_save');
Route::get('/main/main_news/edit', 'backend\main\news\main_newsController@main_news_edit')->name('main_news_edit');
Route::post('/main/main_news/update', 'backend\main\news\main_newsController@main_news_update')->name('main_news_update');
Route::get('/main/main_news/delete', 'backend\main\news\main_newsController@main_news_delete')->name('main_news_delete');
Route::get('/main/main_news/datatable', 'backend\main\news\main_newsController@main_news_datatable')->name('main_news_datatable');


// function news
Route::get('/main/main_puisi', 'backend\main\puisi\main_puisiController@main_puisi')->name('main_puisi');
Route::get('/main/main_puisi/create', 'backend\main\puisi\main_puisiController@main_puisi_create')->name('main_puisi_create');
Route::post('/main/main_puisi/save', 'backend\main\puisi\main_puisiController@main_puisi_save')->name('main_puisi_save');
Route::get('/main/main_puisi/edit', 'backend\main\puisi\main_puisiController@main_puisi_edit')->name('main_puisi_edit');
Route::post('/main/main_puisi/update', 'backend\main\puisi\main_puisiController@main_puisi_update')->name('main_puisi_update');
Route::get('/main/main_puisi/delete', 'backend\main\puisi\main_puisiController@main_puisi_delete')->name('main_puisi_delete');
Route::get('/main/main_puisi/datatable', 'backend\main\puisi\main_puisiController@main_puisi_datatable')->name('main_puisi_datatable');


// API

Route::get('/api/api_event_data', 'apiController@api_event_data')->name('api_event_data');
Route::get('/api/api_news_data', 'apiController@api_news_data')->name('api_news_data');




