<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


//db connection
//$variable_name=mysqli_connect("server_name","username", "password","database_name")
$db = mysqli_connect("localhost", "root", "" ,"contact");


    $insert_query = "INSERT INTO user (name,email,phone) 
    VALUES ('$name','$email','$phone')";

    mysqli_query($db, $insert_query);

    echo "registratoin successfull";


?>