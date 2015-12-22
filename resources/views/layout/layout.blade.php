<!DOCTYPE html>
<html>
<head>
    <title>Luffy - @yield('title')</title>

    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/main.css') }}">
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topNavBar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <i class="fa fa-home fa-fw fa-large"></i>
                Luffy
            </a>
        </div>

        <div class="navbar-collapse collapse" id="topNavBar">

            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Content<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li class="dropdown-header">Users</li>
                        <li>
                            <a href="{{ route('content.users.index') }}">
                                <span class="fa fa-users fa-fw"></span> User List
                            </a>
                        </li>

                        <li class="dropdown-header">Stories</li>
                        <li>
                            <a href="{{ route('content.stories.index') }}">
                                <span class="fa fa-book fa-fw"></span> Story List
                            </a>
                        </li>

                        <li class="dropdown-header">Self Stories</li>
                        <li>
                            <a href="{{ route('content.self_stories.index') }}">
                                <span class="fa fa-book fa-fw"></span> Self Story List
                            </a>
                        </li>

                        <li class="dropdown-header">Posts</li>
                        <li>
                            <a href="{{ route('content.posts.index') }}">
                                <span class="fa fa-list fa-fw"></span> Post List
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">App Operation <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li class="dropdown-header">Images</li>
                        <li>
                            <a href="/app_operation/launch_image">
                                <span class="sidebar-nav-item-icon fa fa-list fa-fw"></span> Launch Image
                            </a>
                        </li>

                        <li>
                            <a href="/app_operation/banner">
                                <span class="sidebar-nav-item-icon fa fa-list fa-fw"></span> Banner
                            </a>
                        </li>
                        <li class="dropdown-header">Events</li>
                        <li>
                            <a href="/app_operation/events">
                                <span class="sidebar-nav-item-icon fa fa-list fa-fw"></span> Events
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Push <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('registered_users') }}">
                                <span class="fa fa-list fw"></span> Registered Users
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('push.jobs.index') }}">
                                <span class="sidebar-nav-item-icon fa fa-clock-o fa-fw"></span> Rules
                            </a>
                        </li>
                    </ul>

                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Operation Data <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="/operation_data/new_users">
                                <span class="sidebar-nav-item-icon fa fa-image fa-fw"></span> New Users
                            </a>
                        </li>
                        <li>
                            <a href="/operation_data/active_users">
                                <span class="sidebar-nav-item-icon fa fa-home fa-fw"></span> Active Users
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="hidden">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li class="dropdown-header hidden">Robot System</li>
                        <li class="hidden">
                            <a href="#">
                                <span class="sidebar-nav-item-icon fa fa-comments-o fa-fw"></span> Comments
                            </a>
                        </li>

                        <li class="dropdown-header hidden">Banners</li>
                        <li class="hidden">
                            <a href="#">
                                <span class="sidebar-nav-item-icon fa fa-image fa-fw"></span> Start Image
                            </a>
                        </li>

                    </ul>
                </li>

                {{--<% if session[:current_admin_id] and session[:is_super_admin] %>--}}
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Privileges <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="/admins">
                                <span class="sidebar-nav-item-icon fa fa-users fa-fw"></span> Administrators
                            </a>
                        </li>

                        <li>
                            <a href="<%= logs_path(grid: {f: {created_at: {fr: (Time.current - 1.day).to_date}}}) %>">
                                <span class="sidebar-nav-item-icon fa fa-pencil fa-fw"></span> Logs
                            </a>
                        </li>
                    </ul>
                </li>
                {{--<% end %>--}}

            </ul>

            <ul class="nav navbar-nav navbar-right">
                {{--<% if session[:current_admin_id] %>--}}
                {{--<li class="dropdown">--}}
                {{--<a id="admininfo" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">--}}
                {{--Welcome, <%= session[:current_admin_username] %>--}}
                {{--<b class="caret"></b>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu" role="menu" aria-labelledby="admininfo">--}}
                {{--<li role="presentation">--}}
                {{--<%= link_to "Change password", password_admin_path(session[:current_admin_id]), role: "menuitem", tabindex: "-1" %>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href="/logout">Logout</a></li>--}}

                {{--<% else %>--}}
                {{--<li><a href="/login">Login</a></li>--}}
                {{--<% end %>--}}
            </ul>

        </div>
    </div>
</div>

<div class="container">
    @yield('content')
</div>


<script src="{{ elixir('js/all.js') }}"></script>

@yield('js')

</body>
</html>
