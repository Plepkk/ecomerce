<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
</button>

<a class="navbar-brand" href="#">
    <img class="navbar-brand-full" src="{{ asset('images/logo.png') }}" width="114" height="35" alt="OCPB Logo">
    <img class="navbar-brand-minimized" src="{{ asset('images/logo-s.png') }}" width="35" height="35" alt="OCPB Logo">
</a>

<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
    <span class="navbar-toggler-icon"></span>
</button>

{{-- <ul class="nav navbar-nav d-md-down-none">
    <li class="nav-item px-3">
        <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
    </li>
    <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
    </li>
</ul> --}}

<h4 class="d-md-down-none pl-4">ระบบอิเล็กทรอนิกส์เพื่อบริหารยุทธศาสตร์การคุ้มครองผู้บริโภค</h4>

<ul class="nav navbar-nav ml-auto">
    {{-- @include('admin.layouts.notification')
    @include('admin.layouts.task')
    @include('admin.layouts.message') --}}
    @include('admin.layouts.user')
</ul>

{{-- <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
    <span class="navbar-toggler-icon"></span>
</button> --}}

{{-- <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
    <span class="navbar-toggler-icon"></span>
</button> --}}
