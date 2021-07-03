<?php
$team=array(
    "Development"=>array("emp1"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg"),
                        "emp2"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg"),
                        "emp3"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg")
    ),
    "Design"=>array("emp1"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg"),
                        "emp2"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg"),
                        "emp3"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg")
    ),
    "Testing"=>array("emp1"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg"),
                        "emp2"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg"),
                        "emp3"=>array("name"=>"Htet","Email"=>"htet@gmail.com","Address"=>"MDY","Ph"=>"09500034","image"=>"team-1.jpg")
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
        <?php
     
           
        echo "<div class='container'>";
        echo "<table class='table table-bordered'>";
        foreach($team as $key1=>$value1)
            {   echo "<th rowspan='4'>".$key1."</th>";
                foreach($value1 as $key2=>$value2)
                {   
                    echo "<tr>";
                     echo "<th>".$value2."</th>";
                    echo" $value2;
                    foreach($value2 as $key3=>$value3);
                        {   
                            
                            echo "<td>".$value3."</td>";
                        };
                    echo "</tr>";
                }; 
            };
             echo "<table>";
        echo "</div>";
?>

    </body>
</html>