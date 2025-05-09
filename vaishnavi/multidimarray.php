<?php
$contacts = array(
    array("aditi", "patil", 30),
    array("rdhika", "rane", 25),
    array("Suhani", "smits", 35)
);

echo "Contacts:<br>";
foreach ($contacts as $contact) {
    echo implode(", ", $contact) . "<br>"; 
}

?>