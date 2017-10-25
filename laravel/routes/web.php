<?php

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
use App\Building;
use App\Neighborhood;


Route::get('/', function () {
    return view('main');
});

Route::get('/api/neighborhood/list', function () {
    return Neighborhood::all();
});

Route::get('/api/building/search/neighborhood/{id}', function ($id) {
    return Building::query()->where(Building::NEIGHBORHOOD_ID, '=', $id)->get();
});