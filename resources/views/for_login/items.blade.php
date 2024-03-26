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
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
  <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
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
              <img src="../assets/images/inventory-text.png" alt="homepage" class="light-logo" width="150" />
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
                <span class="d-none d-md-block" >Create New &nbsp<i class="fa fa-angle-down"></i></span>
                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addItemModal" style="cursor: pointer;">Add Item</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addCategoryModal" style="cursor: pointer;">Add Category</a></li>
                <li>
              </ul>
            </li>
            <!-- <li class="nav-item search-box">
              <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i
                  class="mdi mdi-magnify fs-4"></i></a>
              <form class="app-search position-absolute">
                <input type="text" class="form-control" placeholder="Search &amp; enter" />
                <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
              </form>
            </li> -->
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
              <div class="dropdown-divider">
              </div>
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
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Item List</h4> &nbsp &nbsp &nbsp
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Products</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                All Products
              </li>
            </ol>
            <div class="ms-auto text-end">
              <nav aria-label="breadcrumb">
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                data-bs-target="#filterModal" style="border-radius: 5px; height: 30px; width: auto; font-size: 13px; font-weight: bold;"><i class="fas fa-filter" style="padding-right: 5px;"></i>Filter</button>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>
                          <label class="customcheckbox mb-3">
                            <input type="checkbox" id="mainCheckbox" />
                            <span class="checkmark"></span>
                          </label>
                        </th>
                        <th>Model Name</th>
                        <th>Category</th>
                        <th>Department Assigned</th>
                        <th>Expected Quantity</th>
                        <th>Actual Quantity</th>
                        <th>Date Arrival</th>
                        <th>Date Checked</th>
                        <th>Serial Number</th>
                        <th style="text-align: center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>
                          <label class="customcheckbox">
                            <input type="checkbox" class="listCheckbox" />
                            <span class="checkmark"></span>
                          </label>
                        </th>
                        <td>Mouse</td>
                        <td>Sample Category</td>
                        <td>Sample Department</td>
                        <td>100</td>
                        <td>50</td>
                        <td>January 1, 2024</td>
                        <td>January 2, 2024</td>
                        <td>20-00077</td>
                        <td style="text-align: center;">
                          <button type="button" class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop" style="border-radius: 3px;"><i class="fas fa-edit"
                              style="color:white"></i></button>
                          <button type="button" class="btn btn-danger btn-sm text-white" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" style="border-radius: 3px;"><i class="fas fa-trash"
                              style="color:white"></i></button>
                        </td>

                      </tr>

                      <tr>
                        <th>
                          <label class="customcheckbox">
                            <input type="checkbox" class="listCheckbox" />
                            <span class="checkmark"></span>
                          </label>
                        </th>
                        <td>System Unit</td>
                        <td>Sample Category</td>
                        <td>Sample Department</td>
                        <td>100</td>
                        <td>10</td>
                        <td>January 12, 2024</td>
                        <td>January 23, 2024</td>
                        <td>20-00066</td>
                        <td style="text-align: center;">
                          <button type="button" class="btn btn-secondary btn-sm text-white" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop" style="border-radius: 3px;"><i class="fas fa-edit"
                              style="color:white"></i></button>
                          <button type="button" class="btn btn-danger btn-sm text-white" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" style="border-radius: 3px;"><i class="fas fa-trash"
                              style="color:white"></i></button>
                        </td>
                      </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer text-center">
        Inventory System Developed by John Paul, Norman, Exceil, Dazel.
      </footer>

      <!-- ADD ITEM MODAL-->
      <div class="modal fade" id="addItemModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Item</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal">
                <div class="card-body">
                  <h4 class="card-title">Item Info</h4>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Model Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="model_name" placeholder="Model Name Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Category</label>
                    <div class="col-sm-9">
                      <!-- <input type="text" class="form-control" name="category" placeholder="Category Here"/> -->
                      <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>Category Here</option>
                          <option value="1">Category 1</option>
                          <option value="2">Category 2</option>
                          <option value="3">Category 3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Department Assigned</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="department_assigned"
                        placeholder="Department Assigned Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Expected Quantity</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="expected_quantity"
                        placeholder="Expected Quantity Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Actual Quantity</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="actual_quantity"
                        placeholder="Actual Quantity Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Date Arrival</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="date_arrival" placeholder="Date Arrival Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Date Checked</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="date_checked" placeholder="Date Checked Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Serial Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="serial_number" placeholder="Serial Number Here" />
                    </div>
                  </div>

                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary"><a href="" style="color: white;">Add</a></button>
            </div>
          </div>
        </div>
      </div>

       <!-- ADD CATEGORY MODAL-->

       <div class="modal fade" id="addCategoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="t">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Category</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic error obcaecati explicabo, unde ipsum saepe voluptatibus tenetur, reprehenderit nobis earum voluptates illo, nulla quas sed! Necessitatibus illum nemo deserunt molestiae?</p>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Reset to Default</button>
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
            </div>
          </div>
        </div>
      </div>

      <!-- POP UP EDITOR -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Product</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal">
                <div class="card-body">
                  <h4 class="card-title">Product Info</h4>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Model Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="model_name" placeholder="Model Name Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Category</label>
                    <div class="col-sm-9">
                      <!-- <input type="text" class="form-control" name="category" placeholder="Category Here"/> -->
                      <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>Category Here</option>
                          <option value="1">Category 1</option>
                          <option value="2">Category 2</option>
                          <option value="3">Category 3</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Department Assigned</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="department_assigned"
                        placeholder="Department Assigned Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Expected Quantity</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="expected_quantity"
                        placeholder="Expected Quantity Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Actual Quantity</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="actual_quantity"
                        placeholder="Actual Quantity Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Date Arrival</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="date_arrival" placeholder="Date Arrival Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Date Checked</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" name="date_checked" placeholder="Date Checked Here" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-end control-label col-form-label">Serial Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="serial_number" placeholder="Serial Number Here" />
                    </div>
                  </div>

                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary"><a href="" style="color: white;">Update</a></button>
            </div>
          </div>
        </div>
      </div>

      <!-- DELETE BUTTON MODAL -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Are you sure do you want to delete this item?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary"><a href="" style="color: white;">Confirm</a></button>
            </div>
          </div>
        </div>
      </div>

      <!--FILTER MODAL-->

      <div class="modal fade" id="filterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="t">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Filter Options</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Model Name</label>
                <div class="col-sm-9">
                  <!-- <input type="text" class="form-control" name="category" placeholder="Category Here"/> -->
                  <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Model Name Here</option>
                      <option value="1">Category 1</option>
                      <option value="2">Category 2</option>
                      <option value="3">Category 3</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Category</label>
                <div class="col-sm-9">
                  <!-- <input type="text" class="form-control" name="category" placeholder="Category Here"/> -->
                  <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Category Here</option>
                      <option value="1">Category 1</option>
                      <option value="2">Category 2</option>
                      <option value="3">Category 3</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Department</label>
                <div class="col-sm-9">
                  <!-- <input type="text" class="form-control" name="category" placeholder="Category Here"/> -->
                  <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Department Here</option>
                      <option value="1">Category 1</option>
                      <option value="2">Category 2</option>
                      <option value="3">Category 3</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Date Arrival</label>
                <div class="col-sm-9">
                  <!-- <input type="text" class="form-control" name="category" placeholder="Category Here"/> -->
                  <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Date Arrival Here</option>
                      <option value="1">Category 1</option>
                      <option value="2">Category 2</option>
                      <option value="3">Category 3</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Date Checked</label>
                <div class="col-sm-9">
                  <!-- <input type="text" class="form-control" name="category" placeholder="Category Here"/> -->
                  <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Date Checked Here</option>
                      <option value="1">Category 1</option>
                      <option value="2">Category 2</option>
                      <option value="3">Category 3</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Reset to Default</button>
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Apply Filter</button>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
  <!--Wave Effects -->
  <script src="../dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="../dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="../dist/js/custom.min.js"></script>
  <!-- this page js -->
  <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
  <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
  <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
  <script>
    $("#zero_config").DataTable();

    const Modal = document.getElementById('exampleModal');
    const myModal = document.getElementById('staticBackdrop')
    const myInput = document.getElementById('input')

    myModal.addEventListener('shown.bs.modal', () => {
      myInput.focus()
    });
  </script>
</body>

</html>