<?php

/*
|--------------------------------------------------------------------------
| API V1 Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Upload not attached to any resource
Route::post('/file', 'FileController@file');
Route::post('/image', 'FileController@image');

// Upload associated with resource attached to authenticated user
Route::post('/{resource}/file', 'FileController@file');
Route::post('/{resource}/image', 'FileController@image');

// Upload associated with a specific resource
Route::post('/{resource}/{id}/file', 'FileController@file');
Route::post('/{resource}/{id}/image', 'FileController@image');
