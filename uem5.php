<?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username, $password);

if(!$con){
    die("connection to this database failed due to ". mysqli_connect_error());
}
echo "Succecting to the db";
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql="INSERT INTO `UEM`.`uem` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

echo $sql;

if($con->query($sql)==true){
    echo "Successfully inserted";
}
// else{
//     each "ERROR: $sql <br> $con->error";
// }
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to UEM</title>
    <link rel="stylesheet" href="uem5.css">
</head>
<body>
    <img class="uem" src="uempic1.webp" alt="UEM">
    <div class="container">
        <h1>Welcome to UEM</h1>
        <p>Admission Open</p>
        <p class="submitMsg">Thanks for Submitting your form</p>
        <form action="subha.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">

            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone No">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other Information"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>

    </div>
    <script src="uem5.js"></script>
    <!-- INSERT INTO `uem` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'SUBHAMAY MIDDYA', '21', 'M', 'thesubhamaymiddya07@gmail.com', '9732162407', 'He is a good boy', current_timestamp()); -->
    
</body>
</html>