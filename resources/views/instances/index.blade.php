@extends('layouts.app')

@php
$serversRegionOne = $serversRegionOne['servers'];
$serversRegionTwo = $serversRegionTwo['servers'];

@endphp

@section('content')
<div id="page-wrapper">
    <div class="container">
        <h2>REGION 1</h2>
        <h2>LIST INSTANCES</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
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
                @foreach ($serversRegionOne as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
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
                            href="{{ route('server.show-region-one',$item['id']) }}">Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
         <br>
         {{-- Region 2 --}}
         <hr class="separate-bar">
        <h2>REGION 2</h2>
        <h2>LIST INSTANCES</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID INSTANCE</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Flavor</th>
                    <th>Availability zone</th>
                    <th>Security Group</th>
                    <th>Date of Creation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($serversRegionTwo as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['status'] }}</td>
                    <td>{{ $item['image']['id'] }}</td>
                    <td>{{ $item['flavor']['id'] }}</td>
                    <td>{{ $item['OS-EXT-AZ:availability_zone'] }}</td>
                    <td>
                        <ul>
                            <li>SSH : {{ $item['security_groups'][0]['name'] }}</li>
                        </ul>
                    </td>
                    <td>{{ $item['created'] }}</td>
                    <td>
                        <a type="button" class="btn btn-primary"
                            href="{{ route('server.show-region-two',$item['id']) }}">Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection