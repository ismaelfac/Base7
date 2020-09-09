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
    Route::apiResources([
        'roles' => Settings\RoleController::class,
        'permissions' => Settings\PermissionController::class,
        'permissions_role' => Settings\PermissionsRoleController::class,
        //** CRUD Paramaters **/
        'countries' => Parameters\CountryController::class,
        'departaments' => Parameters\CountryController::class,
        'municipalities' => Parameters\CountryController::class,
        'locations' => Parameters\CountryController::class,
        'neigborhoods' => Parameters\CountryController::class,
    ]);
    Route::get('systems', 'DashboardSystemController@index');
    Route::get('parameters', 'DashboardParametersController@index');
    Route::get('getpermissions_role/{id}', 'Settings\PermissionsRoleController@getpermissions_role');
    Route::resource('permissions_role', 'PermissionsRoleController');
});
