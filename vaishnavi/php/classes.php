<?php
class fruit{
   public $name;
   public $color;

    function set_name($name){
        $this->name =$name;
    }

    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
}


$apple = new fruit();
$mango = new fruit();
$apple->set_name('Apple');
$mango->set_name('Mango');

echo "name: ".$apple->get_name();
echo "<br>";
echo "name: ".$mango->get_name();
?>