<?php include_once "masterlayout/header.php"; 
/*session_start();
if(empty($_session['email']))
{
    header("Location:login.php");
}*/

?>
<div id="layoutSidenav">
    <?php include_once "masterlayout/sidebar.php"; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
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
</main>
<?php include_once 'masterlayout/footer.php'; ?>