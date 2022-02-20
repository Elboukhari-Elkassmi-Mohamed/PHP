

 <?php
 //connect avec mysqli

 session_start();


    $mysqli = new mysqli('localhost', 'root', '', 'e_classe_db') or
        die(mysqli_error($mysqli));




    // initialize variables

    // $id = 0;
    // $name ='';
    // $email ='';
    // $phone ='';
    // $Number ='';
    // $Date ='';



    //ADD
    if (isset($_POST['save'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $Number = $_POST['Number'];
        $Date = $_POST['Date'];

        $mysqli->query("INSERT INTO students (name, email ,phone , Number, Date) 
        VALUES ('$name', '$email','$phone','$Number','$Date')") 
            
            or
            die($mysqli->error);


        header("Location: students.php");
        $mysqli->close();
    }


// Delet

    if (isset($_GET['delete'])) {

        $id = $_GET['delete'];

        $mysqli->query("DELETE FROM students WHERE id=$id") 
        or die($mysqli->error);

        header("Location: students.php");
        $mysqli->close();
    }



    //Edit

     if(isset($_GET['edit'])){
        $id =$_GET['edit'] ;
        $result= $mysqli->query("SELECT * FROM students WHERE id=$id ")
         or die($mysqli->error);  


        if (isset($result)){
            $row=$result->fetch_array();
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $Number = $row['Number'];
            $Date = $row['Date'];     
     }
     
    }
 
    //Update

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $Number = $_POST['Number'];
        $Date = $_POST['date'];

        $mysqli->query("UPDATE students SET name='$name', email='$email', phone='$phone' , Number='$Number', Date='$Date' WHERE id=$id")
         or die($mysqli->error);
         header("Location: students.php");
         $mysqli->close();
    }



    //login validation

if (isset($_POST['login'])){

  $email = $_POST ['Email'];
  $password = $_POST ['password'];
  

  $email = mysqli_real_escape_string($mysqli, $email);
  $password = mysqli_real_escape_string($mysqli, $password);

  $rlt = $mysqli->query("select * from comptes WHERE Email ='$email'") 
  or die ($mysqli->error);
  
 
    while($row = mysqli_fetch_array($rlt)){

        $db_email = $row ['Email'];
        $db_password = $row ['web_pass'];
        $_SESSION['ad_name'] = $row ['ad_name'];

        
    }

    if($email===$db_email && $password===$db_password){

        $_SESSION['ad_name'];

        if(isset($_POST ['remember'])){

            setcookie('Email', $db_email , time()+60*60*7);
            setcookie('Web_pass', $db_password , time()+60*60*7);
            header ("location: Dashboard.php");    
        }

        header ("location: Dashboard.php");

    }else {

        $_SESSION['message']= "validation is incorect ";
        $_SESSION['msg_type']= "danger";
        
        header ("location: sign-in.php");
    }

}

    ?>