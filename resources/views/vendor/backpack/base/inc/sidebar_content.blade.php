<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<a class="nav-link" href="#">Main Menu</a>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="nav-icon la la-home"></i>{{ trans('backpack::base.dashboard') }}</a></li>
@if (backpack_user()->can(config('permission.admin')) || backpack_user()->can(config('permission.demo')))
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'>
<i class="nav-icon las la-folder"></i>Categories</a></li>   
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('layanan') }}'><i class='nav-icon la la-bars'></i> Layanans</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('article') }}'>
       <i class="nav-icon las la-newspaper"></i>Articles</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'>
                <i class="nav-icon las la-radiation-alt"></i>Settings</a></li>
@endif
@if (backpack_user()->can(config('permission.profile')) || backpack_user()->can(config('permission.admin')) || backpack_user()->can(config('permission.demo')))
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('profile') }}'>
                <i class="nav-icon las la-portrait"></i>Profiles</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('tag') }}'>
                <i class="nav-icon las la-tags"></i>Tags</a></li>
@endif
<!-- Super Admin -->
@if (backpack_user()->id === 1 || backpack_user()->can(config('permission.demo')))
<!-- Users, Roles, Permissions -->
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
                <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
</li>
@if (backpack_user()->id === 1)
@endif
@endif
