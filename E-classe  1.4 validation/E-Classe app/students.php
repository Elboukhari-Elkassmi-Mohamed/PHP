<?php require_once 'process.php';


$result = $mysqli->query("select * FROM students")
        
        or die($mysqli->error);?>

       
<?php if(isset($_SESSION['ad_name'])){ ?>


<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php'; ?>

  <title>Students</title>


</head>

<body>


  
  <main>
  <div class="d-flex " >
    <!-- Sidebar -->
    <?php include 'sidbar.php'; ?>
    <!-- /#sidebar-wrapper -->
    <!-- Main content -->
    <div class="container-fluid p-0  w-75 d-flex flex-column  ">

    
    <?php  include 'navbar.php' ;?>

      <!-- ./col -->

      <div class="container h-100 " style="background-color: #E5E5E5;">

        <div class="header-one   py-2 d-flex justify-content-between">
          <h4>Student List</h4>
          <div class="font">
            <i class="far fa-sort"></i>
     <a href="add.php"><button type="button" class="btn "> ADD NEW STUDENT</button></a> 
          </div>
        </div>

        <div class="table-responsive table-responsive-data2">
          <table class="table table-data2 ">
            <thead >
              <tr>
                <th class="invisible">sddssdffsd</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>Enroll Number</th>
                <th>Date of admission</th>
                <th class="invisible" >sd</th>

               

                
              </tr>
            </thead>

            <?php

                $resulta = $mysqli->query("SELECT * FROM students");
                $resulta->num_rows;
                if($resulta->num_rows=== 0){
                echo "please add student";
}


?>
            <tbody>
       <?php   
       while ($row = $result->fetch_assoc()): ?>  
            <tr>
              <td><img src="./assets/students.png" width="40" alt="wait for it"></td>
              <td><?php echo $row['name']?> </td>
              <td><?php echo $row['email']?> </td>
              <td><?php echo $row['phone']?> </td>
              <td><?php echo $row['Number']?> </td>
              <td><?php echo $row['Date']?> </td>
              <td class="font "> 
              <a href="edit-form.php?edit=<?php echo $row['id']; ?>"><i class="fas fa-pen"></i></a>
               <a href="process.php?delete=<?php echo $row['id']; ?>"><i class="fas fa-trash"></a></i></td>
               </td> 
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