
<!DOCTYPE html>
<html>

<body>


<?php
echo $_POST["uname"];
echo $_POST["psw"];
echo $_POST["role"];

$message="";
if(count($_POST)>0) {
    $conn = mysqli_connect('localhost', 'somya', 'password', 'laundry_app');
    // check connection
 if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
  }

// make query & get result
$result = mysqli_query($conn,"SELECT * FROM users WHERE name='" . $_POST["uname"] . "' and password = '". $_POST["psw"]."' and role = '". $_POST["role"]."'");
$count  = mysqli_num_rows($result);
if($count==0) {
    $message = "Invalid Username or Password!";
} else {
    $message = "You are successfully authenticated!";
}
}
echo $message;

?>

</body>
</html>