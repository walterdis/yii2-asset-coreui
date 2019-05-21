<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="#">
    <img class="navbar-brand-full" src="img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
    <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
</a>
<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
    <span class="navbar-toggler-icon"></span>
</button>
<!-- left navigation
<ul class="nav navbar-nav d-md-down-none">
    <li class="nav-item px-3">
        <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
    </li>
    <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
    </li>
</ul>
-->
<ul class="nav navbar-nav ml-auto">
    <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#" data-toggle="dropdown">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">5</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
            <div class="dropdown-header text-center">
                <strong>You have 5 notifications</strong>
            </div>
            <a class="dropdown-item" href="#">
                <i class="icon-user-follow text-success"></i> New user registered</a>
            <a class="dropdown-item" href="#">
                <i class="icon-user-unfollow text-danger"></i> User deleted</a>
        </div>
    </li>
    <!-- icones tipo bell e etc
    <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
            <i class="icon-list"></i>
        </a>
    </li>
    <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">
            <i class="icon-location-pin"></i>
        </a>
    </li>
    -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="https://placekitten.com/g/200/300" alt="admin@bootstrapmaster.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
                <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
                <i class="fa fa-bell-o"></i> Updates
                <span class="badge badge-info">42</span>
            </a>
            <a class="dropdown-item" href="#">
                <i class="fa fa-envelope-o"></i> Messages
                <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="#">
                <i class="fa fa-tasks"></i> Tasks
                <span class="badge badge-danger">42</span>
            </a>

            <div class="dropdown-header text-center">
                <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#">
                <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#">
                <i class="fa fa-wrench"></i> Settings</a>
        </div>
    </li>
</ul>
<button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
    <span class="navbar-toggler-icon"></span>
</button>
<button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
    <span class="navbar-toggler-icon"></span>
</button>