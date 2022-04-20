<?php  
 
 
 if(isset($_GET["edit"])){


    $contact_id = $_GET["edit"];
 
    include "classes/Dbh.php";
    include "classes/contact.php";
 
    $edit = new contact ();
    $row = $edit->edit($contact_id);

foreach ($row as $row) :
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $adresse = $row['adresse'];

endforeach;
  $_SESSION["up_id"]=$_GET["edit"];

      
   }

if(isset($_SESSION["id"])){ ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>update</title>


</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light nav_color mb-3 ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h5 class="text-white">Contact List</h5>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="profil.php"><b>
                            <?php echo $_SESSION["username"] ;?>
                        </b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contacts.php"><b>Contacts</b> </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="include/logOut.php"><b>Logout</b> </a>
                </li>
            </ul>

        </div>
    </nav>
</header>

<section>
    <div class="mask d-flex align-items-center ">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body ">
                            <h3 class="text-uppercase text-center">Update</h3>


                            <form class="mt-5" id="form" action="include/crud.php" method="POST">

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="">Username</label>
                                    <input type="text" id="" name="name" class="form-control form-control"
                                        placeholder="Username" value="<?php echo $name ; ?>" />
                                    <smal id="username"></smal>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="">Email </label>
                                    <input type="text" id="" name="email" class="form-control form-control"
                                        placeholder="Enter Email" value="<?php echo $email ; ?>"  />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="">phone Number </label>
                                    <input type="text" id="" name="phone" class="form-control form-control"
                                        placeholder="Enter Number" value="<?php echo $phone ; ?>"  />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="">Adresse</label>
                                    <input type="text" id="" name="adresse" class="form-control form-control"
                                        placeholder="Adresse" value="<?php echo $adresse ; ?>"  />
                                    
                                </div>

                                <a> <button type="submit" name="update" class="btn col-12 text-center mt-3 nonuderline">Update</button></a>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

<script src="script.js"></script>

</body>

</html>

<?php ;} ?>