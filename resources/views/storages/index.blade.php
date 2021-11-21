@extends('layouts.app')

@php

$networks = $networks['networks'];

@endphp

@section('content')
    <div id="page-wrapper">
        <div class="container">
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
        </div>
    </div>
@endsection