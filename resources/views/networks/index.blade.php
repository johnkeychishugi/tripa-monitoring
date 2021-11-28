@extends('layouts.app')

@php

$networksRegionOne = $networksRegionOne['networks'];
$subnetsRegionOne = $subnetsRegionOne['subnets'];
$portsRegionOne = $portsRegionOne['ports'];

$networksRegionTwo = $networksRegionTwo['networks'];
$subnetsRegionTwo = $subnetsRegionTwo['subnets'];
$portsRegionTwo = $portsRegionTwo['ports'];

@endphp

@section('content')
<div id="page-wrapper">
    <div class="container">
        <h2>REGION 1</h2>
        <h2>LIST NETWORKS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
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
                @foreach ($networksRegionOne as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
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
        <h2>LIST SUBNETS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
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
                @foreach ($subnetsRegionOne as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
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
        <h2>LIST PORTS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
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
                @foreach ($portsRegionOne as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
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
        {{-- Region 2 --}}
        <hr class="separate-bar">
        <h2>REGION 2</h2>
        <h2>LIST NETWORKS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
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
                @foreach ($networksRegionTwo as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['tenant_id'] }}</td>
                    <td>{{ strval($item['mtu']) }}</td>
                    <td>{{ $item['status'] }}</td>
                    <td>{{ $item['shared'] }}</td>
                    <td>{{ $item['availability_zones'] ? $item['availability_zones'][0] : '--'  }}</td>
                    <td>{{ $item['created_at'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <h2>LIST SUBNETS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
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
                @foreach ($subnetsRegionTwo as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
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
        <h2>LIST PORTS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID Port</th>
                    <th>ID Network</th>
                    <th>MAC Address</th>
                    <th>Status</th>
                    <th>Owner</th>
                    <th>Fixe IP</th>
                    <th>Date of Creation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($portsRegionTwo as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['network_id'] }}</td>
                    <td>{{ $item['mac_address'] }}</td>
                    <td>{{ $item['status'] }}</td>
                    <td>{{ $item['device_owner'] }}</td>
                    <td>
                        <ul>
                            <li>Subnet ID: {{ $item['fixed_ips'] ? $item['fixed_ips'][0]['subnet_id'] : '--' }}</li>
                            <li>IP Address: {{ $item['fixed_ips'] ? $item['fixed_ips'][0]['ip_address'] : '--'  }}</li>
                        </ul>
                    </td>
                    <td>{{ $item['created_at'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
         
    </div>
</div>
@endsection