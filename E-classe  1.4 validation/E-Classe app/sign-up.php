<?php require_once 'process.php'?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'head.php'; ?>

  <title>Sign-Up</title>

</head>

<body id="bodyindex">

  <main class="container">

    <div class="row vh-100">
      <div class="col-lg-4 col-md-6 col-sm-6 mx-auto my-auto ">
        <div class="card">
          <div class="card-body ">
            <h1 class="card-title1 px-3">E-classe</h1>
            <h2 class="card-title 2 text-center py-3 h3 ">Sign Up</h2>
            <h3 class="card-subtitle mb-2 text-muted text-center h6">Welcome To E-classe Register </h3>


            <form class="mt-5" id="form" action="process.php" onsubmit="return validation();" method="POST">
              <div class="input-control">
                <label> Full Name</label>
                <input type="text" id="username" name="Name" class="form-control" value="" />
                <small>Placeholder pour l'erreur</small>
              </div>

              <div class="input-control">
                <label> Email address</label>
                <input type="email" id="email" name="Email" class="form-control" value="" />
                <small>Placeholder pour l'erreur</small>
              </div>


              <div class="input-control">
                <label>Password</label>
                <input type="password" id="password" name="Password" class="form-control" value="" />
                <small>Placeholder pour l'erreur</small>
              </div>



              <a> <button type="submit" name="sing_Up" class="btn col-12 text-center mt-3 nonuderline">Sing Up</button></a>


            </form>

          </div>
        </div>
      </div>
    </div>


  </main>

  <script src="jscript.js"> </script>

</body>

</html>