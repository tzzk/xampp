<?php 
class Product{
    private $name;
    private $code;
    private $type;

    public function __construct($name,$code,$type)
    {
        $this->name=$name;
        $this->code=$code;
        $this->type=$type;
    }
    function display()
    {
        echo $this->name."<br>".$this->code."<br>".$this->type;
        echo "<br>";
    }
    function setName($name){
        $this->name=$name;
    }
    function setCode($code){
        $this->code=$code;
    }
    function setType($type){
        $this->type=$type;
    }

}
$product1=new Product("Noodle","0001","food");
$product1->display();
echo "<br>";
$product2=new Product("Rice cooker","20009","home accessory");
$product2->display();
$product2->setCode("13400");
$product2->display();

?>