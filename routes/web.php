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
Route::get('welcome/{local}',function($local){
 if(! in_array($locale, ['en', 'es', 'fr']))
 {
    abort(400);
}
App::setLocale($locale);
});

    

    
//ROUTE::get('index','TestController@index');


   Route::group(['namespace'=>'courses'],function(){
      // route::get('/','CoursesController@index')->name('index');
       Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){
 
        route::get('/registerr','CoursesController@create')->name('registerr');
        route::get('/enroll','CoursesController@enroll')->name('enrollpage');
      route::get('/fillable','CoursesController@fill');

      
     route::post('/enroll','CoursesController@store')->name('enroll');
     route::post('/registeration','CoursesController@save')->name('registeration');
     route::get('/all','CoursesController@all')->name('all');
     route::get('edit/{id}','CoursesController@edit')->name('course_edit');
     route::get('delete/{id}','CoursesController@destroy')->name('course_delete');
     route::post('update/{id}','CoursesController@update')->name('update');
    });

       });


 Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){
   route::get('/','RegisterController@index')->name('index');
 
   route::post('/registeration','RegisterController@store')->name('registeration');
   
   route::get('/student','RegisterController@show')->name('student');
     
   
});
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/