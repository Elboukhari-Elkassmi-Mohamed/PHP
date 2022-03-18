<?php 


$mysqli = new mysqli('localhost','root', '', 'e_classe_db') or
die(mysqli_error($mysqli));

    
if(isset($_GET['view'])){
    $id =$_GET['view'];
    $payment= $mysqli->query("SELECT * FROM payment WHERE id=$id ") or 
    die($mysqli->error);  
    
}

?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include 'head.php'; ?>
        <title>view</title>
    </head>

    <body>
        
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

                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $payment->fetch_assoc()) : ?>
                        <tr>

                            <td><?php echo $row['Name'] ?> </td>
                            <td><?php echo $row['Payment schedule'] ?> </td>
                            <td><?php echo $row['Bill Number'] ?> </td>
                            <td><?php echo $row['Amount Paid']  ?> </td>
                            <td><?php echo $row['Balance Amount'] ?> </td>
                            <td><?php echo $row['Date'] ?> </td>


                            
                        </tr>

                    <?php  endwhile ?>

                </tbody>

            </table>

        </div>
    </body>

</html>