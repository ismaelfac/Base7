<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    //** CRUD settings **/
    Route::resource('roles', Settings\PermissionsRoleController::class)->parameters(['roles' => 'role_id']);
    Route::resource('permissions', Settings\PermissionsRoleController::class)->parameters(['permissions' => 'role_id']);
    Route::resource('permissions_role', Settings\PermissionsRoleController::class)->parameters(['permissions_role' => 'role_id']);

    //** PARAMETERS  **/
    //** CRUD BASIC INFO **/
    Route::resource('identifications', Parameters\IdentificationController::class);
    //** CRUD DEMOGRA INFO **/
    Route::resource('countries', Parameters\CountryController::class);
    Route::resource('departaments', Parameters\DepartamentController::class)->parameters(['departaments' => 'country_id']);
    Route::resource('municipalities', Parameters\MunicipalityController::class)->parameters(['municipalities' => 'departament_id']);
    Route::resource('locations', Parameters\LocationController::class)->parameters(['locations' => 'municipality_id']);
    Route::resource('neigborhoods', Parameters\NeighborhoodController::class)->parameters(['neigborhoods' => 'location_id']);

    Route::resource('systems', 'DashboardSystemController');
    Route::resource('parameters', 'DashboardParametersController');
});
