@extends('layouts.app')
@section('content')
<div id="page-wrapper">
    <div class="container">
        <h2>Notifications</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Harmless Fault</th>
                    <th>Severe Fault</th>
                    <th>Critical Fault</th>
                    <th>Major Fault</th>
                    <th>Minor Fault</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
              </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection