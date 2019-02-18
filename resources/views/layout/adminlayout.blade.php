<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href={{asset('css/admin.dashboard/demo.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('css/admin.dashboard/bootstrap.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('css/admin.dashboard/light-bootstrap-dashboard.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('css/admin.dashboard/demo.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('css/all.css')}}>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="/images/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Giveapp
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin/dashboard">
                            <i class="fas fa-chart-line"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/admin/about">
                            <i class="fas fa-info"></i>
                            <p>About the System</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/admin/addadmin">
                            <i class="fas fa-users"></i>
                            <p>Administrator</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/admin/adminlist">
                            <i class="fas fa-list-ul"></i>
                            <p>Admin List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/admin/item">
                            <i class="fas fa-thumbtack"></i>
                            <p>Item Pending List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./maps.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button class="navbar-toggler navbar-toggler-right toggled" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/Giveapp-Admin.com">
                                    <span class="no-icon">
                                   Log out  <i class="fas fa-sign-out-alt"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            @yield('content')
            @yield('modal')
            
            <footer class="footer">
                <div class="container">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Giveapp</a>, Understanding Humanity
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src={{URL::asset('js/admin.dashboard/core/jquery.3.2.1.min.js')}}></script>
<script src={{URL::asset('js/admin.dashboard/core/popper.min.js')}}></script>
<script src={{URL::asset('js/admin.dashboard/core/bootstrap.min.js')}}></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src={{URL::asset('js/admin.dashboard/plugins/bootstrap-switch.js')}}></script>
<!--  Chartist Plugin  -->
<script src={{URL::asset('js/admin.dashboard/plugins/chartist.min.js')}}></script>
<!--  Notifications Plugin    -->
<script src={{URL::asset('js/admin.dashboard/plugins/bootstrap-notify.js')}}></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src={{URL::asset('js/admin.dashboard/light-bootstrap-dashboard.js')}}></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src={{URL::asset('js/admin.dashboard/demo.js')}}></script>
<script src={{URL::asset('js/admin.dashboard/plugins/nouislider.min.js')}}></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>