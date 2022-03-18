<?php  
session_start();





$mysqli = new mysqli('localhost', 'root', '', 'e_classe_db') or
        die(mysqli_error($mysqli));

//page students
        $result = $mysqli->query("select * FROM course") or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php'; ?>

  <title>Course</title>


</head>

<body>
  <main>
  <div class="d-flex " id="wrapper">
    <!-- Sidebar -->
    <?php include 'sidbar.php'; ?>
    <!-- /#sidebar-wrapper -->
    <!-- Main content -->
    <div class="container-fluid p-0 w-75 d-flex flex-column ">
      
    <?php  include 'navbar.php' ;?>

      <!-- ./col -->

      <div class="container h-100 " style="background-color: #E5E5E5;">

        <div class="header-one   py-2 d-flex justify-content-between">
          <h4>Course List</h4>
          <div class="font">
            <i class="far fa-sort"></i>
          </div>
        </div>

        <div class="table-responsive table-responsive-data2">
          <table class="table table-data2 ">
            <thead>
              <tr>
                <th class="invisible">CourseCover</th>
                <th>Course name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              


            <?php   
       while ($row = $result->fetch_assoc()): ?>  
            <tr>
              <td><img src="./assets/students.png" width="40" alt="wait for it"></td>
              <td class="text-center"><?php echo $row['libelle']?> </td>
              <td class="text-center"><?php echo $row['description']?> </td>
              <td class="text-center"><?php echo $row['date']?> </td>
              <td class="text-center"><?php echo $row['price'].'$'?> </td>
            </tr>
           <?php endwhile;  ?>

            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>
  </main>
</body>

</html>

