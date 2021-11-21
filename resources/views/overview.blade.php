@extends('layouts.app')

@php
$instances = $limites['limits']['absolute']['totalInstancesUsed'] * 10;
$cores = $limites['limits']['absolute']['totalCoresUsed'] * 5;
$rams = $limites['limits']['absolute']['totalRAMUsed'] * 1;

$intDeg = 3.6 *  $instances;
if($intDeg <= 180){
    $inDegLod1 = $intDeg;
    $inDegLod2 = 0;

}else{
    $inDegLod1 = 180;
    $inDegLod2 = $intDeg - 180;
}

$coreDeg = 3.6 *  $cores;
if($coreDeg <= 180){
    $coreDegLod1 = $coreDeg;
    $coreDegLod2 = 0;

}else{
    $coreDegLod1 = 180;
    $coreDegLod2 = $coreDeg - 180;
}

$ramDeg = $rams / 142.223;
if($ramDeg <= 180){
    $ramDegLod1 = $ramDeg;
    $ramDegLod2 = 0;

}else{
    $ramDegLod1 = 180;
    $ramDegLod2 = $ramDeg - 180;
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
    .progress.green .progress-left .progress-bar {
        animation: loading-5 1.2s linear forwards 1.8s;
    }

    @keyframes loading-1 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $inDegLod1 }}deg);
            transform: rotate({{ $inDegLod1 }}deg);
        }
    }

    @keyframes loading-2 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $inDegLod2 }}deg);
            transform: rotate({{ $inDegLod2 }}deg);
        }
    }

    @keyframes loading-3 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $coreDegLod1 }}deg);
            transform: rotate({{ $coreDegLod1 }}deg);
        }
    }

    @keyframes loading-4 {
        0% {
            -webkit-transform: rotate({{ $coreDegLod2 }}deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(36deg);
            transform: rotate({{ $coreDegLod2 }}deg);
        }
    }

    @keyframes loading-5 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $ramDegLod1 }}deg);
            transform: rotate({{ $ramDegLod1 }}deg);
        }
    }

    @keyframes loading-6 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate({{ $ramDegLod2 }}deg);
            transform: rotate({{ $ramDegLod2 }}deg);
        }
    }

    @media only screen and (max-width: 990px) {
        .progress {
            margin-bottom: 20px;
        }
    }
</style>
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="container">
            <h2 class="region-title">REGION #1</h2>
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
                        <div class="progress-value">{{ $instances }} %</div>
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
                        <div class="progress-value">{{ $cores }}%</div>
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
                        <div class="progress-value">{{ ($rams * 100) / 51200 }}%</div>
                    </div>
                    <span class="progross-title">RAM Usage</span>
                </div>
            </div>
            <hr class="separate-bar">
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
                            <td>{{ $limites['limits']['absolute']['maxTotalInstances'] }}</td>
                            <td>{{ $limites['limits']['absolute']['maxTotalCores'] }}</td>
                            <td>{{ $limites['limits']['absolute']['maxTotalRAMSize'] }}</td>
                            <td>{{ $limites['limits']['absolute']['maxServerMeta'] }}</td>
                            <td>{{ $limites['limits']['absolute']['maxImageMeta'] }}</td>
                            <td>{{ $limites['limits']['absolute']['maxPersonalitySize'] }}</td>
                            <td>{{ $limites['limits']['absolute']['maxTotalKeypairs'] }}</td>
                            <td>{{ $limites['limits']['absolute']['maxServerGroups'] }}</td>
                            <td>{{ $limites['limits']['absolute']['maxServerGroupMembers'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection