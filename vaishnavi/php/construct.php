<?php
class school{

    public $name;
    public $rollno;

    function __construc($name,$rollno){
        $this->name =$name;
        $this->rollno =$rollno;
    
    }

    function get_name(){
        return name;
    }
    function get_rollno(){
        return rollno;
    }
}

$ty = new school("vaishnavi",41);

echo "name of student is: ".$ty->get_name();
echo "<br>"
echo "roll no of student is: ".$ty->get_rollno();

?>