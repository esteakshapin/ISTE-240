<?php

//Hints:
//get the variables, ensuring they are provided or die() 
if (empty($_POST["name"]) || empty($_POST["email"])){
    die();
}

echo "Congratulations " . $_POST["name"] . ". You are accepted!"

//if successfull print out a success message!


?>