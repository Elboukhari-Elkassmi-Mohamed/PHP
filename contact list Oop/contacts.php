<?php   
  
include "classes/Dbh.php";
include "classes/contact.php";
$data = new contact();
$all  = $data->select();  


if(isset($_SESSION["id"])){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
     integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
 
    <title>Profil</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light nav_color mb-3 ">
          <div class="container">
            <a class="navbar-brand" href="#">
              <h5 class="text-white">Contact List</h5>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarTogglerDemo03"
              aria-controls="navbarTogglerDemo03"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="profil.php"
                    ><b><?php echo $_SESSION["username"] ;?></b></a>
                </li>     
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="contacts.php"
                   ><b>Contacts</b> </a>
                </li>      

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="include/logOut.php"

                  ><b>Logout</b> </a>
              </li>       
            </ul>

          </div>
        </nav>
      </header>


<div>
    <h1 class="text-center p-4">Contacts</h1>
    <div class="d-flex container justify-content-between">
        <h3 class="mb- ">Contact list :</h3>
        <button type="button" class=" btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Contact</button>

        <!-- Modal -->
<form class="modal fade"  action="include/crud.php"  method="POST" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Contact to the List</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="form-outline mb-4">
          <label class="form-label" for="">Full name </label>
          <input type="text" id="" name="name" class="form-control form-control"placeholder="Enter Your Full name" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Email </label>
          <input type="text" id=""  name="email" class="form-control form-control"placeholder="Enter Email" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">phone Number	</label>
          <input type="text" id="" name="phone" class="form-control form-control"placeholder="Enter Number" />
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="">Adresse</label>
          <input type="text" id="" name="adresse" class="form-control form-control"placeholder="Adresse" />
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"  name="add"  class="btn btn-primary">Add Contact</button>
      </div>
    </div>
  </div>
</form>

    </div>
</div>

<section>
    <table class="table container mt-4 ">
        <thead>
          <tr>
            <th>Full name</th>
            <th>Email</th>
            <th>phone Number</th>
            <th>Adresse</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php   
       foreach ($all as $row): ?>  
            <tr>
              <td><?php echo $row['name']?> </td>
              <td><?php echo $row['email']?> </td>
              <td><?php echo $row['phone']?> </td>
              <td><?php echo $row['adresse']?> </td>
              <td>
                  <a href="update.php?edit=<?php echo $row['contact_id'];?>"><i class="fas fa-pen "></i></a>             
                  <a href="include/crud.php?delet=<?php echo $row['contact_id']; ?>"><i class="fas fa-trash "></i></a>
              </td>
              </tr>
      
           <?php endforeach;  ?>
        </tbody>
      </table>
</section>





      <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>

</body>
</html>

<?php ;} ?>