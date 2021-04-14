<?php

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

//DB 못쓰니까 튜플방식으로 연결


//goods
Route::get('/goods_index', function () { return view('goods.index');})->name('index');
Route::get('/goods_create', function () { return view('goods.goods_create');})->name('goods_create');
Route::get('/goods_show', function () { return view('goods.goods_show');})->name('goods_show');

//chatting
Route::get('/chat_index', function () { return view('chat.chat_index');})->name('chat_index');
Route::get('/chat_show', function () { return view('chat.chat_show');})->name('chat_show');

//mypage
Route::get('/mypage_index', function () { return view('norm_mypage.mypage_index');})->name('mypage_index');
Route::get('/profile_update', function () { return view('norm_mypage.profile_update');})->name('profile_update');
Route::get('/info_update', function () { return view('norm_mypage.mypage_info_update');})->name('mypage_info_update');
Route::get('/like_list', function () { return view('norm_mypage.like_list');})->name('like_list');
Route::get('/buy_list', function () { return view('norm_mypage.buy_list');})->name('buy_list');
Route::get('/point_show', function () { return view('norm_mypage.point_show');})->name('point_show');
Route::get('/review', function () { return view('norm_mypage.review_create');})->name('review');


//market
Route::get('/market_mypage', function () { return view('buss_mypage.market_mypage');})->name('market_mypage');
Route::get('/market_show', function () { return view('buss_mypage.exchange_show');})->name('market_show');
Route::get('/market_info_update', function () { return view('buss_mypage.market_info_update');})->name('market_info_update');

//cs
Route::get('/notice', function () { return view('auth.notice');})->name('notice');
Route::get('/cs', function () { return view('auth.cs_center');})->name('cs');
