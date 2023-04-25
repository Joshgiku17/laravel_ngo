<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
Route::view('/','index');
Route::view('bene','bene');
Route::get('/login',function(){
    return view('login');
});
Route::get('/index',function(){
    return view('index');
});
Route::get('/admin',function(){
    return view('dash');
});
Route::get('/donors',function(){
    return view('donors');
});
Route::get('/employees',function(){
    return view('employees');
});
Route::get('/bene',function(){
    return view('bene');
});
Route::post('reg_Emp','App\Http\Controllers\EmployeeController@store');
Route::view('emp_create','emp_create');
Route::view('bene_add','bene_add');
Route::view('don_add','don_add');
Route::post('reg_donor','App\Http\controllers\DonorsController@store');
ROute::post('register_bene','App\Http\Controllers\BeneController@store');
Route::post('/createaccount', 'App\Http\Controllers\Ucontroller@store');
Route::post('/validate','App\Http\Controllers\Ucontroller@login');
// Route::post('/employee','App\Http\Controllers\EmployeeController@index');
Route::get('employees','App\Http\Controllers\EmployeeController@index');
Route::get('bene','App\Http\Controllers\BeneController@index');
?>