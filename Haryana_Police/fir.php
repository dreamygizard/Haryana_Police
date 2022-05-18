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
// else{
//     echo "Connection was successful<br>";
// }


if ($_SERVER['REQUEST_METHOD']=='POST') {

    $nm= $_POST['nme'];
    $numb= $_POST['number'];
    $emai = $_POST['email'];
    $st= $_POST['street'];
    $ad= $_POST['address'];
    $ct= $_POST['city'];
    $st= $_POST['state'];
    $count= $_POST['country'];
    $pin= $_POST['pincode'];
    $polsta= $_POST['police'];
    $comp= $_POST['comp'];
    $accdt= $_POST['accident'];
    
    $sql = "INSERT INTO `firr` ( `name`, `number`, `email`, `srtname`, `add`, `city`, `state`, `count`, `pincode`, `polst`, `compl`,  `acct`) VALUES ( '$nm', '$numb', '$emai', '$st', '$ad ', '$ct', '$st', '$count', '$pin', '$polsta', '$comp', '$accdt')";
    $result = mysqli_query($conn, $sql);
    
    // Add a new trip to the Trip table in the database
    if($result){
        echo "Successfully done";
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }

}



?>