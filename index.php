<html>
    <head>
        <title>Login</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    $str = $password; 
    //$salt = 'Username20Jun96'; 
    $PS=md5($str);
    $sql = "INSERT INTO login (id,uname, pass,cpass) VALUES ( NULL,'$username', '$PS','$cpassword')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    
 
   } 
  }
 
?>
    </head>
    <body>
        
<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="index.php" method="post">
    <div class="form-group">
      <label for="name">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter name" name="uname">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
    </div>
   
    <button type="submit" class="btn btn-default"name="submit">Submit</button>
  </form>
</div>

        <!-- <form action="index.php"method="POST">
            <input type="text" placeholder="Username"name="uname"><br><br>
            <input type="password" placeholder="password"name="pass"><br><br>
            <input type="password" placeholder="cpassword"name="cpass"><br><br>
            <input type="submit" value="submit"name="submit">
            
        </form> -->
    </body>
</html>