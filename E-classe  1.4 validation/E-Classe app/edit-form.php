


 

<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./assets/bootstrap.min.css">
     <link rel="stylesheet" href="./assets/stylemq.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


     <title>edit</title>
 </head>

 <body>

 <?php require_once 'process.php';
 
 ?>



     <div class="d-flex justify-content-center  ">
         
         <form action="process.php" method="POST" class="w-50">
         <input type="hidden" name="id"  value="<?php echo $id; ?>" >


             <div class="form-group mb-3">
                 <label>name</label>
                 <input type="text" name="name"  value="<?php echo $name; ?>"     placeholder="Enter name" class="form-control">
             </div>

             <div class="form-group mb-3">
                 <label>Email address</label>
                 <input type="email" name="email"  value="<?php echo $email; ?>"   placeholder="Enter email" class=" form-control">
             </div>

             <div class="form-group mb-3 ">
                 <label>phone </label>
                 <input type="phone" name="phone" value="<?php echo $phone; ?>"   placeholder="phone" class="form-control"  >
             </div>


             <div class="form-group  mb-3">
                 <label>Enroll Number</label>
                 <input type="text" name="Number"   value="<?php echo $Number; ?>"  placeholder="Number"  class="form-control" >
             </div>

             <div class="form-group  mb-3">
                 <label>Date of admission</label>
                 <input type="date" name="date"  value="<?php echo $Date; ?>" class="form-control" >
             </div>


             <div  class="text-center">
             <button type="submit"  name="update" class="btn btn-lg w-25 btn-primary">update</button>
              
            </div>
         </form>
     </div>
 </body>

 </html>