<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @php
        $images = $images['images'];
        $networks = $networks['networks'];
        $subnets = $subnets['subnets'];
        $ports = $ports['ports'];
        $servers = $servers['servers'];

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
        .nav-title{
            color : #fff;
            padding: 10px 10px 10px 12px;
            font-size: 20px;
        }
        .brand-text{
            color : #fff!important;
            padding: 20px 10px 10px 12px!important;
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
</head>

<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand brand-text" href="{{ route('home') }}">
                FEDGEN
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="{{ route('home') }}" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="nav-title"><span>Monitoring</span></li>
                <li>
                    <a href="{{ route('home') }}"><i class="fa fa-pie-chart"></i> Overview</a>
                </li>
                <li>
                    <a href="{{ route('home') }}"><i class="fa fa-wifi"></i> Network</a>
                </li>
                <li>
                    <a href="{{ route('home') }}"><i class="fa fa-hdd-o"></i> Storage</a>
                </li>
                <li>
                    <a href="{{ route('home') }}"><i class="fa fa-server"></i> Compute</a>
                </li>
                <li>
                    <a href="{{ route('home') }}"><i class="fa fa-file-archive-o"></i> Images</a>
                </li>
                <li>
                    <a href="{{ route('home') }}"><i class="fa fa-exclamation-triangle"></i> Problems</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
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
            <br>
            <h2>LIST IMAGES #{{ count($images) }}</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Disk Format</th>
                        <th>Architecture</th>
                        <th>Size</th>
                        <th>Status</th>
                        <th>Stores</th>
                        <th>Visibility</th>
                        <th>Owner</th>
                        <th>Date of creation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['disk_format'] }}</td>
                        <td>{{ $item['architecture'] }}</td>
                        <td>{{ $item['size'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>{{ $item['stores'] }}</td>
                        <td>{{ $item['visibility'] }}</td>
                        <td>{{ $item['owner'] }}</td>
                        <td>{{ $item['created_at'] }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <h2>LIST NETWORKS #{{ count($networks) }}</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Network</th>
                        <th>Name</th>
                        <th>Tenant ID</th>
                        <th>MTU</th>
                        <th>Status</th>
                        <th>Shared</th>
                        <th>Availability Zone</th>
                        <th>Date of Creation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($networks as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['tenant_id'] }}</td>
                        <td>{{ strval($item['mtu']) }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>{{ $item['shared'] }}</td>
                        <td>{{ $item['availability_zones'][0] }}</td>
                        <td>{{ $item['created_at'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <h2>LIST SUBNETS #{{ count($subnets) }}</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Subnet</th>
                        <th>Name</th>
                        <th>ID Network</th>
                        <th>IP Version</th>
                        <th>Address</th>
                        <th>Allocation Pool</th>
                        <th>DNS Server</th>
                        <th>Date of Creation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subnets as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['network_id'] }}</td>
                        <td>{{ $item['ip_version'] }}</td>
                        <td>{{ $item['cidr'] }}</td>
                        <td>
                            <ul>
                                <li>Start: {{ $item['allocation_pools'][0]['start'] }}</li>
                                <li>End: {{ $item['allocation_pools'][0]['end'] }}</li>
                            </ul>
                        </td>
                        <td>{{ $item['dns_nameservers'] ? $item['dns_nameservers'][0] : '' }}</td>
                        <td>{{ $item['created_at'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <h2>LIST PORTS #{{ count($ports) }}</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Port</th>
                        <th>ID Network</th>
                        <th>MAC Address</th>
                        <th>Status</th>
                        <th>Owner</th>
                        <th>Fixe IP</th>
                        <th>IP Allocation</th>
                        <th>Date of Creation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ports as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['network_id'] }}</td>
                        <td>{{ $item['mac_address'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>{{ $item['device_owner'] }}</td>
                        <td>
                            <ul>
                                <li>Subnet ID: {{ $item['fixed_ips'][0]['subnet_id'] }}</li>
                                <li>IP Address: {{ $item['fixed_ips'][0]['ip_address'] }}</li>
                            </ul>
                        </td>
                        <td>{{ $item['ip_allocation'] }}</td>
                        <td>{{ $item['created_at'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <h2>LIST INSTANCES #{{ count($servers) }}</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID INSTANCE</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Flavor</th>
                        <th>IP Address</th>
                        <th>Availability zone</th>
                        <th>Security Group</th>
                        <th>Date of Creation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($servers as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>{{ $item['image']['id'] }}</td>
                        <td>{{ $item['flavor']['id'] }}</td>
                        <td>
                            <ul>
                                <li>Internal IP: {{ $item['addresses']['Int_net1'][0]['addr'] }}</li>
                                <li>External IP: {{ $item['addresses']['Int_net1'][1]['addr'] }}</li>
                            </ul>
                        </td>
                        <td>{{ $item['OS-EXT-AZ:availability_zone'] }}</td>
                        <td>
                            <ul>
                                <li>SSH : {{ $item['security_groups'][0]['name'] }}</li>
                                <li>Group: {{ $item['security_groups'][1]['name'] }}</li>

                            </ul>
                        </td>
                        <td>{{ $item['created'] }}</td>
                        <td>
                            <a type="button" class="btn btn-primary"
                                href="{{ route('server.show',$item['id']) }}">Details</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div><!-- /#wrapper -->
</body>

</html>