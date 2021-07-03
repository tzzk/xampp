<?php
 class Customer{
    //class properties
    private $name;//public
    private $email;
    private $phone;
    private $maxdebt;
    private $address;
    private $shipping_address;
    //constructor functon
    public function __construct($name,$email,$phone,$maxdebt,$address,$shipping_address)
    {
        $this->name=$name;
        $this->email=$name;
        $this->phone=$phone;
        $this->maxdebt=$maxdebt;
        $this->address=$address;
        $this->shipping_address=$shipping_address;
    }
    
    //class function
    function display()
    {
        
        echo $this->name."<br>".$this->email."<br>".$this->phone."<br>".$this->maxdebt."<br>".$this->address.$this->shipping_address;
            echo "<br>";
    }

    //settermethod (this is used to change properities customized later)
    function setName($name){
        $this->name=$name;
    }
    function setEmail($email){
        $this->email=$email;
    }
    function setPhone($phone){
        $this->phone=$phone;
    }
    function setMaxdebt($maxdebt){
        $this->maxdebt=$maxdebt;
    }
    function setAddress($address){
        $this->address=$address;
    }
    function setShipaddress($shipping_address){
        $this->shipping_address=$shipping_address;
    }
 }
//object creation
$customer1=new Customer("Khaing","khaing@gmail.com","09-234567","100000","Mdy","Mdy");
echo "<br>";
$customer1->display();
$customer1->setShipaddress("Pyigyidagon");
echo "<br>";
$customer1->display();



$customer2=new Customer("Htet","Htet@gmail.com","09-234567","5670000","YGN","YGN");
$customer2->display();




?>
