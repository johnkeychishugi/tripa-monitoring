@extends('layouts.app')

@php
$images = $images['images'];

@endphp

@section('content')
<div id="page-wrapper">
    <div class="container">
            <h2>LIST IMAGES</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
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
                    @foreach ($images as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
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
    </div>
@endsection