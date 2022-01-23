<?php $array = [
    ["Name" => "karthi", "PAYMENT SCHEDULE" => "First", "Bill Number" => "5442343", "AMOUNT PAID" => "DHS 100,000", "BALANCE AMOUNT" => "DHS 500,000", "DATE" => "08-Dec,2022"],
    ["Name" => "youssef", "PAYMENT SCHEDULE" => "Second", "Bill Number" => "3142343", "AMOUNT PAID" => "DHS 100,000", "BALANCE AMOUNT" => "DHS 500,000", "DATE" => "09-Dec,2020"],
    ["Name" => "Rachid", "PAYMENT SCHEDULE" => "Third", "Bill Number" => "2342343", "AMOUNT PAID" => "DHS 100,000", "BALANCE AMOUNT" => "DHS 500,000", "DATE" => "10-Dec,2021"],
    ["Name" => "Fatima", "PAYMENT SCHEDULE" => "Fourth","Bill Number" => "4342343", "AMOUNT PAID" => "DHS 100,000", "BALANCE AMOUNT" => "DHS 500,000", "DATE" => "11-Dec,2021"]
    
];

?>

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
  <title>Payment</title>


</head>

<body>
  <div class="d-flex " id="wrapper">
    <!-- Sidebar -->
    <?php include 'sidbar.php'; ?>
    <!-- /#sidebar-wrapper -->
    <!-- Main content -->
    <div class="container-fluid p-0  d-flex flex-column  position-sticky top-0">
      
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


            <?php    foreach ($array as $data) :
                
                ?>
              <tr class="">
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

</body>

</html>

