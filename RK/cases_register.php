<?php
//connection command through connection.php
include 'connection.php';

?>
       



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RECORD KEEPER Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!--Fomnt Awesome-->
    <link rel="stylesheet" href="/fontAwesome/css/all.css">
    <!--Bootstrap 5.0-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/">
    <link rel="stylesheet" href="style.css">
    <script src="fontAwesome/js/all.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <div class="sidebar-brand-text mx-1">District & Sessions Court<br>Jamshoro</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Reports
            </div>

            <!--navigation Links-->

            <li class="nav-item">
                <a class="nav-link" href="add_new_case.php">
                    <i class="fa-solid fa-plus"></i>
                    <span>Add New Case</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="search_cases.php">
                    <i class="fa-brands fa-searchengin"></i>
                    <span>Search Cases</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="cases_register.php">
                    <i class="fa-brands fa-searchengin"></i>
                    <span>Cases Register</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fa-brands fa-searchengin"></i>
                    <span>Total Cases</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fa-brands fa-searchengin"></i>
                    <span>Single Case search</span></a>
            </li>





             

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
           

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <!-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -->

           
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
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                       
                           

                       
                           

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            
<!--table with php code to show all data in html table-->
<div class="main-div">
                <h1 class="text-center text-primary">RECORD ROOM REGISTER</h1>
    <div class="constainer-fluid">                
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Record No</th>
                        <th scope="col">Court Name</th>
                        <th scope="col">Case Type</th>
                        <th scope="col">Case No</th>
                        <th scope="col">Case Year</th>
                        <th scope="col">Fir No</th>
                        <th scope="col">Fir Year</th>
                        <th scope="col">Sections</th>
                        <th scope="col">PS</th>
                        <th scope="col">Parties</th>
                        <th scope="col">institution</th>
                        <th scope="col">Disposal</th>
                        <th scope="col">Shelf No</th>
                        <th scope="col">Row No</th>
                        <th scope="col">Bundle / Gathri</th>
                        <th scope="col">Case Status</th>
                        <th scope="col">Remarks</th>
                        <th scope="col" colspan="2">OPERATION</th>
                        </tr>
                    </thead>

                            <tbody>
                                <!--FETCH QUERY-->
                                        <?php $selectquery = "SELECT * FROM shush";

                                        $query = mysqli_query($con,$selectquery);

                                        $num = mysqli_num_rows($query);
                                        //echo $num;
                                        // echo $res[2];
                                        while($res= mysqli_fetch_array($query))
                                        {
                                            
                                            ?>
                                        
                                    
                                        <tr>
                                            <td><?php echo $res['record_no']; ?></td>
                                            <td><?php echo $res['court_name'];?></td>
                                            <td><?php echo $res['case_type']; ?></td>
                                            <td><?php echo $res['case_no'];   ?></td>
                                            <td><?php echo $res['case_year']; ?></td>
                                            <td><?php echo $res['fir_no'];    ?></td>
                                            <td><?php echo $res['fir_year'];  ?></td>
                                            <td><?php echo $res['sections'];    ?></td>
                                            <td><?php echo $res['ps'];  ?></td>
                                            <td><?php echo $res['name_parties'];?></td>
                                            <td><?php echo $res['date_ins'];  ?></td>
                                            <td><?php echo $res['date_disp'];?></td>
                                            <td><?php echo $res['shelf_no'];?></td>
                                            <td><?php echo $res['row_no'];?></td>
                                            <td><?php echo $res['bundle_no'];?></td>
                                            <td><?php echo $res['case_status'];?></td>
                                            <td><?php echo $res['remarks'];?></td>

                                            <td> <a href="edit_case.php?record_no=<?php echo $res['record_no']; ?>" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit"><?php ?><i class="fa-solid fa-pen-to-square"></i></a></td>

                                            <td><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Delet"><?php ?><i class="fa-solid fa-trash-can"></i></a></td>
                                        </tr>
                                            

                                            <?php

                                        }

                                        ?>

                                                                                    
                            </tbody>
                </table>
                   
    </div>
</div>

<!--Pagination----->
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">2</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

        




                                            
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                  

            </div>
          

            

            






            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; District & Sessions Court Jamshoro 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
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
    <script src="/fontAwesome/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>


<!--tooltip postion script-->
<!-- <script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script> -->
</html>