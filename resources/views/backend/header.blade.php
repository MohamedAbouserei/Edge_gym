<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
    <link href="{{ asset('bs-siminta-admin/assets/plugins/bootstrap/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('bs-siminta-admin/assets') }}/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ asset('bs-siminta-admin/assets') }}/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="{{ asset('bs-siminta-admin/assets') }}/css/style.css" rel="stylesheet" />
      <link href="{{ asset('bs-siminta-admin/assets') }}/css/main-style.css" rel="stylesheet" />


</head>

<body>
    <!--  wrapper -->

        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('bs-siminta-admin') }}/assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                       <!--   <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>


                             <!-- Authentication Links -->
                             @guest

                         @else
                             <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                             <i class="fa fa-sign-out fa-fw"></i></a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                        </li>


                         @endguest
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->
<br><br><br>
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="{{ asset('bs-siminta-admin') }}/assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><strong style="font-size:small">{{ Auth::user()->name }}</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    @if (Auth::user()->type ==1)
                    <li class="">
                        <a href="{{ url('/admin/dashboaradmin') }}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li >

                        <a href="{{ url('/admin/news') }}"><i class="fa fa-dashboard fa-fw"></i>
                            News
                        </a>


                    </li>
                    <li role="presentation">

                            <a href="{{ url('/admin/aboutus') }}"><i class="fa fa-dashboard fa-fw"></i>
                                About us
                            </a>

                        </li>
                        <li role="presentation">
                                <a href="{{ url('/admin/product') }}"><i class="fa fa-dashboard fa-fw"></i>
                                    Product
                                </a>
                            </li>
                            <li role="presentation">
                                    <a href="{{ url('/admin/offer') }}"><i class="fa fa-dashboard fa-fw"></i>
                                        Offer
                                    </a>
                                </li>
                                <li role="presentation">
                                        <a href="{{ url('/admin/reservation') }}"><i class="fa fa-dashboard fa-fw"></i>
                                            Reservation
                                        </a>
                                    </li>
                                    <li role="presentation">
                                            <a href="{{ url('/admin/program') }}"><i class="fa fa-dashboard fa-fw"></i>
                                                Program
                                            </a>
                                        </li>
                                        <li role="presentation">
                                                <a href="{{ url('/admin/productpic') }}"><i class="fa fa-dashboard fa-fw"></i>
                                                    Products Pictures
                                                </a>
                                            </li>
                    <li>
                        @else
                        <li class="">
                            <a href="{{ url('/admin/dashboarceo') }}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>
                        <li class="">
                                <a href="{{ url('/admin/dashboaradmin') }}"><i class="fa fa-dashboard fa-fw"></i>Admin Dashboard</a>
                            </li>
                            <li role="presentation">
                                    <a href="{{ url('/admin/user') }}"><i class="fa fa-dashboard fa-fw"></i>
                                        Users
                                    </a>
                                </li>
                            </li>

                       @endif
                </ul>

                <!-- end side-menu -->
            </div>

            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->


        <div class="col-md-2">
        </div>

                <div class=" col-md-10">
                    @yield('content')

            </div>



        <!-- end page-wrapper -->


    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{ asset('bs-siminta-admin') }}/assets/plugins/bootstrap/bootstrap.min.js"></script>

    <script src="{{ asset('bs-siminta-admin') }}/assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{{ asset('bs-siminta-admin') }}/assets/plugins/pace/pace.js"></script>
    <script src="{{ asset('bs-siminta-admin') }}/assets/scripts/siminta.js"></script>
    <link href="{{ asset('bs-siminta-admin') }}/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <script src="{{ asset('bs-siminta-admin') }}/assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="{{ asset('bs-siminta-admin') }}/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
</body>

</html>
