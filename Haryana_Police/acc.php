<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "aditya";

$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $sql = "INSERT INTO `try` ( `email`, `pass`, `currt`) VALUES ( '$email', '$password', current_timestamp());";
    $result = mysqli_query($conn, $sql);
    
    // Add a new trip to the Trip table in the database
    if($result){
        echo "The record has been inserted successfully successfully!<br>";
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
}


?>