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
    Route::resource('roles', Settings\PermissionsRoleController::class)->parameters(['roles' => 'role_id']);
    Route::resource('permissions', Settings\PermissionsRoleController::class)->parameters(['permissions' => 'role_id']);
    Route::resource('permissions_role', Settings\PermissionsRoleController::class)->parameters(['permissions_role' => 'role_id']);
    Route::resource('countries', Parameters\CountryController::class);
    Route::resource('departaments', Parameters\DepartamentController::class)->parameters(['departaments' => 'country_id']);
    Route::resource('municipalities', Parameters\MunicipalityController::class)->parameters(['municipalities' => 'departament_id']);
    Route::resource('locations', Parameters\LocationController::class)->parameters(['locations' => 'municipality_id']);
    Route::resource('neigborhoods', Parameters\NeighborhoodController::class)->parameters(['neigborhoods' => 'location_id']);

    Route::resource('systems', 'DashboardSystemController');
    Route::resource('parameters', 'DashboardParametersController');
});
