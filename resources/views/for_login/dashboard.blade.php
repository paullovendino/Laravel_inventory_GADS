<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description"
    content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Inventory System</title>
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
  <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
  <link href="../dist/css/style.min.css" rel="stylesheet" />
</head>

<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>

  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
          <a class="navbar-brand" href="index.html">
            <b class="logo-icon ps-2">
              <img src="../assets/images/inventory-icon.png" alt="homepage" class="light-logo" width="40" />
            </b>
            <span class="logo-text ms-2">
              <!-- dark Logo text -->
              <img src="../assets/images/inventory-text.png" alt="homepage" class="light-logo" width="150"/>
            </span>
          </a>
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
              class="ti-menu ti-close"></i></a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

          <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span class="d-none d-md-block">Create New &nbsp<i class="fa fa-angle-down"></i></span>
                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Add Item</a></li>
                <li><a class="dropdown-item" href="#">Add Category</a></li>
              </ul>
            </li>
          </ul>
          <li class="nav-item dropdown">
            <a class="
                  nav-link
                  dropdown-toggle
                  text-muted
                  waves-effect waves-dark
                  pro-pic
                " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-account me-1 ms-1"></i> My
                Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-settings me-1 ms-1"></i> Account
                Setting</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
              <div class="dropdown-divider"></div>
            </ul>
          </li>
          </ul>
        </div>
      </nav>
    </header>
    
    <aside class="left-sidebar" data-sidebarbg="skin5">
      <div class="scroll-sidebar">
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('adminInventoryDashboard') }}" aria-expanded="false"><i
                  class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                  
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Products</span></a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="{{ route( 'adminInventoryItems') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span
                      class="hide-menu"> All Products </span></a>
                </li>
                <!-- CATEGORIES HERE -->
                <li class="sidebar-item">
                  <a href="{{ route( 'adminInventoryCategory') }}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">
                      Add Category Name Here </span></a>
                </li>

              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Authentication
                </span></a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="authentication-login.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span
                      class="hide-menu"> Login </span></a>
                </li>
                <li class="sidebar-item">
                  <a href="authentication-register.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span
                      class="hide-menu"> Register </span></a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    

    <div class="page-wrapper">

      <footer class="footer text-center">
        Inventory System Developed by John Paul, Norman, Exceil, Dazel.
      </footer>
    </div>

  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
  <!--Wave Effects -->
  <script src="../dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../dist/js/custom.min.js"></script>
  <!--This page JavaScript -->
  <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
  <!-- Charts js Files -->
  <script src="../assets/libs/flot/excanvas.js"></script>
  <script src="../assets/libs/flot/jquery.flot.js"></script>
  <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
  <script src="../assets/libs/flot/jquery.flot.time.js"></script>
  <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
  <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
  <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
  <script src="../dist/js/pages/chart/chart-page-init.js"></script>
</body>

</html>