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
        <title>Team</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        echo "<div class='container'>";
        foreach($team as $key=>$value)
        {
            
            echo "<div class='row'>";
            echo "<h2>".$key." Team Member"."</h2>";
            foreach($value as $key1=>$value1)
            {
                echo "<div class='col'>";
                echo "<img src='image/".$value1['image']."' width='200px'>";
                foreach($value1 as $key2=>$value2){
                        echo $key2.":".$value2."<br>";
                        
                    
                               
                }
                echo "</div>";
            }
            echo "</div>";
            
        }
        echo "</div>";




    ?>
       


    </body>

<html>