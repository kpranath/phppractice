<?php
    $name = $_POST['dogName']; //if method for form is GET, then use $_GET[] for super global array!!!
    $age = $_POST['dogAge'];
    //We can use $_REQUEST[] if we dont know what is the client using in the form methos. REQUEST refers to the last request raised

    echo("Your dog name is " . $name . " and your dog is " . $age . " human years old");

    $dogAge = $age*7;
    echo("<br> your dog is " . $dogAge . " years old in dog years.");
?>