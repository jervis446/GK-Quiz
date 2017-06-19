<?php
//<!-- saved from https://www.adarshtimes.blogspot.com/private.content -->
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fullname=$_POST["fullname"];
$enrolment=$_POST["enrolment"];
$email=$_POST["email"];
$password=$_POST["password"];



$sql = "INSERT INTO students VALUES ('$fullname', '$enrolment', '$email','$password')";

if (mysqli_query($conn, $sql)) {
    echo "Voila !!! You Register Successfully...!TAKE a test!!" ;
   echo '<a href="./generalknowledge.html">Here</a>';// To Avoid parse error Use ' ';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn) ;
}

mysqli_close($conn);
?>