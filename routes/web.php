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

// Route::get('/', function () {
//     return view('welcome')->name('index');
// });

Route::get('/', 'App\Http\Controllers\Login\LoginController@index')->name('index');

Route::get('/ui_template', 'App\Http\Controllers\Ui_Template@index')->name('ui_template');
Route::get('/controller', 'App\Http\Controllers\Ui_Template@controller')->name('controller');
Route::get('/model', 'App\Http\Controllers\Ui_Template@model')->name('model');
Route::get('/view', 'App\Http\Controllers\Ui_Template@view')->name('view');

Route::get('/route', 'App\Http\Controllers\Ui_Template@route')->name('route');

Route::get('/page_customize', 'App\Http\Controllers\Ui_Template@page_customize')->name('page_customize');

Route::post('/customize_color', 'App\Http\Controllers\Ui_Template@customize_color')->name('customize_color');




Route::get('/write_controller', 'App\Http\Controllers\AutomateCmdLine@write_controller')->name('write_controller');
Route::get('/write_model', 'App\Http\Controllers\AutomateCmdLine@write_model')->name('write_model');
Route::get('/write_view', 'App\Http\Controllers\AutomateCmdLine@write_view')->name('write_view');

Route::post('/controller_function', 'App\Http\Controllers\AutomateCmdLine@controller_function')->name('controller_function');
Route::post('/controller_fields', 'App\Http\Controllers\AutomateCmdLine@controller_fields')->name('controller_fields');
Route::post('/create_controller', 'App\Http\Controllers\AutomateCmdLine@create_controller')->name('create_controller');
Route::post('/controller_list_field', 'App\Http\Controllers\AutomateCmdLine@controller_list_field')->name('controller_list_field');
Route::post('/controller_list_function', 'App\Http\Controllers\AutomateCmdLine@controller_list_function')->name('controller_list_function');

Route::post('/delete_direct', 'App\Http\Controllers\AutomateCmdLine@delete_direct')->name('delete_direct');


Route::post('/model_fields', 'App\Http\Controllers\AutomateCmdLine@model_fields')->name('model_fields');
Route::post('/create_model', 'App\Http\Controllers\AutomateCmdLine@create_model')->name('create_model');
Route::post('/model_list_field', 'App\Http\Controllers\AutomateCmdLine@model_list_field')->name('model_list_field');



Route::post('/view_fields', 'App\Http\Controllers\AutomateCmdLine@view_fields')->name('view_fields');
Route::post('/create_view', 'App\Http\Controllers\AutomateCmdLine@create_view')->name('create_view');
Route::post('/view_list_field', 'App\Http\Controllers\AutomateCmdLine@view_list_field')->name('view_list_field');



//Route
Route::post('/create_route', 'App\Http\Controllers\AutomateCmdLine@create_route')->name('create_route');




//COMMAND LINE
Route::post('/routeClear', 'App\Http\Controllers\AutomateCmdLine@routeClear')->name('routeClear');
Route::post('/routeCache', 'App\Http\Controllers\AutomateCmdLine@routeCache')->name('routeCache');
Route::post('/viewClear', 'App\Http\Controllers\AutomateCmdLine@viewClear')->name('viewClear');
Route::post('/viewCache', 'App\Http\Controllers\AutomateCmdLine@viewCache')->name('viewCache');


// ARCHIEVE MODULE
Route::get('/archieve/{year}', 'App\Http\Controllers\Archieve\RiskDocumentController@archieve')->name('archieve');



// BPA
Route::get('/bpa_list', 'App\Http\Controllers\BPA\BPAController@list')->name('bpa_list');
Route::get('/bpa_create', 'App\Http\Controllers\BPA\BPAController@create')->name('bpa_create');

// RR
Route::get('/rr_list', 'App\Http\Controllers\\RR\RRController@list')->name('rr_list');

// RAP
Route::get('/rap_list', 'App\Http\Controllers\\RAP\RAPController@list')->name('rap_list');
Route::get('/audit_logs', 'App\Http\Controllers\AuditTrails\AuditLogsController@list')->name('audit_logs');
