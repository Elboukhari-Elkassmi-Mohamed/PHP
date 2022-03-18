<?php require_once 'process.php'; ?>


<?php   


if(isset($_SESSION['ad_name'])){

?>

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
      <div class="container-fluid w-75  d-flex flex-column">

        <!-- nav-bar  -->
        <?php include 'navbar.php'; ?>

        <div class="container mt-3 ">
          <div class="row ">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <!-- small box -->
              <div class="small-box p-3">
                <div class="i">
                  <i class="fas fa-graduation-cap"></i>
                  <p>Students</p>

                  <?php

                  $resulta = $mysqli->query("SELECT * FROM students");
                  echo "<div class='small-box-footer text-end'>{$resulta->num_rows}</div>";

                  ?>

                </div>
              </div>
            </div>
            <!-- ./col -->



            <div class="col-lg-3 col-md-6 col-sm-6">
              <!-- small box -->
              <div class="small-boxa  p-3 ">
                <div class="inner">
                  <i class="far fa-bookmark"></i>
                  <p>Course</p>

                  <?php
                  $resulta = $mysqli->query("SELECT * FROM course");
                  echo "<div class='small-box-footer text-end'>{$resulta->num_rows}</div>";
                  ?>
                  
                </div>
              </div>
            </div>
          
          <!-- ./col -->

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="small-boxb   p-3">
              <div class="inner">
                <i class="fas fa-dollar-sign"></i>
                <p>Payments</p>

                <?php
                $resulta = $mysqli->query("SELECT SUM(`Amount Paid`) AS Somme FROM `payment`");
                $row = $resulta->fetch_assoc();

                echo "<div class='small-box-footer text-end'>{$row['Somme']}<b>DH</b></div>";
                ?>

              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-md-6 col-sm-6">
            <!-- small box -->
            <div class="small-boxc   p-3">
              <div class="inner">
                <i class="far fa-user"></i>
                <p>Users</p>
                <?php

                $resulta = $mysqli->query("SELECT * FROM comptes");
                echo "<div class='small-box-footer text-end'>{$resulta->num_rows}</div>";

                ?>
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

<?php ;} else {
  header("Location: sign-in.php");
}?>