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

Route::get('/', function () {
    $limitesRegionOne = getAllLimitesOverviewRegionOne();
    $limitesRegionTwo = getAllLimitesOverviewRegionTwo();

    return view('overview',compact('limitesRegionOne','limitesRegionTwo'));
})->name('home');

Route::get('/instance/{id}', function ($id) {

    $interfaces = getAllServerInterface($id);

    return view('instances.show',compact('interfaces'));
})->name('server.show');

Route::get('/network', function () {
    $subnets = getAllSubnets();
    $ports = getAllPorts();
    $networks =getAllNetworks();

    return view('networks.index',compact('networks','subnets','ports'));

})->name('network');

Route::get('/instance', function () {
    $servers = getAllServers();

    return view('instances.index',compact('servers'));

})->name('instance');


Route::get('/image', function () {
    $images = getAllImages();

    return view('images.index',compact('images'));

})->name('image');
