<?php $array = [
    ["Name" => "username1", "Email" => "user1@email.com", "PHONE" => "0673054777", "ENROLL NUMBER" => "12345673477760", "DATE OF ADMISSION" => "08-Dec,2021"],
    ["Name" => "username2", "Email" => "user1@email.com", "PHONE" => "0673054777", "ENROLL NUMBER" => "12345673760", "DATE OF ADMISSION" => "09-Dec,2021"],
    ["Name" => "username3", "Email" => "user1@email.com", "PHONE" => "0673054777", "ENROLL NUMBER" => "123456577760", "DATE OF ADMISSION" => "10-Dec,2021"],
    ["Name" => "username4", "Email" => "user1@email.com", "PHONE" => "0673054777", "ENROLL NUMBER" => "123456747760", "DATE OF ADMISSION" => "11-Dec,2021"],
    ["Name" => "username5", "Email" => "user1@email.com", "PHONE" => "0673054777", "ENROLL NUMBER" => "123456730760", "DATE OF ADMISSION" => "12-Dec,2021"],
    ["Name" => "username6", "Email" => "user1@email.com", "PHONE" => "0673054777", "ENROLL NUMBER" => "12345734760", "DATE OF ADMISSION" => "13-Dec,2021"],
    ["Name" => "username7", "Email" => "user1@email.com", "PHONE" => "0673054777", "ENROLL NUMBER" => "12345734760", "DATE OF ADMISSION" => "13-Dec,2021"]

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
  <title>Students</title>


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
      <button type="button" class="btn "> ADD NEW STUDENT</button>
          </div>
        </div>

        <div class="table-responsive table-responsive-data2">
          <table class="table table-data2 ">
            <thead class="">
              <tr class="">
                <th class="invisible">sddssdffsd</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>Enroll Number</th>
                <th>Date of admission</th>
                <th class="invisible" >sd</th>
                
              </tr>
            </thead>
            <tbody>
        <?php    foreach ($array as $data) :
                
                ?>
              <tr>
                <td> <img src="./assets/students.png" width="40" alt="wait for it"></td>
                <td> <?php echo $data["Name"]; ?></td>
                <td> <?php echo $data["Email"]; ?> </td>
                <td> <?php echo $data["PHONE"]; ?> </td>
                <td><?php echo $data["ENROLL NUMBER"]; ?> </td>
                <td>  <?php echo $data["DATE OF ADMISSION"]; ?></td>
                <td class="font "> <i class="fas fa-pen"></i> <i class="fas fa-trash"></i></td>
              </tr>
              <?php 

            endforeach;  ?>
            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>
  
</body>

</html>