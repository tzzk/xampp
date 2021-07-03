<?php 

session_start();

if (isset($_POST["submit"]))
{
    $name=$_POST['name'];
    $org=$_POST['org'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $debt=$_POST['debt'];
    $address=$_POST['address'];
    $caddress=$_POST['caddress'];

    if(!empty($name)&&!empty($org)&&!empty($email)&&!empty($phone)&&!empty($address)&&!empty($caddress)){
        $_SESSION['name']=$name;
        $_SESSION['org']=$org;
        $_SESSION['phone']=$phone;
        $_SESSION['email']=$email;
        $_SESSION['address']=$address;
        $_SESSION['debt']=$debt;
        $_SESSION['caddress']=$caddress;
        header("Location:customlogin.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>Custom Form</title>
        
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
    </head>
    <body class="bg-muted">
       <div class="container">
    <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10" >
        <form class="form-signin mt-5" method="POST" style="border:2px solid black;padding:5px;border-radius:5px" >  
        <div class="container">
            <div class="row">
                <div class="col">
                     <h1 class="h3 mb-3 font-weight-normal">ဝယ်သူအချက်အလက်များထည့်သွင်းခြင်း</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                     <label for="name" >အမည်</label>
                     <input type="text" id="name" name="name" class="form-control"  autofocus >
                </div>
                <div class="col-md-6">
                     <label for="org" >အဖွဲ့အစည်း</label>
                     <input type="text" id="org" name="org" class="form-control"  >
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="phone" >ဖုန်းနံပါတ်</label>
                     <input type="phone"  id="phone" name="phone" class="form-control" >
                </div>
                <div class="col-md-6">
                    <label for="email" >အီးမေးလ်</label>
                    <input type="text"  id="email" name="email" class="form-control"   >
                </div>
            </div>
            <div class="row">
                <div class="col">
                     <label for="text" >အများဆုံးလက်ခံသည့်အကြွေး</label>
                     <input type="text" id="debt" name="debt" class="form-control"   >
                </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                    <label for="inputaddress" >နေရပ်လိပ်စာ</label>
                     <input type="text"  id="address" name="address" class="form-control" >
                </div>
                <div class="col-md-6">
                    <label for="inputcaddress" >ပို့ဆောင်ရန်နေရာ</label>
                     <input type="address"  id="caddress" name="caddress" class="form-control"  >
                </div>
            </div>
            <div class="row">
                <div class="col">
                     <a type="button" class="btn m-2" style="background-color:gray" href="custom.php">မလုပ်တော့ပါ</a>
                    <input type="submit" id="submit" name="submit" class="btn btn-primary" value="ထည့်မည်">
                </div>
            </div>
        </div>
  
        </form>
    </div>
    
    <div class="col-md-1">
    </div>
    </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>




<?php


   /* $query =http_build_query(Array(
        'name' =>$name,
        'orga'=>$org,
        'ph'=>$phno,
        'mail'=>$email,
        'debt'=>$debt,
        'adress'=>$adress,
        'place'=>$place
    ));
    header("Location:customerview.php?{$query}");*/
    //header("Location:customerview.php?name=$name&orga=$org&ph=$phno&mail=$email&debt=$debt&adress=$adress&place=$place");
    


?>