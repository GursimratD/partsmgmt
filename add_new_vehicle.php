<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add New Vehicle</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               
                <div class="sidebar-brand-text mx-3">Parts Department</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="add_new_vehicle.php">
                    <span>Add New Vehicle</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
           <li class="nav-item">
                <a class="nav-link collapsed" href="add_new_parts.php">
                    <span>Add New Parts</span>
                </a>
            </li>

           <li class="nav-item">
                <a class="nav-link collapsed" href="update_vehicle_info.html">
                    <span>Update Vehicle Information</span>
                </a>
            </li>
    <li class="nav-item">
                <a class="nav-link collapsed" href="update_parts_info.html">
                    <span>Update Parts Information</span>
                </a>
            </li>
              <li class="nav-item">
                <a class="nav-link collapsed" href="retrieve_record.php">
                    <span>Retrieve Record</span>
                </a>
            </li>
   </li>
              <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <span>Completed Cars</span>
                </a>
            </li>
  <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <span>Pending Parts</span>
                </a>
            </li>
              <li class="nav-item">
                <a class="nav-link collapsed" href="all_invoices.php">
                    <span>All Invoices</span>
                </a>
            </li>
              <li class="nav-item">
                <a class="nav-link collapsed" href="returns.html">
                    <span>Upload Return/All Returns</span>
                </a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
           
            <!-- Nav Item - Charts -->
          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                           Add New Vehicle
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

           

                     

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Gus</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
<div class="container">
  <form action="insert_new_vehicle.php">
     <div class="form-group mb-3">
    <div class="row">
       <div class="col-sm-4">
    <div class="form-group">
      <label for="indate">In Date :</label>
      <input type="date" class="form-control" name="In_Date" id="indate">
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label for="outdate">Out Date :</label>
      <input type="date" class="form-control" name="Out_Date" id="outdate">
    </div>
  </div>
<div class="col-sm-4">
    <div class="form-group">
      <label for="license">License :</label>
      <input type="text" class="form-control" name="License_Plate" id="license" required>
    </div>
  </div>
    </div>
    <div class="row">
    
  <div class="col-sm-4">
    <div class="form-group">
      <label for="vin">VIN:</label>
      <input type="text" class="form-control" name="VIN" id="vin" required>
    </div>
  </div>
   <div class="col-sm-4">
    <div class="form-group">
      <label for="carname">Car Name:</label>
      <input type="text" class="form-control" name="Car_Name" id="carname" required>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label for="customername">Customer Name :</label>
      <input type="text" class="form-control" name="Customer_Name" id="customername" required>
    </div>
  </div>
  </div>
  <div class="row">
    
  <div class="col-sm-4">
    <div class="form-group">
      <label for="insurance">Insurance:</label>
      <select class="form-control" name="Insurance" id="insurance" required>
        <option>Intact</option>
        <option>Certas</option>
        <option>Personal</option>
        <option>Security</option>
        <option>Economical</option>
        <option>Primmum</option>
        <option>Co-operators</option>
        <option>Private</option>
      </select>
    </div>
  </div>
   <div class="col-sm-4">
    <div class="form-group">
      <label for="claimnumber">Claim Number:</label>
      <input type="text" class="form-control" name="Claim_Number" id="claimnumber">
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label for="allpartshere">All Parts Here :</label>
      <input type="text" class="form-control" name="All_Parts_Here" id="allpartshere">
</div>
    </div>
  </div>

      
    <div class="row">
<div class="col-sm-10">
    <div class="form-group">
      <label for="usr"></label>
      <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
    </div>


</div>
                <!-- /.container-fluid -->
</form>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           
            <!-- End of Footer -->


    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>