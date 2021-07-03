<?php
$team=array(
    "Development"=>array("emp1"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg"),
                        "emp2"=>array("name"=>"Hla","Email"=>"hla@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-2.jpg"),
                        "emp3"=>array("name"=>"Hlyan","Email"=>"hlyan@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-3.jpg")
    ),
    "Design"=>array("emp1"=>array("name"=>"Aung","Email"=>"aung@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"testimonial-1.jpg"),
                        "emp2"=>array("name"=>"Linn","Email"=>"Linn@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"testimonial-2.jpg"),
                        "emp3"=>array("name"=>"Mar Mar","Email"=>"marmar@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"testimonial-3.jpg")
    ),
    "Testing"=>array("emp1"=>array("name"=>"Khin","Email"=>"khint@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg"),
                        "emp2"=>array("name"=>"Snow","Email"=>"snowgmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-2.jpg"),
                        "emp3"=>array("name"=>"Hlaing","Email"=>"Hlaing@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-3.jpg")
    ),
)
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Team Table</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
       
    </head>
    <body>
        <div class='container'>
        <table class='table table-bordered'>
            <tr>
                           
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                
                <th>Image</th>
                <th>Action</th>
                          
            </tr>
    <?php
    foreach($team as $teamname=>$value)
    {
        foreach($value as $teammember=>$teamvalue)
        {   $name=$teamvalue['name'];
            $email=$teamvalue['Email'];
            $address=$teamvalue['Address'];

            echo "<tr>";
            echo "<td>".$teamvalue['name']."</td>";
            echo "<td>".$teamvalue['Email']."</td>";
            echo "<td>".$teamvalue['Address']."</td>";
            echo "<td>".$teamvalue['image']."</td>";
            echo "<td><a class='btn btn-primary' href='view.php?name=$name&email=$email&address=$address'>View</a>
            <a class='btn btn-success' href='edit.php?name=$name&email=$email&address=$address'>Edit</a>
            <a class='btn btn-danger' href='delete.php?name=$name&email=$email&address=$address'>Delete</a></td>";
            echo "</tr>";
        };
    }
     
        ?>
        <table>
        </div>"
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
