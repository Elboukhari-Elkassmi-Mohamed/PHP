


<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./assets/bootstrap.min.css">
     <link rel="stylesheet" href="./assets/stylemq.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


     <title>add</title>
 </head>

 <body>


     <div class="d-flex justify-content-center  ">


     <?php require_once 'process.php';?>

         <form action="process.php" method="POST" class="w-50">

             <div class="form-group mb-3">
                 <label>name</label>
                 <input type="text" name="name" class="form-control"   placeholder="Enter name">
             </div>

             <div class="form-group mb-3">
                 <label>Email address</label>
                 <input type="email" name="email" class=" form-control" placeholder="Enter email">
             </div>

             <div class="form-group mb-3 ">
                 <label>phone </label>
                 <input type="phone" name="phone" class="form-control"  placeholder="phone">
             </div>


             <div class="form-group  mb-3">
                 <label>Enroll Number</label>
                 <input type="text" name="Number" class="form-control" placeholder="Number">
             </div>

             <div class="form-group  mb-3">
                 <label>Date of admission</label>
                 <input type="date" name="Date"   class="form-control" >
             </div>


             <div  class="text-center">
             <button type="submit"  name="save" class="btn btn-lg w-25 btn-primary">Save</button>
            
            </div>
         </form>
     </div>
 </body>

 </html>