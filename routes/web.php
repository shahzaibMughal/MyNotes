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

Route::get('/', 'NotesController@index')->name('allNotes');
Route::get('Note/Create', 'NotesController@createNote')->name('createNote');
Route::get('Note/{id}', 'NotesController@getNote')->name('getNote');
Route::post('Note/Create', 'NotesController@store');
Route::get('Note/Edit/{id}', 'NotesController@editNote')->name('editNote');
Route::post('Note/Edit/{id}', 'NotesController@modify');
Route::get('Note/Delete/{id}', 'NotesController@confirmDelete')->name('deleteNote');
Route::delete('Note/Delete/{id}', 'NotesController@delete');
