<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Karnataka Police</title>

    <link rel="stylesheet" href="{{ url('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/base/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="shortcut icon" href="{{ url('images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div class="container-fluid">
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                        <ul class="navbar-nav navbar-nav-left">

                            {{-- <li class="nav-item ms-0 me-5 d-lg-flex d-none">
                                <a href="#" class="nav-link horizontal-nav-left-menu"><i
                                        class="mdi mdi-format-list-bulleted"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                                    id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                                    <i class="mdi mdi-bell mx-0"></i>
                                    <span class="count bg-success">2</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="notificationDropdown">
                                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-success">
                                                <i class="mdi mdi-information mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                Just now
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-warning">
                                                <i class="mdi mdi-settings mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">Settings</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                Private message
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-info">
                                                <i class="mdi mdi-account-box mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                            <p class="font-weight-light small-text mb-0 text-muted">
                                                2 days ago
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                                    id="messageDropdown" href="#" data-bs-toggle="dropdown">
                                    <i class="mdi mdi-email mx-0"></i>
                                    <span class="count bg-primary">4</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="messageDropdown">
                                    <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="{{ url('images/faces/face4.jpg') }}" alt="image"
                                                class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                            </h6>
                                            <p class="font-weight-light small-text text-muted mb-0">
                                                The meeting is cancelled
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="{{ url('images/faces/face2.jpg') }}" alt="image"
                                                class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                            </h6>
                                            <p class="font-weight-light small-text text-muted mb-0">
                                                New product launch
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="{{ url('images/faces/face3.jpg') }}" alt="image"
                                                class="profile-pic">
                                        </div>
                                        <div class="preview-item-content flex-grow">
                                            <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                            </h6>
                                            <p class="font-weight-light small-text text-muted mb-0">
                                                Upcoming board meeting
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </li> --}}


                            {{-- Srarch view --}}

                            {{-- <li class="nav-item nav-search d-none d-lg-block ms-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="search">
                                            <i class="mdi mdi-magnify"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="search" aria-label="search"
                                        aria-describedby="search">
                                </div>
                            </li> --}}

                        </ul>
                        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                            {{-- <a class="navbar-brand brand-logo" href="{{ url('/acpdashboard') }}"><img
                                    src="{{ url('images/ksp.jpg') }}" alt="logo" /> </a> --}}


                            @if (session()->get('position') === 'ACP')
                                <a class="navbar-brand brand-logo" href="{{ url('/acpdashboard') }}"><img
                                        src="{{ url('images/ksp.jpg') }}" alt="logo" style="width: 60px; height: 60px;"/> </a>
                                        
                            @elseif(session()->get('position') === 'Dy.Sp' || session()->get('position') === 'WDy.Sp')
                                <a class="navbar-brand brand-logo" href="{{ url('/dyspdash') }}"><img
                                        src="{{ url('images/ksp.jpg') }}" alt="logo" style="width: 60px; height: 60px;"/> </a>

                            @elseif(session()->get('position') === 'PI' || session()->get('position') === 'WPI')
                                <a class="navbar-brand brand-logo" href="{{ url('/pidash') }}"><img
                                        src="{{ url('images/ksp.jpg') }}" alt="logo" style="width: 60px; height: 60px;"/> </a>

                            @elseif(session()->get('position') === 'PSI' || session()->get('position') === 'WPSI')
                                <a class="navbar-brand brand-logo" href="{{ url('/psidash') }}"><img
                                        src="{{ url('images/ksp.jpg') }}" alt="logo" style="width: 60px; height: 60px;"  /> </a>

                            @elseif(session()->get('position') === 'ASI'|| session()->get('position') == 'WASI' || session()->get('position') == 'HC' || session()->get('position') == 'WHC' || session()->get('position') == 'PC' || session()->get('position') == 'WPC')
                                <a class="navbar-brand brand-logo" href="{{ url('/asidash   ') }}"><img
                                        src="{{ url('images/ksp.jpg') }}" alt="logo" style="width: 60px; height: 60px;" /> </a>
                            @endif






                        </div>
                        <ul class="navbar-nav navbar-nav-right">
                            {{-- <li class="nav-item dropdown  d-lg-flex d-none">
                                <button type="button" class="btn btn-inverse-primary btn-sm">Missing Person </button>
                            </li>

                            <li class="nav-item dropdown  d-lg-flex d-none">
                                <button type="button" class="btn btn-inverse-primary btn-sm">Todo List </button>
                            </li>

                            <li class="nav-item dropdown d-lg-flex d-none">
                                <button type="button" class="btn btn-inverse-primary btn-sm">News</button>
                            </li> --}}

                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    id="profileDropdown">
                                    <span class="nav-profile-name">
                                        @php
                                            $ioName = session()->get('IOName');
                                        @endphp

                                        @if (is_object($ioName) && property_exists($ioName, 'IOName'))
                                            {{ $ioName->IOName }}
                                        @else
                                            {{-- Handle the case where $ioName is not an object with an 'IOName' property --}}
                                            {{-- Error: IOName is not an object with an 'IOName' property --}}
                                        @endif





                                    </span>
                                    <span class="online-status"></span>
                                    {{-- <img src="images/faces/face28.png" alt="profile" /> --}}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                    aria-labelledby="profileDropdown">
                                    {{-- <a class="dropdown-item">
                                        <i class="mdi mdi-settings text-primary"></i>
                                        Settings
                                    </a> --}}
                                    <a class="dropdown-item"  href="{{ route('logout') }}">
                                        <i class="mdi mdi-logout text-primary"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-toggle="horizontal-menu-toggle">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </div>
            </nav>

            {{-- <nav class="bottom-navbar">
                <div class="container">
                    <ul class="nav page-navigation">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/acpdashboard') }}">
                                <i class="mdi mdi-file-document-box menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ url('/adminhistory') }}" class="nav-link">
                                <i class="mdi mdi-cube-outline menu-icon"></i>
                                <span class="menu-title">History</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="mdi mdi-chart-areaspline menu-icon"></i>
                                <span class="menu-title">Task Mannegement</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="submenu">
                                <ul>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ url('/allotedtask') }}">Alloted Task</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ url('/taskallotement') }}">Allotement Task</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/add') }}" class="nav-link">
                                <i class="mdi mdi-plus"></i>
                                <span class="menu-title">Add</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/stationmannegement') }}" class="nav-link">
                                <i class="mdi mdi-grid menu-icon"></i>
                                <span class="menu-title">Station Mannagement</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/eservice') }}" class="nav-link">
                                <i class="mdi mdi-emoticon menu-icon"></i>
                                <span class="menu-title">E-Service</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/report') }}" class="nav-link">
                                <i class="mdi mdi-codepen menu-icon"></i>
                                <span class="menu-title">Reports</span>
                                <i class="menu-arrow"></i>
                            </a>

                        </li>

                    </ul>
                </div>
            </nav> --}}

        </div>
