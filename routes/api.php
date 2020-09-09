<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('getCivilStatus', 'GeneralParametersController@getCivilStatus');
Route::get('getCountries', 'GeneralParametersController@getCountry');
Route::get('getDepartament/{country_id}', 'GeneralParametersController@getDepartament');
Route::get('getMunicipality/{departament_id}', 'GeneralParametersController@getMunicipality');
Route::get('getLocation/{municipality_id}', 'GeneralParametersController@getLocation');
Route::get('getNeighborhood/{location_id}', 'GeneralParametersController@getNeighborhood');
Route::get('getIdentification', 'GeneralParametersController@getIdentification');

Route::group(['prefix' => 'admin'], function () {
    //** CRUD settings **/
    Route::get('systems', 'DashboardSystemController@index');
    Route::get('parameters', 'DashboardParametersController@index');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::get('getpermissions_role/{id}', 'PermissionsRoleController@getpermissions_role');
    Route::resource('permissions_role', 'PermissionsRoleController');

    //** CRUD Paramaters **/
    Route::resource('countries', 'UserController');
    Route::resource('departaments   ', 'RoleController');
    Route::resource('municipalities', 'RoleController');
    Route::resource('locations', 'RoleController');
    Route::resource('neigborhoods', 'RoleController');
});
