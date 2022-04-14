<?php
//connection command through connection.php
include 'connection.php'; 

$ids = $_GET['record_no'];
$showquery = "SELECT * FROM shush WHERE record_no={$ids}";
$showdata = mysqli_query($con,$showquery);
$result = mysqli_fetch_array($showdata);

if(isset($_POST['edit'])) // CRIMINAL FORM PHP CODE

{

    if
        (
// check to see if feild is not empty

         !empty($_POST['court_name'])
      && !empty($_POST['case_type'])
      && !empty($_POST['case_no'])
      && !empty($_POST['case_year'])
      && !empty($_POST['fir_no'])
      && !empty($_POST['fir_year'])
      && !empty($_POST['name_parties'])
      && !empty($_POST['date_ins'])
      && !empty($_POST['date_disp'])
      && !empty($_POST['shelf_no'])
      && !empty($_POST['row_no'])
      && !empty($_POST['bundle_no'])     
      && !empty($_POST['case_status'])
      && !empty($_POST['remarks'])


        )

    {
//variable declaration as tables created in db

    $court_name = $_POST['court_name'];
    $case_type = $_POST['case_type'];
    $case_no = $_POST['case_no'];
    $case_year = $_POST['case_year'];
    $fir_no = $_POST['fir_no'];
    $fir_year = $_POST['fir_year'];
    $name_parties = $_POST['name_parties'];
    $date_ins = $_POST['date_ins'];
    $date_disp = $_POST['date_disp'];
    $shelf_no = $_POST['shelf_no'];
    $row_no = $_POST['row_no'];
    $bundle_no = $_POST['bundle_no'];
    $case_status = $_POST['case_status'];   
    $remarks = $_POST['remarks'];

//query Criminla Form


    $result = "INSERT INTO shush(court_name,case_type,case_no,case_year,fir_no,fir_year,name_parties,date_ins,date_disp,shelf_no,row_no,bundle_no,case_status,remarks)VALUES('$court_name','$case_type','$case_no','$case_year','$fir_no','$fir_year','$name_parties','$date_ins','$date_disp','$shelf_no','$row_no','$bundle_no','$case_status','$remarks')";

    if(mysqli_query($con,$result)){
        ?>
        <script>
            alert("Data has been inserted")
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Data not inserted Error")
        </script>
        <?php
    }

} else {
    ?>
        <script>
            alert("Please Enter All data")
        </script>
        <?php
}



}

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
                                            
<!--Form INSIDE CARD BODY-->
 
    

    <h1 class="text-center">EDIT CASE DETAILS</h1>
    
    

   
    <div class="row">
        <div class="col-12">            
             <div class="card card-body">

        <!--------------------------CASE EDIT FORM------------------------------------------>

             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="constainer-fluid">
                <div class="row">

                    <div class="col-sl-4 col-md-3 mb-2">  <!--court drop down-->
                        <label for="formGroupExampleInput2" class="form-label">Court Name</label><br>
                        <select name="court_name"><br>
                        <option selected><?php echo $result['court_name']; ?></option>    
                        <option value="<?php echo $res['record_no']; ?>">dj</option>    
                        <option value="<?php echo $res['record_no']; ?>">adj-1</option>
                        <option value="<?php echo $res['record_no']; ?>">adj-2-II</option>
                        <option value="<?php echo $res['record_no']; ?>">adj-sehwan</option>
                        <option value="<?php echo $res['record_no']; ?>">senior-1</option>
                        <option value="<?php echo $res['record_no']; ?>">senior-2</option>
                        <option value="<?php echo $res['record_no']; ?>">senior-sehwan</option>
                        <option value="<?php echo $res['record_no']; ?>">cjjm-1-kotri</option>
                        <option value="<?php echo $res['record_no']; ?>">cjjm-2-kotri</option>
                        <option value="<?php echo $res['record_no']; ?>">family</option>
                        <option value="<?php echo $res['record_no']; ?>">tbk-2</option>
                        <option value="<?php echo $res['record_no']; ?>">consumer</option>
                        <option value="<?php echo $res['record_no']; ?>">cjjm-1-sehwan</option>
                        <option value="<?php echo $res['record_no']; ?>">cjjm-2-sehwan</option>
                        <option value="<?php echo $res['record_no']; ?>">cjjm-3-tbk</option>
                        </select><br>
                    </div>



                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="case_type">Case Type</label><br>
                        <select name="case_type" ><br>
                        <option><?php echo $result['case_type'];?></option>
                        <option value="criminal">Criminal</option>
                        <option value="civil">Civil</option>
                        <option value="family">Family</option>
                        <!-- <option value="criminal" selected="criminal">Criminal</option> -->
                        <!-- <option value="civil">Civil</option>
                        <option value="family">Family</option> -->
                        </select><br>
                    </div>


            
                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="formGroupExampleInput2" class="form-label">Case No</label>
                        <br><input type="number" name="case_no" value="<?php echo $result['case_no']; ?>" ><br>
                    </div>
            
                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="formGroupExampleInput" class="form-label">Case Year</label>
                        <br><input type="number" name="case_year" value="<?php echo $result['case_year']; ?>" ><br>
                    </div>



                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="formGroupExampleInput2" class="form-label">Fir Number</label>
                        <br><input type="number" name="fir_no" value="<?php echo $result['fir_no']; ?>" ><br>
                    </div>
                
                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="formGroupExampleInput" class="form-label">Fir Year</label>
                        <br><input type="number" name="fir_year" value="<?php echo $result['fir_year']; ?>" ><br>
                    </div>

            
            
                     <div class="col-sl-4 col-md-3 mb-4">
                        <label for="formGroupExampleInput2" class="form-label">Name of Parties</label>
                        <br><input type="text" name="name_parties" value="<?php echo $result['name_parties']; ?>" ><br>
                    </div>
            
                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="formGroupExampleInput" class="form-label">Date of Institution</label>
                        <br><input type="date" name="date_ins" value="<?php echo $result['date_ins']; ?>" ><br>
                    </div>
            
                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="formGroupExampleInput2" class="form-label">Date of disposal</label>
                        <br><input type="date" name="date_disp" value="<?php echo $result['date_disp']; ?>" >><br>
                    </div>
            
                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="formGroupExampleInput" class="form-label">Shelf Number</label>
                        <br><input type="number" name="shelf_no" value="<?php echo $result['shelf_no']; ?>"><br>
                    </div>
            
                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="formGroupExampleInput2" class="form-label">Row Number</label>
                        <br><input type="number" name="row_no" value="<?php echo $result['row_no']; ?>" ><br>    
                    </div>


                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="formGroupExampleInput2" class="form-label">Bundle/Gathri Number </label>
                        <br><input type="number" name="bundle_no" value="<?php echo $result['bundle_no']; ?>" ><br>
                    </div>  
            
                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="formGroupExampleInput" class="form-label">Case Status</label>
                        <br>
                        <select name="case_status" value="<?php echo $result['case_status']; ?>" ><br>
                            <option selected></option>
                            <option value="disposed">Disposed</option>
                            <option value="dormant">Dormant</option>                
                            <option value="out of district">Out of District</option>
                            <option value="sent up to clerk">SENT UP TO CLERK</option>
                        </select><br>
                    </div>
            
                    <div class="col-sl-4 col-md-3 mb-4">
                        <label for="remarks">Remakrs</label><br>
                        <textarea name="remarks" id="" cols="30" rows="10" ><?php echo $result['remarks']; ?></textarea><br>
                    </div>    

                    <div class="col-12">
                        <input type="submit" name="edit"><br>
                    </div>

        </form>
    
                   
            </div>

        
                </div>

            </div>
            </div>
        

        
    
                   
         



                                            
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

</html>