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
                    <td href="#" data-toggle="modal" data-target="#myModal"><a>4</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Minor Fault</h4>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>
                            <b>Notification Id: IUR9348</b><br>
                            <b>Server ID: 09dd358a089d4292aa7615c25485aa71</b><br>
                            <b>Name: Cold migrate</b>
                            <p>Description: Resudlt error (Code error : 018444mnmbm41)</p>
                            <i>2021-11-20</i>
                        </li>
                        <li>
                            <b>Notification Id: c76a7603-95be-4368-87e9-7b9b89fb1d7e</b> <br>
                            <b>Server ID: dffbba7da6d2472e84b755f389948b03</b><br>
                            <b>Name: No valid host was found.</b>
                            <p>Description: ERROR (code: 500)</p>
                            <i>2021-11-18</i>
                        </li>
                        <li>
                            <b>Notification Id: 3444kk43k1l</b> <br>
                            <b>Server ID: dffbba7da6d2472e84b755f389948b03</b><br>
                            <b>Name: Server creation error</b>
                            <p>Description: No valid host was found. There are not enough hosts available</p>
                            <i>2021-11-10</i>
                        </li>
                        <li>
                            <b>Notification Id: 4343433jhj5h35</b><br>
                            <b>Server ID: dffbba7da6d2472e84b755f389948b03</b><br>
                            <b>Name: Synchronous Faults</b>
                            <p>Description: Aggregate agg_h1 could not be found. (code error: 404) </p>
                            <i>2021-11-08</i>
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection