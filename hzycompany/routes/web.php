<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|u
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');
Route::get('/about','UserController@about');
Route::get('/Japanese','UserController@Japanese');
Route::get('/questions','UserController@questions');
Route::get('/contact','UserController@contact');
Route::get('/','HomeController@index');
Route::patch('/useredit/{id}','Usercontroller@edit')->name('user.edit');
Route::post('/userpsw/','Usercontroller@pswedits')->name('pswedits');
Route::get('/user/{id}','Usercontroller@show')->name('user.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//******************************后台路由组
Route::group(['middleware'=>'auth.admin'],function(){
   //***********************admin.stu******************************************************
    Route::get('/admin','AdminController@index')->name('admin');
    Route::get('/admin/stuadd','AdminController@stuadd')->name('stuadd');
    Route::patch('/admin/stuaddt','AdminController@stuaddt')->name('stuaddt');
    Route::get('/admin/stushow','AdminController@stushow')->name('stushow');
    Route::get('/admin/studel/{id}','AdminController@studel')->name('studel');
//**********************admin.admin*****************************************************
    Route::get('/admin/adminshow','AdminController@adminshow')->name('adminshow');

    Route::get('/admin/adminadd','AdminController@adminadd')->name('adminadd');
    Route::patch('/admin/adminaddt','AdminController@adminaddt')->name('adminaddt');
    Route::get('/admin/admindel/{id}','AdminController@admindel')->name('admindel');
    Route::get('/admin/infoshow','AdminController@infoshow')->name('infoshow');
    Route::get('/admin/jpshow','AdminController@jpshow')->name('jpshow');
    Route::any('/admin/pswedit','AdminController@showpswedit')->name('pswedit');
    Route::any('/admin/psw','AdminController@pswedit')->name('psweditc');
});


Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $router->post('login', 'LoginController@login');
    $router->get('logout', 'LoginController@logout')->name('admin.logout');
    $router->get('dash', 'DashboardController@index');
});