<?php  
session_start();



  





$mysqli = new mysqli('localhost', 'root', '', 'e_classe_db') or
        die(mysqli_error($mysqli));

//page payment
        $result = $mysqli->query("select * FROM payment") or die($mysqli->error);

        

?>

<?php if(isset($_SESSION['ad_name'])){ ?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php'; ?>

  <title>Payment</title>


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
          <h4>Student List</h4>
          <div class="font">
            <i class="far fa-sort"></i>
          </div>
        </div>

        <div class="table-responsive table-responsive-data2">
          <table class="table table-data2 ">
            <thead>
              <tr>
                <th>name</th>
                <th>Payment Schedule</th>
                <th>Bill Number</th>
                <th>Amount Paid</th>
                <th>Balance amount</th>
                <th>Date </th>
                <th class="invisible">sd</th>

              </tr>
            </thead>
            <tbody>


            <?php   
       while ($row = $result->fetch_assoc()): ?>  
            <tr>
              <td><?php echo $row['Name']?> </td>
              <td><?php echo $row['Payment schedule']?> </td>
              <td><?php echo $row['Bill Number']?> </td>
              <td><?php echo $row['Amount Paid']." dh"?> </td>
              <td><?php echo $row['Balance Amount']?> </td>
              <td><?php echo $row['Date']?> </td>
              <td> <a href="view.php?view=<?php echo $row['id']; ?>"><i class="far fa-eye"></a></i></td>
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


<?php ;} else {
  header("Location: sign-in.php");
}?>