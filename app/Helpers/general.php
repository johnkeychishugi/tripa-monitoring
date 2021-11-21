<?php

function getAllImages()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.6:9292/v2/images');


    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllNetworks()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.14:9696/v2.0/networks');


    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllSubnets()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.14:9696/v2.0/subnets');


    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllPorts()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.14:9696/v2.0/ports');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllServers()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.22:8774/v2.1/servers/detail');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllServerInterface($id)
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.22:8774/v2.1/servers/' .$id. '/os-interface');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

function getAllLimitesOverview()
{
    //setup the request, you can also use CURLOPT_URL
    $ch = curl_init('http://172.16.60.22:8774/v2.1/dffbba7da6d2472e84b755f389948b03/limits');

    // Returns the data/output as a string instead of raw data
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Set your auth headers
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-Auth-Token:' . env('TOKEN')
    ));

    // get stringified data/output. See CURLOPT_RETURNTRANSFER
    $data = curl_exec($ch);

    // get info about the request
    $info = curl_getinfo($ch);
    // close curl resource to free up system resources
    curl_close($ch);

    return  collect(json_decode($data, true));
}

