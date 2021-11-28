@extends('layouts.app')

@php

$absoluteStorageRegionOne = $absoluteStorageRegionOne['limits']['absolute'];
$extensionStorageRegionOne = $extensionStorageRegionOne['extensions'];

$absoluteStorageRegionTwo = $absoluteStorageRegionTwo['limits']['absolute'];
$extensionStorageRegionTwo = $extensionStorageRegionTwo['extensions'];

@endphp

@section('content')
<div id="page-wrapper">
    <div class="container">
        <h2>REGION 1</h2>
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
                    <td>{{ $absoluteStorageRegionOne['maxTotalVolumes'] }}</td>
                    <td>{{ $absoluteStorageRegionOne['maxTotalSnapshots'] }}</td>
                    <td>{{ $absoluteStorageRegionOne['maxTotalVolumeGigabytes'] }}</td>
                    <td>{{ $absoluteStorageRegionOne['maxTotalBackups'] }}</td>
                    <td>{{ $absoluteStorageRegionOne['maxTotalBackupGigabytes'] }}</td>
                    <td>{{ $absoluteStorageRegionOne['totalVolumesUsed'] }}</td>
                    <td>{{ $absoluteStorageRegionOne['totalGigabytesUsed'] }}</td>
                    <td>{{ $absoluteStorageRegionOne['totalSnapshotsUsed'] }}</td>
                    <td>{{ $absoluteStorageRegionOne['totalBackupsUsed'] }}</td>
                    <td>{{ $absoluteStorageRegionOne['totalBackupGigabytesUsed'] }}</td>
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
                @foreach ($extensionStorageRegionOne as $key => $extension )
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $extension['name'] }}</td>
                    <td>{{ $extension['alias'] }}</td>
                    <td>{{ $extension['description'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        {{-- Region 2 --}}
        <hr class="separate-bar">
        <h2>REGION 2</h2>
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
                    <td>{{ $absoluteStorageRegionTwo['maxTotalVolumes'] }}</td>
                    <td>{{ $absoluteStorageRegionTwo['maxTotalSnapshots'] }}</td>
                    <td>{{ $absoluteStorageRegionTwo['maxTotalVolumeGigabytes'] }}</td>
                    <td>{{ $absoluteStorageRegionTwo['maxTotalBackups'] }}</td>
                    <td>{{ $absoluteStorageRegionTwo['maxTotalBackupGigabytes'] }}</td>
                    <td>{{ $absoluteStorageRegionTwo['totalVolumesUsed'] }}</td>
                    <td>{{ $absoluteStorageRegionTwo['totalGigabytesUsed'] }}</td>
                    <td>{{ $absoluteStorageRegionTwo['totalSnapshotsUsed'] }}</td>
                    <td>{{ $absoluteStorageRegionTwo['totalBackupsUsed'] }}</td>
                    <td>{{ $absoluteStorageRegionTwo['totalBackupGigabytesUsed'] }}</td>
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
                @foreach ($extensionStorageRegionTwo as $key => $extension )
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