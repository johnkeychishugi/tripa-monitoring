@extends('layouts.app')

@php

$absoluteStorage = $absoluteStorage['limits']['absolute'];
$extensionStorage = $extensionStorage['extensions'];

@endphp

@section('content')
<div id="page-wrapper">
    <div class="container">
        <h2>ABSOLUTE STORAGE</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Total Volumes</th>
                    <th>Total Snapshots</th>
                    <th>Total Volume Giga bytes</th>
                    <th>Total Backups</th>
                    <th>Total Backup Giga bytes</th>
                    <th>Total Volumes Used</th>
                    <th>Total Giga bytes Used</th>
                    <th>Total Snapshots Used</th>
                    <th>Total Backups Used</th>
                    <th>Total Backup Giga bytes Used</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $absoluteStorage['maxTotalVolumes'] }}</td>
                    <td>{{ $absoluteStorage['maxTotalSnapshots'] }}</td>
                    <td>{{ $absoluteStorage['maxTotalVolumeGigabytes'] }}</td>
                    <td>{{ $absoluteStorage['maxTotalBackups'] }}</td>
                    <td>{{ $absoluteStorage['maxTotalBackupGigabytes'] }}</td>
                    <td>{{ $absoluteStorage['totalVolumesUsed'] }}</td>
                    <td>{{ $absoluteStorage['totalGigabytesUsed'] }}</td>
                    <td>{{ $absoluteStorage['totalSnapshotsUsed'] }}</td>
                    <td>{{ $absoluteStorage['totalBackupsUsed'] }}</td>
                    <td>{{ $absoluteStorage['totalBackupGigabytesUsed'] }}</td>
                </tr>
            </tbody>
        </table>
        <br>
        <h2>EXTENSION FOR VOLUME STORAGE</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Alias</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($extensionStorage as $key => $extension )
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $extension['name'] }}</td>
                    <td>{{ $extension['alias'] }}</td>
                    <td>{{ $extension['description'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection