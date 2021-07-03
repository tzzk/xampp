<?php
    if(isset($_POST['submit']))
    {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $address=$_POST['address'];
        //go to success page using header function
        header("Location:success.php?name=$name&email=$email&address=$address");
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Edit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
       
    </head>
    <body>
        <div class='container'>
            <div class="row">
            <div class="col-6">
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text"class="form-control" id="name" name="name" value=<?php echo $_GET['name'];?>>
                </div>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text"class="form-control" id="email" name="email" value=<?php echo $_GET['email'];?>>
                    </div>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text"class="form-control" id="address" name="address" value=<?php echo $_GET['address'];?>>
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" value="Update">
                    <a href="teambutton.php" class="btn btn-danger">cancel</a>
                </div>

            </form>
            </div>
            </div>
     
        </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
