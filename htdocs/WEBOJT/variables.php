<?php
$student1="khain";
$student2="Hla";
echo $student1;//string type


$age=25;//interger type
echo $student1 . "age is" .$age ."<br>";

$rate=17.8;//float or double
echo "rate is" .$rate. "<br>";

$check=true;//boolean
echo "check is ".$check;

//Arrays delcalaration
$salary=array(25000,"40000",30000,true,12000);
echo "<br>salary is " .$salary[1];
echo"<br> slary size is " .count($salary);// length of arrays ko express lote tae way
echo "<br>array size is ".sizeof($salary);// length of arrays ko express lote tae way

//Associative array (key,value)
$employee=array('david'=>2000,'John'=>35000,'joelly'=>40000);
echo "<br> salary is ".$employee['david'];
//array-key or array -values
print_r(array_keys($employee));
print_r(array_values($employee));
array_push($employee,'thiri',3500);
$employee['thiri']=3500;
// to know details of variables
print_r($employee);
var_dump($student1);
var_dump($salary);

$mark=array(45,56,54,55,45);
echo "<br> Mark size is ".count($mark);
array_push($mark,40);
echo "Marks are " .count($mark);
print_r($mark);



?>
<!DOCTYPE html>
<html>
    <head>
        <title>First PHP Page</title>

        <head>
            <body>
                <div>
</div>
</body>

<html>


