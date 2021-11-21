@extends('layouts.app')
@php
$interfaces = $interfaces['interfaceAttachments'];

@endphp

@section('content')
<div id="page-wrapper">
    <div class="container">
        <h2>INTERFACE #{{ count($interfaces) }}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Network ID</th>
                    <th>Port ID</th>
                    <th>MAC Address</th>
                    <th>Port state</th>
                    <th>Fixed IPs</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interfaces as $item)
                <tr>
                    <td>{{ $item['net_id'] }}</td>
                    <td>{{ $item['port_id'] }}</td>
                    <td>{{ $item['mac_addr'] }}</td>
                    <td>{{ $item['port_state'] }}</td>
                    <td>
                        <ul>
                            <li>Subnet: {{ $item['fixed_ips'][0]['subnet_id'] }}</li>
                            <li>IP Address: {{ $item['fixed_ips'][0]['ip_address'] }}</li>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection