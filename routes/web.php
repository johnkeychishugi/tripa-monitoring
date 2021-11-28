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

Route::get('/instance-region-one/{id}', function ($id) {

    $interfaces = getAllServerInterfaceRegionOne($id);

    return view('instances.show',compact('interfaces'));

})->name('server.show-region-one');

Route::get('/instance-region-two/{id}', function ($id) {

    $interfaces = getAllServerInterfaceRegionTwo($id);

    return view('instances.show',compact('interfaces'));

})->name('server.show-region-two');

Route::get('/network', function () {
    $subnetsRegionOne = getAllSubnetsRegionOne();
    $subnetsRegionTwo = getAllSubnetsRegionTwo();
    $portsRegionOne = getAllPortsRegionOne();
    $portsRegionTwo = getAllPortsRegionTwo();
    $networksRegionOne =getAllNetworksRegionOne();
    $networksRegionTwo =getAllNetworksRegionTwo();

    return view('networks.index',compact('subnetsRegionOne','subnetsRegionTwo','portsRegionOne','portsRegionOne','portsRegionTwo','networksRegionOne','networksRegionTwo'));

})->name('network');

Route::get('/instance', function () {
    $serversRegionOne = getAllServersRegionOne();
    $serversRegionTwo = getAllServersRegionTwo();

    return view('instances.index',compact('serversRegionOne','serversRegionTwo'));

})->name('instance');


Route::get('/image', function () {
    $imagesRegionOne = getAllImagesRegionOne();
    $imagesRegionTwo = getAllImagesRegionTwo();

    return view('images.index',compact('imagesRegionOne','imagesRegionTwo'));

})->name('image');


Route::get('/storage', function () {
    $absoluteStorageRegionOne = getAllAbsoluteStorageRegionOne();
    $extensionStorageRegionOne = getAllExtensionStorageRegionOne();

    $absoluteStorageRegionTwo = getAllAbsoluteStorageRegionTwo();
    $extensionStorageRegionTwo = getAllExtensionStorageRegionTwo();
    
    return view('storages.index',compact('absoluteStorageRegionOne','extensionStorageRegionOne','absoluteStorageRegionTwo','extensionStorageRegionTwo'));

})->name('storage');


Route::get('/alarm', function () {
    $alarms = getAllAlarms();
   
    return view('problems.alarm',compact('alarms'));

})->name('alarm');


Route::get('/notification', function () {
 
   
    return view('problems.notification');

})->name('notification');
