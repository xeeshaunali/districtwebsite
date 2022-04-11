<?php

// $server = "localhost";
// $name = "root";
// $password = "";
// $db_n = "db";


// $con = mysqli_connect($server,$user,$pass,$db_n);

$server = "localhost";
$user = "root";
$password = "";
$db_name = "db1";

$con = mysqli_connect($server,$user,$password,$db_name);


if($con){
    echo "success";
} else {
    echo "failure" .mysqli_connect_error();
}


// if(isset($_POST['submit']))

// {

//     if
//         (
// // check to see if feild is not empty

//          !empty($_POST['court_name'])
//       && !empty($_POST['case_type'])
//       && !empty($_POST['case_no'])
//       && !empty($_POST['case_year'])
//       && !empty($_POST['fir_no'])
//       && !empty($_POST['fir_year'])
//       && !empty($_POST['name_parties'])
//       && !empty($_POST['date_ins'])
//       && !empty($_POST['date_disp'])
//       && !empty($_POST['shelf_no'])
//       && !empty($_POST['row_no'])
//       && !empty($_POST['bundle_no'])     
//     //   && !empty($_POST['case_status'])
//     //   && !empty($_POST['remarks'])


//         )

//     {
// //variable declaration as tables created in db

//     $court_name = $_POST['court_name'];
//     $case_type = $_POST['case_type'];
//     $case_no = $_POST['case_no'];
//     $case_year = $_POST['case_year'];
//     $fir_no = $_POST['fir_no'];
//     $fir_year = $_POST['fir_year'];
//     $name_parties = $_POST['name_parties'];
//     $date_ins = $_POST['date_ins'];
//     $date_disp = $_POST['date_disp'];
//     $shelf_no = $_POST['shelf_no'];
//     $row_no = $_POST['row_no'];
//     $bundle_no = $_POST['bundle_no'];
//     $case_status = $_POST['case_status'];   
//     $remarks = $_POST['remarks'];

// //query


//     $result = "INSERT INTO shush(court_name,case_type,case_no,case_year,fir_no,fir_year,name_parties,date_ins,date_disp,shelf_no,row_no,bundle_no,case_status,remarks)VALUES('$court_name','$case_type','$case_no','$case_year','$fir_no','$fir_year','$name_parties','$date_ins','$date_disp','$shelf_no','$row_no','$bundle_no','$case_status','$remarks')";

//     if(mysqli_query($con,$result)){
//         echo "your data successfully submitted";
//     }
//     else{
//         echo "<br> data not submitted";
//     }

// } else {
//     echo "Enter All Data";
// }



// }


?>