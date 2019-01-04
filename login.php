<?php
include 'config.php';

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "abc";
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }


if(isset($_POST['submit']))
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $cpassword = $_POST['cpass'];
    $sql = "INSERT INTO login (id,uname, pass,cpass) VALUES ( NULL,'$username', '$password','$cpassword')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    
 
   } 
  }
 
?>









