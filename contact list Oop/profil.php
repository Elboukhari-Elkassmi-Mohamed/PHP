<?php     session_start(); 

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
                <a class="nav-link active" aria-current="page"
                 href="include/logOut.php"
                  ><b>Logout</b> </a>
              </li>       
            </ul>

          </div>
        </nav>
      </header>




<section>
    <div>
        <h1 class="p-3">Welcome, <?php echo $_SESSION["username"] ;?></h1>
        <h2 class="ms-2">Your profile:</h2>



        <table class="table">
            <thead>
              <tr>
                <hr>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>Username:</th>
                <td><?php echo $_SESSION["username"] ;?> </td>
                
              </tr>
              <tr>
                <th>Sign_Up date:</th>
                <td><?php echo $_SESSION["date"] ;?></td>
               
              </tr>
              <tr>
                <th >Last login:</th>
                <td ><?php echo $_SESSION["last_login"] ;?></td>
              </tr>
            </tbody>
          </table>



    </div>
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

<?php  ;} ?>