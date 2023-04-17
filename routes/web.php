<?php

use Illuminate\Support\Facades\Route;
Route::get('/','App\Http\Controllers\Ucontroller@index');

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
Route::get('/beneficiaries',function(){
    return view('beneficiaries');
});
Route::post('reg_Emp','App\Http\Controllers\EmployeeController@store');
Route::view('emp_create','emp_create');
Route::post('/createaccount', 'App\Http\Controllers\Ucontroller@store');
Route::post('/validate','App\Http\Controllers\Ucontroller@login');
// Route::post('/employee','App\Http\Controllers\EmployeeController@index');
Route::get('employees','App\Http\Controllers\EmployeeController@index');
?>