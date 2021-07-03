<?php
$team=array(
    "Development"=>array("emp1"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg"),
                        "emp2"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-2.jpg"),
                        "emp3"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-3.jpg")
    ),
    "Design"=>array("emp1"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"testimonial-1.jpg"),
                        "emp2"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"testimonial-2.jpg"),
                        "emp3"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"testimonial-3.jpg")
    ),
    "Testing"=>array("emp1"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg"),
                        "emp2"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-2.jpg"),
                        "emp3"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-3.jpg")
    ),
)
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Team Table</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class='container'>
        <table class='table table-bordered'>
            <tr>
                <th>Team Name</th>
                <th>Employee</th>
                
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Ph</th>
                <th>Image</th>
                <th>Photo</th>
                          
</tr>
        <?php
        
        foreach($team as $key1=>$value1)
            {   echo "<th rowspan='4'>".$key1."</th>";
                foreach($value1 as $key2=>$value2)
                {   
                    echo "<tr>";
                    echo"<td>".$key2."</td>";
                    
                    foreach($value2 as $key3=>$value3)
                        {   
                            
                            echo "<td>".$value3."</td>";
                        };
                   
                     echo "<td><img src='image/".$value2['image']."' width='100px';></td>";
                    echo "</tr>";
                   
                };   
            };
        ?>
        <table>
        </div>"

    </body>
</html>
