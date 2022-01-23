<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body style="background: linear-gradient(to top right,#00C1FE, #FAFFC1);
height: 100vh;">


  <div class="container h-100">
    <div class="row h-100">
        <div class="col-lg-4 col-sm-7 col-8 mx-auto my-auto ">
            <div class="card h-100  justify-content-center">
                <div>
                  <div class="card-body">
                    <h1 class="card-title1 px-3">E-classe</h1>
                    <h3 class="card-title 2 text-center py-3">Sign In</h3>
                    <h6 class="card-subtitle mb-2 text-muted text-center">Enter your credentials to access your account</h6>
                    <form class="px-md-3 py-3 ">
                      <div class="form-group mt-lg-5">
                        <label for="exampleDropdownFormEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Enter your email">
                      </div>
                      <div class="form-group">
                        <label for="exampleDropdownFormPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                          placeholder="Enter your password">
                      </div>
              
                      <button  type="button" class="btn col-12 text-center mt-3 nonuderline" ><a  href="Dashboard.php">Sign In</a></button>
                      <p class="card-subtitle m-2 text-muted text-center">Forgot your password? <a href="#"  style="color: #00C1FE;">Reset Password</a></p>


                       </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
    
</body >
</html>