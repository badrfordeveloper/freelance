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


Route::group(
    ['middleware' => ['auth']],
    function () {
        Route::get(Config::get('constants.ADMIN_PATH'), 'AdminController@index');
        Route::get(Config::get('constants.ADMIN_PATH').'projets', 'AdminController@index');
		/*Route::resource(Config::get('constants.ADMIN_PATH').'categories', 'Admin\\CategoriesController');*/
     }
);
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('admin/categories', 'Admin\\CategoriesController');
Route::resource('admin/profiles', 'Admin\\ProfilesController');
Route::resource('admin/profiles', 'Admin\\ProfilesController');
Route::resource('admin/projets', 'Admin\\ProjetsController');
Route::resource('admin/commandes', 'Admin\\CommandesController');
Route::resource('admin/skills', 'Admin\\SkillsController');
Route::resource('admin/skillprofiles', 'Admin\\SkillprofilesController');
Route::resource('admin/skillprojets', 'Admin\\SkillprojetsController');
Route::resource('admin/users', 'Admin\\UsersController');