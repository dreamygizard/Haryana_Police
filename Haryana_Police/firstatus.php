<!-- echo "Practise folder"; -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "aditya";

$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful


if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} 
// else {
//     echo "Connection was successful<br>";
// }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIR Status</title>
    <link rel="stylesheet" href="firstatus.css">

</head>

<body>
    <header>
        <div class="head">
            <img src="https://haryanapolice.gov.in/images/header.jpg" alt="head of the website" id="main-logo">

            <img src="https://tse1.mm.bing.net/th?id=OIP.3eLNIT3TIPP_Yz6DDmhBCAHaD-&pid=Api&P=0&w=298&h=160" alt="indian flag" id="india-flag">
        </div>
        <div class="navb">
            <nav>
                <ul>
                    <li><a href="1stpage.html">HOME</a></li>
                    <li><a href="#">ABOUT US <i class="fas fa-caret-down"></i></a>
                        <ul>
                            <li><a href="Messge_DGP.html">Message From DGP, Haryana</a></li>
                            <li><a href="Mission_statement.html">Mission Statement</a></li>
                            <li><a href="history.html">History</a></li>
                            <li><a href="police-service.html">Police Service Amendments</a></li>
                            <li><a href="#">Important Laws <i class="fas fa-caret-right"></i></a>
                                <ul>
                                    <li><a href="https://haryanapolice.gov.in/pdf/Motor_Vehicles_%20(Amendment)_%20Act_%202019.pdf" target="_blank">Motor Vehicle ACT Amendment(2019)</a></li>
                                    <li><a href="https://haryanapolice.gov.in/PDF/133%20of%202012.pdf" target="_blank">Women Safety Cell</a></li>
                                    <li><a href="https://haryanapolice.gov.in/PDF/Information%20security%20best%20practices.pdf" target="_blank">Cyber Security</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contactus.html">CONTACT US</a></li>
                    <li><a href="#">STATUS <i class="fas fa-caret-down"></i></a>
                        <ul>
                            <li><a href="firstatus.php">FIR Status</a></li>
                            <li><a href="FIR-booking.html">FIR Booking</a></li>
                            <li><a href="criminallog.html">Criminal Logistics</a></li>
                        </ul>
                    </li>
                    <li><a href="Account.html">ACCOUNT LOGIN</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <form action="/Haryana_Police/firstatus.php" method="POST">
            <div class="mb-3">
                <label for="srno" class="form-label">Enter Serial Number of Complaint </label>
                <input type="text" class="form-control" id="srno" aria-describedby="emailHelp" name="srno">

            </div>


            <button type="submit" class="btn-btn-primary">Submit</button>
        </form>
    </div>



    <table class="table">
        <thead>
            <tr>

                <th scope="col">Sr. Number</th>
                <th scope="col">Name</th>
                <th scope="col">Number</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Street Name</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Country</th>
                <th scope="col">Pincode</th>
                <th scope="col">Police Station</th>
                <th scope="col">Complaint</th>
                <th scope="col">Registration Date & Time</th>
                <th scope="col">Accident Date & Time</th>
            </tr>
        </thead>
        <tbody>

            <?php


            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $srno = $_POST['srno'];

                $sql = " SELECT * FROM `firr` WHERE `srno` = '$srno'";
                $result = mysqli_query($conn, $sql);

                $row = mysqli_fetch_assoc($result);
                echo "
        <tr>
        <th >" . $row['srno'] . "</th>
        <td>" . $row['name'] . "</td>
        <td>" . $row['number'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['srtname'] . "</td>
        <td>" . $row['add'] . "</td>
        <td> " . $row['city'] . "</td>
        <td> " . $row['state'] . "</td>
        <td> " . $row['count'] . "</td>
        <td> " . $row['pincode'] . "</td>
        <td> " . $row['polst'] . "</td>
        <td>" . $row['compl'] . "</td>
        <td>" . $row['currt'] . "</td>
        <td>" . $row['acct'] . "</td>
      </tr> ";
                // if ($result) {
                //     echo "Your Record  is updated   successfully";
                // } else {
                //     echo "The record was not updated successfully because of this error ---> " . mysqli_error($conn);
                // }
            }



            ?>

        </tbody>
    </table> ;
    <footer>
        <div class="footer">
            <div class="fleft">
                <a href="#">
                    <div class="flmenu">Home</div>
                </a>
                <a href="#">
                    <div class="flmenu">About Us</div>
                </a>
                <a href="#">
                    <div class="flmenu">Contact Us</div>
                </a>
                <a href="#">
                    <div class="flmenu">Status</div>
                </a>

            </div>
            <div class="fright">Copyright &copy; 2022 Haryana Police. All rights reserved</div>
        </div>
    </footer>
</body>

</html>