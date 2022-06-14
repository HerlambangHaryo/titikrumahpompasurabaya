<ul class="nav">
    <li class="nav-header">Navigation</li>

    <li class="@if($title == 'Dashboard') active @endif">
        <a href="{{ route('Dashboard.index') }}">
            <i class="ion-ios-analytics bg-gradient-blue"></i> 
            <span>Dashboard</span> 
        </a>
    </li>

    <li class="@if($title == 'Rumahpompa') active @endif">
        <a href="{{ route('Rumahpompa.index') }}">
            <i class="ion-ios-paper bg-grey-darker"></i> 
            <span>Rumah Pompa</span> 
        </a>
    </li>

    <!-- begin sidebar minify button -->
    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-back"></i> <span>Collapse</span></a></li>
    <!-- end sidebar minify button -->
</ul>