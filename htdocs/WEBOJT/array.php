<?php
$car=array("Audi","'BMW","pajero");

$carinfo=array(
  

   $car[0]=>array("name"=>"Audi","model"=>2008,'number'=>"2F4533"),
    $car[1]=>array("name"=>"BMW","model"=>2012,"number"=>"1I4356"),
     $car[2]=>array("name"=>"Pajero","model"=>2009,'number'=>"5E4398"/*,"parts"=>array("wheel","light","engine")*/)
);

//for method

for($i=0;$i<count($car);$i++){
    echo $car[$i]."<br>";
}

//foreach way
foreach($car as $AA)//foreach(arrayname as itemname=>we can name ourselves)
{
    echo $AA.",";//itemname
}
//display information in carinfo

/*one dimension array with for loop
foreach($carinfo as $key=>$value)
{
    
    //echo $key."<br>";
    //print_r($value);
}*/

//Two diemnsion arrays with foreach loop two time


foreach($carinfo as $key=>$value)
{
    foreach($value as $nextkey=>$nextvalue)
    {
        echo "<br>".$nextkey."=>".$nextvalue;
    }
}



echo "<br>";
var_dump($carinfo[$car[1]]['number']);
var_dump($carinfo[$car[2]]['parts'][1]);




?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Array Lesson (PHP)</title>
    </head>
    <body>
        <h2>Car Detail Information</h2>
        <h3> Number of cars:<?php echo count($car);?></h3>
        
        <h3><?php echo $car[0];?></h3>
        <ul>
            <li>Name:<?php echo $carinfo[$car[0]]['name'];?></li>
            <li>Model:<?php echo $carinfo[$car[0]]['model'];?></li>
            <li>Number:<?php echo $carinfo[$car[0]]['number'];?></li>            
        </ul>


        <h3><?php echo $car[1];?></h3>
        <ul>
            <li>Name:<?php echo $carinfo[$car[1]]['name'];?></li>
            <li>Model:<?php echo $carinfo[$car[1]]['model'];?></li>
            <li>Number:<?php echo $carinfo[$car[1]]['number'];?></li>            
        </ul>

        <h3><?php echo $car[2];?></h3>
        <ul>
            <li>Name:<?php echo $carinfo[$car[2]]['name'];?></li>
            <li>Model:<?php echo $carinfo[$car[2]]['model'];?></li>
            <li>Number:<?php echo $carinfo[$car[2]]['number'];?></li> 
            <li>Parts:<?php echo $carinfo[$car[2]]['parts'][0].",". $carinfo[$car[2]]['parts'][1].",". $carinfo[$car[2]]['parts'][2];?></li>            
        </ul>

        <?php
            foreach($carinfo as $key=>$value)
            {
                echo "<ul>";
                foreach($value as $carkey=>$carvalue)
                {
                    echo "<li>".$carkey."=".$carvalue."</li>";
                };
                echo "</ul>";
            }
            

        ?>
        
        
    </body>
</html>