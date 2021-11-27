<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="nav-title"><span>Monitoring</span></li>
        <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="{{ route('home') }}"><i class="fa fa-pie-chart"></i> Overview</a>
        </li>
        <li class="{{ Request::is('network') ? 'active' : '' }}">
            <a href="{{ route('network') }}"><i class="fa fa-wifi"></i> Network</a>
        </li>
        <li class="{{ Request::is('storage') ? 'active' : '' }}">
            <a href="{{ route('storage') }}"><i class="fa fa-hdd-o"></i> Storage</a>
        </li>
        <li class="{{ Request::is('instance') || Request::is('instance/*') ? 'active' : '' }}">
            <a href="{{ route('instance') }}"><i class="fa fa-server"></i> Compute</a>
        </li>
        <li class="{{ Request::is('image') ? 'active' : '' }}">
            <a href="{{ route('image') }}"><i class="fa fa-file-archive-o"></i> Images</a>
        </li>
        <li class="{{ Request::is('alarm') ||  Request::is('notification') ? 'active' : '' }}">
            <a href="#" data-toggle="collapse" data-target="#problem"><i class="fa fa-exclamation-triangle"></i> Problems <i class="fa fa-fw fa-angle-down pull-right"></i></a>
            <ul id="problem" class="collapse">
                <li><a href="{{ route('alarm') }}"><i class="fa fa-angle-double-right"></i> Alarms</a></li>
                <li><a href="{{ route('notification') }}"><i class="fa fa-angle-double-right"></i> Notifications</a></li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->