<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>Dashboard</title>


</head>

<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <?php include 'sidbar.php'; ?>
    <!-- /#sidebar-wrapper -->
    <!-- Main content -->
    <div class="container-fluid  d-flex flex-column">
      
       <!-- nav-bar  -->
       <?php  include 'navbar.php' ;?>

      <div class="container mt-3">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6"> <!-- small box -->
          <div class="small-box p-md-2">
            <div class="i">
              <h3><i class="fas fa-graduationnner-cap"></i></h3>
              <p>Students</p>
              <div class="box-footer text-end"><b>243</b></div>
            </div>
          </div>
        </div>
        <!-- ./col -->



        <div class="col-lg-3 col-md-6 col-sm-6">
          <!-- small box -->
          <div class="small-boxa  p-md-2 ">
            <div class="inner">
              <h3><i class="far fa-bookmark"></i></h3>
              <p>Course</p>
              <div class="small-box-footer text-end"><b>13</b>
              </div>
            </div>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="small-boxb  p-md-2">
            <div class="inner">
              <h3><i class="fas fa-dollar-sign"></i></h3>
              <p>Payments</p>
              <div class="small-box-footer text-end"><b>dhs 556,000</b></div>
            </div>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-md-6 col-sm-6">
          <!-- small box -->
          <div class="small-boxc  p-md-2">
            <div class="inner">
              <h3><i class="far fa-user"></i></h3>
              <p>Users</p>
              <div class="small-box-footer text-end "><b>3</b></div>
            </div>
          </div>
        </div>
         <!-- ./col -->
      </div>
    </div>

  </div>

</div>
</body>

</html>