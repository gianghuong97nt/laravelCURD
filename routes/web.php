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

/**
 * Liệt kê danh sách
 */
Route::get('/','Category@index');
Route::get('/product','Product@index');


/**
 * Thêm danh sách
 */
Route::get('/category/create','Category@create');
Route::get('/product/create','Product@create');

/**
 * Sửa danh sách
 */
Route::get('/category/{id}/edit','Category@edit');
Route::get('/product/{id}/edit','Product@edit');

/**
 * Lưu trữ dữ liệu khi tạo mới
 */
Route::get('/category','Category@store');
Route::get('/product','Product@store');

/**
 * Lưu trữ dữ liệu khi sửa
 */
Route::get('/category/{id}','Category@update');
Route::get('/product/{id}','Product@update');

/**
 * Xóa danh sách
 */
Route::get('/category/{id}/delete','Category@delete');
Route::get('/product/{id}/delete','Product@delete');

/**
 * Lưu trũ dữ liệu khi xóa
 */
Route::get('/category/destroy/{id}','Category@destroy');
Route::get('/product/destroy/{id}','Product@destroy');

