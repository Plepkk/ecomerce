<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#notification" role="tab">
            <i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#task" role="tab">
            <i class="icon-list"></i><span class="badge badge-pill badge-warning">15</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#message" role="tab">
            <i class="icon-envelope-letter"></i><span class="badge badge-pill badge-info">7</span>
        </a>
    </li>
</ul>

<div class="tab-content">
    @include('admin.layouts.aside-notification')
    @include('admin.layouts.aside-task')
    @include('admin.layouts.aside-message')
</div>