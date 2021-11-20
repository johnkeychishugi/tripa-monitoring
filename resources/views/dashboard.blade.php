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
        $images = $images['images'];
        $networks = $networks['networks'];
        $subnets = $subnets['subnets'];
        $ports = $ports['ports'];
        $servers = $servers['servers'];

    @endphp
    <div class="container">
        <h2>LIST IMAGES  #{{ count($images) }}</h2>
        <table class="table">
            <thead>
                <tr>
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
                @foreach ($images as $item)
                    <tr>
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
        <br>
        <h2>LIST NETWORKS  #{{ count($networks) }}</h2>
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
        <br>
        <h2>LIST SUBNETS  #{{ count($subnets) }}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Subnet</th>
                    <th>Name</th>
                    <th>ID Network</th>
                    <th>IP Version</th>
                    <th>Address</th>
                    <th>Allocation Pool</th>
                    <th>DNS Server</th>
                    <th>Date of Creation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subnets as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['network_id'] }}</td>
                        <td>{{ $item['ip_version'] }}</td>
                        <td>{{ $item['cidr'] }}</td>
                        <td>
                            <ul>
                                <li>Start: {{ $item['allocation_pools'][0]['start'] }}</li>
                                <li>End: {{ $item['allocation_pools'][0]['end'] }}</li>
                            </ul>
                        </td>
                        <td>{{ $item['dns_nameservers'] ? $item['dns_nameservers'][0] : '' }}</td>
                        <td>{{ $item['created_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <h2>LIST PORTS  #{{ count($ports) }}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Port</th>
                    <th>ID Network</th>
                    <th>MAC Address</th>
                    <th>Status</th>
                    <th>Owner</th>
                    <th>Fixe IP</th>
                    <th>IP Allocation</th>
                    <th>Date of Creation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ports as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['network_id'] }}</td>
                        <td>{{ $item['mac_address'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>{{ $item['device_owner'] }}</td>
                        <td>
                            <ul>
                                <li>Subnet ID: {{ $item['fixed_ips'][0]['subnet_id'] }}</li>
                                <li>IP Address: {{ $item['fixed_ips'][0]['ip_address'] }}</li>
                            </ul>
                        </td>
                        <td>{{ $item['ip_allocation'] }}</td>
                        <td>{{ $item['created_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <h2>LIST INSTANCES  #{{ count($servers) }}</h2>
        <table class="table">
            <thead>
                <tr>
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
                @foreach ($servers as $item)
                    <tr>
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
                            <a type="button" class="btn btn-primary" href="{{ route('server.show',$item['id']) }}">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
