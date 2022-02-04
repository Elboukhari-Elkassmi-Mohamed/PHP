<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'head.php'; ?>

  <title>Dashboard</title>

</head>

<body>
  <main>
    <div class="d-flex">
      <!-- Sidebar -->
      <?php include 'sidbar.php'; ?>
    
      <!-- Main content -->
      <div class="container-fluid  d-flex flex-column">

        <!-- nav-bar  -->
        <?php include 'navbar.php'; ?>

        <div class="container mt-3">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <!-- small box -->
              <div class="small-box p-md-2">
                <div class="i">
                  <i class="fas fa-graduation-cap"></i>
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
                  <i class="far fa-bookmark"></i>
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
                  <i class="fas fa-dollar-sign"></i>
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
                  <i class="far fa-user"></i>
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
  </main>
</body>


</html>