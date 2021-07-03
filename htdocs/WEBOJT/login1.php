<?php 
     $email="";
    $password="";
    session_start();
   

    if(isset($_POST['submit']))
    {
        if(empty($_POST["email"])){
            $email_error="Please enter email";
        }
        else{
            $email=$_POST['email'];
        }
        if(!empty($_POST['password'])){
            $password=$_POST['password'];

        }
        else{
            $password_error="please enter password";
        }
        if(!empty($email)&&!empty($password)){
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            header("Location:auth.php");
        }
        
    }

    
    
    /*if(isset($_POST['submit']))
    {   $email=$_POST['email'];
        $password=$_POST['password'];
        if($email=="khaing@gmail.com" && $password="1234")
        {
            header("Location:success.php");
        }
        else{
           header("Location:error.php");
        }
    }*/
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title> Login PHP </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
    </head>
    <body >
    <div class="container">
    <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4" >
        <form class="form-signin mt-5" method="POST" style="border:2px solid black;padding:5px;border-radius:5px" >

        
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" >Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus value="<?php echo $email; ?>">
        <span style="color:red"><?php if(isset($email_error))
        {echo $email_error;
        $_SESSION['invalid']="";}
         if(isset($_SESSION['invalid']))
            echo $_SESSION['invalid'];
         ?></span>
        <br>
        <label for="inputPassword" >Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" value="<?php echo $password; ?>">
        
        <span style="color:red"><?php if(isset($password_error))
        
         {echo $password_error;
         $_SESSION['invalid']="";}
         if(isset($_SESSION['invalid']))
            echo $_SESSION['invalid'];
         ?></span>
        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
    </div>
    
    <div class="col-md-4">
    </div>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>


