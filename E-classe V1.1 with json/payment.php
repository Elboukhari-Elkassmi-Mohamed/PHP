<?php 
$array1 = file_get_contents("pay-tabl.json");
$array1 = json_decode($array1,true);

?>

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
    <div class="container-fluid p-0  d-flex flex-column ">
      
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


            <?php    foreach ($array1 as $data) :
                
                ?>
              <tr class="table-line">
                <td> <?php echo $data["Name"]; ?></td>
                <td> <?php echo $data["PAYMENT SCHEDULE"]; ?> </td>
                <td> <?php echo $data["Bill Number"]; ?> </td>
                <td> <?php echo $data["AMOUNT PAID"]; ?> </td>
                <td><?php echo $data["BALANCE AMOUNT"]; ?> </td>
                <td>  <?php echo $data["DATE"]; ?></td>
                <td class="font "> <i class="far fa-eye"></i></td>
              </tr>
              <?php 

            endforeach; ?>
              
            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>
  </main>
</body>

</html>

