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

Route::get('/', 'PagesController@index')->name('root');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('about', 'PagesController@about')->name('about');
Route::get('cookies', 'PagesController@cookies')->name('cookies');
Route::get('avisoLegal', 'PagesController@avisoLegal')->name('avisoLegal');
Route::post('/companies/createCompanyAjax','CompaniesController@createCompanyAjax');
Route::post('/companies/validar', 'CompaniesController@validacionCompanyAjax');
Route::post('/companies/editCompanyAjax','CompaniesController@editCompanyAjax');
Route::get('/companies/nuevoFormulario','CompaniesController@nuevoFormulario');
Route::delete('/companies/borrarAjax/{idLibro}','CompaniesController@deleteAjax');
Route::get('/jobs/paginar/{numeroElementos}', 'JobsController@paginar');


Route::resource('/jobs', 'JobsController');

Route::resource('/companies','CompaniesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
