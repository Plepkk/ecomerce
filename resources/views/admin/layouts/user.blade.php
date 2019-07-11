<li class="nav-item dropdown">
    <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img class="img-avatar" src="{{ asset('images/user.png') }}" alt="{{ Auth::user()->name }}">
    </a>
    
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <div class="dropdown-header text-center">
            <i class="fa fa-user-circle-o"></i> <strong>{{ Auth::user()->name }}</strong>
        </div>
        <a class="dropdown-item" href="{{ route('admin.profile.index') }}">
            <i class="fa fa-user"></i> {{ __('Profile') }}
        </a>
        <a class="dropdown-item" href="javascript:void(0);" onclick="event.preventDefault(); logout();">
            <i class="fa fa-lock"></i> {{ __('Logout') }}
        </a>
    </div>
</li>

<form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
    @csrf
</form>