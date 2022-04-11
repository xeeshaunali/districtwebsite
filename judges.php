<?php 
include 'header.php';

//connection command through connection.php
include 'connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DISTRICT & SESSIONS COURT JAMSHORO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontAwesome/css/all.css">
  <script src="fontAwesome/js/all.js"></script>
  
</head>
<body>

  
  <!--Judges Page Cards-->

    
  <!-- Distirct Judge Card-->
  
    <div class="container-fluid">
      <div class="row">        
        <div class="col-12">

          <h3 class="text-center"><strong>District & Sessions Judge Jamshoro</strong></h3>
          
          <div class="card mb-5 mx-auto border-card" style="width: 18rem;">
            
            <img src="images/Quaid.jpg" class="card-img-top img-fluid w-50 mx-auto mt-1" alt="dj">

              <div class="card-body">              
                <h3 class="card-title">Mr.Simkan Hussain Mughal</h3>
                <hr class="card2">              
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <hr class="card2">
                <!-- <a href="#" class="btn btn-primary mx-auto">Go somewhere</a> -->
              </div>
            
          </div>
       
        </div>        
      </div>    
    </div> 
    
    <!--Additional Judges CARDS-->

    
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h3 class="text-center"><strong>Addtional District & Sessions Judges</strong></h3>

          <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Mr.Aurangzaib Alamgir</h5>
                  <p class="card-text text-center">District & Sessions Judge-I, Kotri</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mr.Rehmatullah Mooro</h5>
                  <p class="card-text">Additional District & Sessions Judge-II, Kotri</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mr.Shamsuddin Junejo</h5>
                  <p class="card-text">Additional District & Sessions Judge Jamshoro</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
          </div>          

        </div>
      </div>
    </div>



    <!--Senior Judges CARDS-->

    
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h3 class="text-center mt-5"><strong>Senior / Assistant Sessions Judges</strong></h3>

          <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Ms.Kashmala Keerio</h5>
                  <p class="card-text text-center">Senior/Assistant Sessions Judge-I, Kotri</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Mr.Asif Soomro</h5>
                  <p class="card-text text-center">Senior/Assistant Sessions Judge-II, Kotri</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Mr.Muhammad Tahir Abbassi</h5>
                  <p class="card-text text-center">Senior/Assistant Sessions Judge, Sehwan</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>
          </div>          

        </div>
      </div>
    </div>



    <!--Civil Judges HQ CARDS 6-->

    
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h3 class="text-center mt-5"><strong>Civil Judges Jamshoro</strong></h3>

          <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">

            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Mr.Ayaz Quereshi</h5>
                  <p class="card-text text-center">Civil Judge & J.M-I, Kotri</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Vacant Court</h5>
                  <p class="card-text text-center">Civil Judge & J.M-II, Kotri</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Ms.Ume-Farwa</h5>
                  <p class="card-text text-center">Family Judge & J.M Jamshoro</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Ms.Erum</h5>
                  <p class="card-text text-center">Civil Judge & J.M-II, TBK at Jamshoro</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Mr.Abdul Raqeeb Tunio</h5>
                  <p class="card-text text-center">Consumer Protection Judge</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>


            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Mr.Farooq Abbasi</h5>
                  <p class="card-text text-center">Civil Judge & J.M-I, Sehwan</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Mr.Abdul Wajid Rahuja</h5>
                  <p class="card-text text-center">Civil Judge & J.M-II, Sehwan</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 border-card">
                <img src="images/Quaid.jpg" class="card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Mr.Bhupat Rai</h5>
                  <p class="card-text text-center">Civil Judge & J.M, Sehwan-III at TBK</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </div>

          </div>          

        </div>
      </div>
    </div>



    
    


                    
                  
        


     

    <!--Senior-->

    






   




  <span>
    <br>
    <!--Footer-->
    <hr class="card2">
    <footer class="bg-light text-center text-lg-start fixed-bottom">
      <!-- Copyright -->
      <div class="text-center p-3">
        © 2022 Copyright:
        <a class="text-dark" href="index.php">District & Sessions Court Jamshoro</a>
      </div>
      <!-- Copyright -->
    </footer>
  </span>

  

      


   


  
  

  
      


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>