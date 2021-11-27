@extends('layouts.app')
@section('content')
<div id="page-wrapper">
    <div class="container">
        <h2>ALARMS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Severity</th>
                    <th>Threshold rule</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alarms as $key => $alarm )
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $alarm['alarm_id'] }}</td>
                    <td>{{ $alarm['name'] }}</td>
                    <td>{{ $alarm['description'] }}</td>
                    <td>{{ $alarm['type'] }}</td>
                    <td>{{ $alarm['severity'] }}</td>
                    <td>
                        <ul>
                            <li> Meter Name: {{ $alarm['threshold_rule']['meter_name'] }}</li>
                            <li>Period: {{ $alarm['threshold_rule']['period'] }}</li>
                            <li>Comparison Operator: {{ $alarm['threshold_rule']['comparison_operator'] }}</li>
                            <li>Threshold Value: {{ $alarm['threshold_rule']['threshold'] }}</li>
                            <li>Statistic: {{ $alarm['threshold_rule']['statistic'] }}</li>
                            <li>Evaluation Periods: {{ $alarm['threshold_rule']['evaluation_periods'] }}</li>
                            <li>Exclude outliers: {{ $alarm['threshold_rule']['exclude_outliers'] }}</li>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection