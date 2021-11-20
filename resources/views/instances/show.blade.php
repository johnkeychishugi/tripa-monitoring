<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    @php
        $interfaces = $interfaces['interfaceAttachments'];

    @endphp
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

</body>

</html>
