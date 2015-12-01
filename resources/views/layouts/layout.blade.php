<!DOCTYPE html>
<html>
<head>
    <title>Luffy - @yield('title')</title>

    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">App <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li class="dropdown-header">Users</li>
                        <li>
                            <a href="/users">
                                <span class="fa fa-users fa-fw"></span> User List
                            </a>
                        </li>

                        <li class="dropdown-header">Dramas</li>
                        <li>
                            <a href="/dramas">
                                <span class="fa fa-book fa-fw"></span> Drama List
                            </a>
                        </li>

                        <li class="dropdown-header">Topics</li>
                        <li>
                            <a href="/topics">
                                <span class="fa fa-list fa-fw"></span> Topic List
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Audit <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">

                        <li class="dropdown-header">Tasks</li>
                        <li>
                            <a href="/item_tasks">
                                <span class="sidebar-nav-item-icon fa fa-list fa-fw"></span> Item Audit Tasks
                            </a>
                        </li>

                        <li>
                            <a href="/item_operation_rules">
                                <span class="sidebar-nav-item-icon fa fa-list fa-fw"></span> Item Operation Rules
                            </a>
                        </li>
                        <li class="dropdown-header">Smart Audit</li>
                        <li>
                            <a href="/smart_audit/board?t=3">
                                <span class="sidebar-nav-item-icon fa fa-list fa-fw"></span> Smart Audit v3
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">Messages</li>
                        <li class="dropdown-submenu">
                            <a href="#">
                                <span class="sidebar-nav-item-icon fa fa-file-text-o fa-fw"></span> Templates
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/templates/pushes">
                                        <span class="fa fa-list fw"></span> PUSH List
                                    </a>
                                </li>
                                <li>
                                    <a href="/templates/emails">
                                        <span class="fa fa-list fw"></span> Email List
                                    </a>
                                </li>
                                <li>
                                    <a href="/templates/system_messages">
                                        <span class="fa fa-list fw"></span> SystemMessage List
                                    </a>
                                </li>
                                <li>
                                    <a href="/templates/smses">
                                        <span class="fa fa-list fw"></span> SMS List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#">
                                <span class="sidebar-nav-item-icon fa fa-wrench fa-fw"></span> Manual
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Statistics</li>
                                <li>
                                    <a href="/manual/statistics">
                                        <span class="fa fa-list fw"></span> Manual List
                                    </a>
                                </li>
                                <li class="dropdown-header">SystemMessage</li>
                                <li>
                                    <a href="/manual/system_messages/new">
                                        <span class="fa fa-pencil-square-o fw"></span> Compose
                                    </a>
                                </li>
                                <li class="dropdown-header">Email</li>
                                <li>
                                    <a href="/manual/emails/new">
                                        <span class="fa fa-pencil-square-o fw"></span> Compose
                                    </a>
                                </li>
                                <li>
                                    <a href="/manual/emails/good_items">
                                        <span class="fa fa-pencil-square-o fw"></span> Good Items
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden">
                            <a href="#">
                                <span class="sidebar-nav-item-icon fa fa-pencil fa-fw"></span> Logs
                            </a>
                        </li>

                        <li class="dropdown-header">FMMC</li>
                        <li>
                            <a href="/fmmc/crons">
                                <span class="sidebar-nav-item-icon fa fa-clock-o fa-fw"></span> Crontab
                            </a>
                        </li>
                        <li>
                            <a href="/fmmc/tasks">
                                <span class="sidebar-nav-item-icon fa fa-tasks fa-fw"></span> Task
                            </a>
                        </li>
                        <li>
                            <a href="/fmmc/triggers">
                                <span class="sidebar-nav-item-icon fa fa-send fa-fw"></span> Trigger
                            </a>
                        </li>

                    </ul>

                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="/tools/items">
                                <span class="sidebar-nav-item-icon fa fa-list fa-fw"></span> Items By Position
                            </a>
                        </li>
                        <li>
                            <a href="/tools/start_image/edit">
                                <span class="sidebar-nav-item-icon fa fa-image fa-fw"></span> Start Image
                            </a>
                        </li>
                        <li>
                            <a href="/tools/home_banner/edit">
                                <span class="sidebar-nav-item-icon fa fa-home fa-fw"></span> Home Banner
                            </a>
                        </li>
                        <li>
                            <a href="/tools/recommend_items/new">
                                <span class="sidebar-nav-item-icon fa fa-comment-o fa-fw"></span> Recommend Items
                            </a>
                        </li>
                        <li>
                            <a href="/es">
                                <span class="sidebar-nav-item-icon fa fa-comment-o fa-fw"></span> es List
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Privileges <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="/admins">
                                <span class="sidebar-nav-item-icon fa fa-users fa-fw"></span> Administrators
                            </a>
                        </li>
                        <li>
                            <a href="/smart_audit/operators">
                                <span class="sidebar-nav-item-icon fa fa-list fa-fw"></span> Checked In Users
                            </a>
                        </li>
                        <li>
                            <a href="/admins/item_risk_keywords">
                                <span class="sidebar-nav-item-icon fa fa-list fa-fw"></span> Item Risk Keywords
                            </a>
                        </li>

                        <li>
                            <a href="/admins/white_list">
                                <span class="sidebar-nav-item-icon fa fa-list fa-fw"></span> White List
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
</body>
</html>
