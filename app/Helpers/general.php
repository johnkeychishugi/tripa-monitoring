<?php

function getAllImagesRegionOne()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.6:9292/v2/images');


    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_ONE')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllImagesRegionTwo()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('https://172.16.60.199:9292/v2/images');


    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);


    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_TWO')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllNetworksRegionOne()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.14:9696/v2.0/networks');


    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_ONE')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllNetworksRegionTwo()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('https://172.16.60.199:9696/v2.0/networks');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_TWO')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllSubnetsRegionOne()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.14:9696/v2.0/subnets');


    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_ONE')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllSubnetsRegionTwo()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('https://172.16.60.199:9696/v2.0/subnets');


    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_TWO')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllPortsRegionOne()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.14:9696/v2.0/ports');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_ONE')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllPortsRegionTwo()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('https://172.16.60.199:9696/v2.0/ports');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_TWO')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllServersRegionOne()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.22:8774/v2.1/servers/detail');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_ONE')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllServersRegionTwo()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('https://172.16.60.199:8774/v2.1/servers/detail');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);


    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_TWO')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllServerInterfaceRegionOne($id)
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.22:8774/v2.1/servers/' .$id. '/os-interface');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_ONE')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllServerInterfaceRegionTwo($id)
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('https://172.16.60.199:8774/v2.1/servers/' .$id. '/os-interface');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_TWO')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllLimitesOverviewRegionOne()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.22:8774/v2.1/dffbba7da6d2472e84b755f389948b03/limits');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_ONE')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllLimitesOverviewRegionTwo()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('https://172.16.60.199:8774/v2.1/09dd358a089d4292aa7615c25485aa71/limits');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_TWO')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);
    
    return  collect(json_decode($data, true));
}

function getAllAbsoluteStorageRegionOne()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.16:8776/v3/dffbba7da6d2472e84b755f389948b03/limits');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_ONE')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}


function getAllExtensionStorageRegionOne()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.16:8776/v3/dffbba7da6d2472e84b755f389948b03/extensions');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_ONE')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllAbsoluteStorageRegionTwo()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('https://172.16.60.199:8776/v3/09dd358a089d4292aa7615c25485aa71/limits');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);


    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_TWO')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllExtensionStorageRegionTwo()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('https://172.16.60.199:8776/v3/09dd358a089d4292aa7615c25485aa71/extensions');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);


    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_TWO')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllAlarms()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.11:8042/v2/alarms');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN_REGION_ONE')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}