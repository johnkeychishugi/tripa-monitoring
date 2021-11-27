@extends('layouts.app')

@php

$instancesRegionOne = $limitesRegionOne['limits']['absolute']['totalInstancesUsed'] * 10;
$coresRegionOne = $limitesRegionOne['limits']['absolute']['totalCoresUsed'] * 5;
$ramsRegionOne = $limitesRegionOne['limits']['absolute']['totalRAMUsed'] * 1;

$instancesRegionTwo = $limitesRegionTwo['limits']['absolute']['totalInstancesUsed'] * 10;
$coresRegionTwo = $limitesRegionTwo['limits']['absolute']['totalCoresUsed'] * 5;
$ramsRegionTwo = $limitesRegionTwo['limits']['absolute']['totalRAMUsed'] * 1;


//Region One
$intDegRegionOne = 3.6 *  $instancesRegionOne;
if($intDegRegionOne <= 180){
    $inDegLod1RegionOne = $intDegRegionOne;
    $inDegLod2RegionOne = 0;

}else{
    $inDegLod1RegionOne = 180;
    $inDegLod2RegionOne = $intDegRegionOne - 180;
}

$coreDegRegionOne = 3.6 *  $coresRegionOne;
if($coreDegRegionOne <= 180){
    $coreDegLod1RegionOne = $coreDegRegionOne;
    $coreDegLod2RegionOne = 0;

}else{
    $coreDegLod1RegionOne = 180;
    $coreDegLod2RegionOne = $coreDegRegionOne - 180;
}

$ramDegRegionOne = $ramsRegionOne / 142.223;
if($ramDegRegionOne <= 180){
    $ramDegLod1RegionOne = $ramDegRegionOne;
    $ramDegLod2RegionOne = 0;

}else{
    $ramDegLod1RegionOne = 180;
    $ramDegLod2RegionOne = $ramDegRegionOne - 180;
}



//Region two
$intDegRegionTwo = 3.6 *  $instancesRegionTwo;
if($intDegRegionTwo <= 180){
    $inDegLod1RegionTwo = $intDegRegionTwo;
    $inDegLod2RegionTwo = 0;

}else{
    $inDegLod1RegionTwo = 180;
    $inDegLod2RegionTwo = $intDegRegionTwo - 180;
}

$coreDegRegionTwo = 3.6 *  $coresRegionTwo;
if($coreDegRegionTwo <= 180){
    $coreDegLod1RegionTwo = $coreDegRegionTwo;
    $coreDegLod2RegionTwo = 0;

}else{
    $coreDegLod1RegionTwo = 180;
    $coreDegLod2RegionTwo = $coreDegRegionTwo - 180;
}

$ramDegRegionTwo = $ramsRegionTwo / 142.223;
if($ramDegRegionTwo <= 180){
    $ramDegLod1RegionTwo = $ramDegRegionTwo;
    $ramDegLod2RegionTwo = 0;

}else{
    $ramDegLod1RegionTwo = 180;
    $ramDegLod2RegionTwo = $ramDegRegionTwo - 180;
}

@endphp

@section('css')
<style>
    .progress {
        width: 150px;
        height: 150px;
        line-height: 150px;
        background: none;
        margin: 0 auto;
        box-shadow: none;
        position: relative;
    }

    .progress:after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 12px solid #fff;
        position: absolute;
        top: 0;
        left: 0;
    }

    .progress>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }

    .progress .progress-left {
        left: 0;
    }

    .progress .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 12px;
        border-style: solid;
        position: absolute;
        top: 0;
    }

    .progress .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }

    .progress .progress-right {
        right: 0;
    }

    .progress .progress-right .progress-bar1 {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-1 1.8s linear forwards;
    }
    .progress .progress-right  .progress-bar2 {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-3 1.8s linear forwards;
    }

    .progress .progress-right  .progress-bar3 {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-5 1.8s linear forwards;
    }

    .progress .progress-right  .progress-bar4 {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-7 1.8s linear forwards;
    }

    .progress .progress-right  .progress-bar5 {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-9 1.8s linear forwards;
    }

    .progress .progress-right  .progress-bar6 {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-11 1.8s linear forwards;
    }

    .progress .progress-value {
        width: 90%;
        height: 90%;
        border-radius: 50%;
        background: #44484b;
        font-size: 24px;
        color: #fff;
        line-height: 135px;
        text-align: center;
        position: absolute;
        top: 5%;
        left: 5%;
    }

    .progress.blue .progress-bar {
        border-color: #049dff;
    }

    .progress.blue .progress-left .progress-bar {
        animation: loading-2 1.5s linear forwards 1.8s;
    }

    .progress.yellow .progress-bar {
        border-color: #fdba04;
    }

    .progress.yellow .progress-left .progress-bar {
        animation: loading-4 1s linear forwards 1.8s;
    }

    .progress.pink .progress-bar {
        border-color: #ed687c;
    }

    .progress.pink .progress-left .progress-bar {
        animation: loading-6 0.4s linear forwards 1.8s;
    }

    .progress.green .progress-bar {
        border-color: #1abc9c;
    }

    .progress.green .progress-left .progress-bar {
        animation: loading-8 1.2s linear forwards 1.8s;
    }

    .progress.gray .progress-bar {
        border-color: #1abc1c;
    }

    .progress.green .progress-left .progress-bar {
        animation: loading-10 1.2s linear forwards 1.8s;
    }

    .progress.grayfine .progress-bar {
        border-color: #1abc;
    }

    .progress.green .progress-left .progress-bar {
        animation: loading-12 1.2s linear forwards 1.8s;
    }

    .circle-box{
        text-align: center;
    }
    .overview-details{
        text-align: center;    
    }
    .separate-bar{
        border : 1px solid black;
        opacity: 0.2
    }


    @keyframes loading-1 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $inDegLod1RegionOne }}deg);
            transform: rotate({{ $inDegLod1RegionOne }}deg);
        }
    }

    @keyframes loading-2 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $inDegLod2RegionOne }}deg);
            transform: rotate({{ $inDegLod2RegionOne }}deg);
        }
    }

    @keyframes loading-3 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $coreDegLod1RegionOne }}deg);
            transform: rotate({{ $coreDegLod1RegionOne }}deg);
        }
    }

    @keyframes loading-4 {
        0% {
            -webkit-transform: rotate({{ $coreDegLod2RegionOne }}deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(36deg);
            transform: rotate({{ $coreDegLod2RegionOne }}deg);
        }
    }

    @keyframes loading-5 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $ramDegLod1RegionOne }}deg);
            transform: rotate({{ $ramDegLod1RegionOne }}deg);
        }
    }

    @keyframes loading-6 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $ramDegLod2RegionOne }}deg);
            transform: rotate({{ $ramDegLod2RegionOne }}deg);
        }
    }

    @media only screen and (max-width: 990px) {
        .progress {
            margin-bottom: 20px;
        }
    }



    @keyframes loading-7 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $inDegLod1RegionTwo }}deg);
            transform: rotate({{ $inDegLod1RegionTwo }}deg);
        }
    }

    @keyframes loading-8 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $inDegLod2RegionTwo }}deg);
            transform: rotate({{ $inDegLod2RegionTwo }}deg);
        }
    }
    @keyframes loading-9 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $coreDegLod1RegionTwo }}deg);
            transform: rotate({{ $coreDegLod1RegionTwo }}deg);
        }
    }

    @keyframes loading-10 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $coreDegLod2RegionTwo }}deg);
            transform: rotate({{ $coreDegLod2RegionTwo }}deg);
        }
    }

    @keyframes loading-11 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $ramDegLod1RegionTwo }}deg);
            transform: rotate({{ $ramDegLod1RegionTwo }}deg);
        }
    }

    @keyframes loading-12 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $ramDegLod2RegionTwo }}deg);
            transform: rotate({{ $ramDegLod2RegionTwo }}deg);
        }
    }


</style>
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="container">
            <h2 class="region-title">REGION 1</h2>
            <div class="row">
                <br><br>
                <div class="col-md-3 col-sm-6 circle-box">
                    <div class="progress blue">
                        <span class="progress-left">
                            <span class="progress-bar progress-bar1"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar progress-bar1"></span>
                        </span>
                        <div class="progress-value">{{ $instancesRegionOne }} %</div>
                    </div>
                    <span class="progross-title">Instances Usage</span>
                </div>
                <div class="col-md-3 col-sm-6 circle-box">
                    <div class="progress yellow">
                        <span class="progress-left">
                            <span class="progress-bar progress-bar2"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar progress-bar2"></span>
                        </span>
                        <div class="progress-value">{{ $coresRegionOne }}%</div>
                    </div>
                    <span class="progross-title">Cores Usage</span>
                </div>
                <div class="col-md-3 col-sm-6 circle-box">
                    <div class="progress pink">
                        <span class="progress-left">
                            <span class="progress-bar progress-bar3"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar progress-bar3"></span>
                        </span>
                        <div class="progress-value">{{ ($ramsRegionOne * 100) / 51200 }}%</div>
                    </div>
                    <span class="progross-title">RAM Usage</span>
                </div>
            </div>
            <div class="row">
                <h2 class="overview-details">Overview Details</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Total Instances:</th>
                            <th>Total Cores</th>
                            <th>Total RAM Size</th>
                            <th>Server Meta</th>
                            <th>Image Meta</th>
                            <th>Personality Size</th>
                            <th>Total Keypairs</th>
                            <th>Server Groups</th>
                            <th>Server Group Members</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $limitesRegionOne['limits']['absolute']['maxTotalInstances'] }}</td>
                            <td>{{ $limitesRegionOne['limits']['absolute']['maxTotalCores'] }}</td>
                            <td>{{ $limitesRegionOne['limits']['absolute']['maxTotalRAMSize'] }}</td>
                            <td>{{ $limitesRegionOne['limits']['absolute']['maxServerMeta'] }}</td>
                            <td>{{ $limitesRegionOne['limits']['absolute']['maxImageMeta'] }}</td>
                            <td>{{ $limitesRegionOne['limits']['absolute']['maxPersonalitySize'] }}</td>
                            <td>{{ $limitesRegionOne['limits']['absolute']['maxTotalKeypairs'] }}</td>
                            <td>{{ $limitesRegionOne['limits']['absolute']['maxServerGroups'] }}</td>
                            <td>{{ $limitesRegionOne['limits']['absolute']['maxServerGroupMembers'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr class="separate-bar">
        <div class="container">
            <h2 class="region-title">REGION 2</h2>
            <div class="row">
                <br><br>
                <div class="col-md-3 col-sm-6 circle-box">
                    <div class="progress green">
                        <span class="progress-left">
                            <span class="progress-bar progress-bar4"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar progress-bar4"></span>
                        </span>
                        <div class="progress-value">{{ $instancesRegionTwo }} %</div>
                    </div>
                    <span class="progross-title">Instances Usage</span>
                </div>
                <div class="col-md-3 col-sm-6 circle-box">
                    <div class="progress gray">
                        <span class="progress-left">
                            <span class="progress-bar progress-bar5"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar progress-bar5"></span>
                        </span>
                        <div class="progress-value">{{ $coresRegionTwo }}%</div>
                    </div>
                    <span class="progross-title">Cores Usage</span>
                </div>
                <div class="col-md-3 col-sm-6 circle-box">
                    <div class="progress grayfine">
                        <span class="progress-left">
                            <span class="progress-bar progress-bar6"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar progress-bar6"></span>
                        </span>
                        <div class="progress-value">{{ ($ramsRegionTwo * 100) / 51200 }}%</div>
                    </div>
                    <span class="progross-title">RAM Usage</span>
                </div>
            </div>
            <div class="row">
                <h2 class="overview-details">Overview Details</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Total Instances:</th>
                            <th>Total Cores</th>
                            <th>Total RAM Size</th>
                            <th>Server Meta</th>
                            <th>Image Meta</th>
                            <th>Personality Size</th>
                            <th>Total Keypairs</th>
                            <th>Server Groups</th>
                            <th>Server Group Members</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $limitesRegionTwo['limits']['absolute']['maxTotalInstances'] }}</td>
                            <td>{{ $limitesRegionTwo['limits']['absolute']['maxTotalCores'] }}</td>
                            <td>{{ $limitesRegionTwo['limits']['absolute']['maxTotalRAMSize'] }}</td>
                            <td>{{ $limitesRegionTwo['limits']['absolute']['maxServerMeta'] }}</td>
                            <td>{{ $limitesRegionTwo['limits']['absolute']['maxImageMeta'] }}</td>
                            <td>{{ $limitesRegionTwo['limits']['absolute']['maxPersonalitySize'] }}</td>
                            <td>{{ $limitesRegionTwo['limits']['absolute']['maxTotalKeypairs'] }}</td>
                            <td>{{ $limitesRegionTwo['limits']['absolute']['maxServerGroups'] }}</td>
                            <td>{{ $limitesRegionTwo['limits']['absolute']['maxServerGroupMembers'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection