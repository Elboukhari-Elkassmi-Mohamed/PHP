<?php require_once 'process.php'?>

<!DOCTYPE html>
<html lang="en" >
<head>
   
<?php include 'head.php'; ?>

    <title>Sign-In</title>
</head>

<body  id="bodyindex">

  <main class="container">
    
    <div class="row vh-100">
        <div class="col-lg-4 col-md-6 col-sm-6 mx-auto my-auto ">
            <div class="card">     
                  <div class="card-body ">
                    <h1 class="card-title1 px-3">E-classe</h1>
                    <h2 class="card-title 2 text-center py-3 h3 ">Sign In</h2>
                    <h3 class="card-subtitle mb-2 text-muted text-center h6">Enter your credentials to access your account</h3>
                  
                   
                     
                    <form class="mt-5"  action="process.php"  method="POST">        

                        <label> Email address</label>
                        <input type="email" name="Email" class="form-control" value='<?php if(isset($_COOKIE['Email'])){echo $_COOKIE['Email'];} ?>'/>

                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?php if(isset($_COOKIE['Web_pass'])){echo $_COOKIE['Web_pass'];} ?>"/>

                      <a> <button  type="submit" name="login" class="btn col-12 text-center mt-3 nonuderline">Login</button></a>  
                     
                      <input type="checkbox"  name="remember" >
                      <label for="vehicle1"> Remember Me</label><br>
                    

                      <p class="card-subtitle m-2 text-muted text-center">Forgot your password? <a href="#" style="color: #00C1FE;">Reset Password</a></p>
                    </form>

                  </div>
                </div>
            </div>
        </div>

    
</main>

   
</body >

</html>