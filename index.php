<?php
 //Connect to database
 $conn = mysqli_connect('localhost', 'somya', 'password', 'laundry_app');

// check connection
 if(!$conn){
   echo 'Connection error: ' . mysqli_connect_error();
 }

// write query for all users
 $sql = 'SELECT name, password,  role  FROM users';

// make query & get result
 $result = mysqli_query($conn, $sql);

 //fetch the resulting rows as an array
 $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
 mysqli_free_result($result);

 //close connection
 mysqli_close($conn);

 print_r($users);
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; padding: 100px; background: #c4dfc5}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
select[type=text], select[name=roles] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<h2 style="text-align:center">Welcome back. Please Login.</h2>

<form name="frmUser" method="post" action="authenticate()">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required id="txt_uname" name="txt_uname">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required id="txt_uname" name="txt_pwd">
    <label for="psw"><b>Roles</b></label>
    <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="background-color:rgb(143, 163, 185)">
              Roles
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="roles/customer.html">Customer</a>
              <a class="dropdown-item" href="roles/retailer.html">Retailer</a>
              <a class="dropdown-item" href="roles/supplier.html">Supplier</a>
              <a class="dropdown-item" href="roles/wholesaler.html">Wholesaler</a>
            </div>
          </div>
    <button type="submit" value="Submit" name="but_submit" id="but_submit" >Login</button>
  </div>

</form>

<?php
function authenticate()
{
$message="";
if(count($_POST)>0) {
    $conn = mysqli_connect('localhost', 'somya', 'password', 'laundry_app');
    // check connection
 if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
  }

// make query & get result
$result = mysqli_query($conn,"SELECT * FROM users WHERE name='" . $_POST["uname"] . "' and password = '". $_POST["psw"]."'");
$count  = mysqli_num_rows($result);
if($count==0) {
    $message = "Invalid Username or Password!";
} else {
    $message = "You are successfully authenticated!";
}
}
echo $message;
}
?>
</body>
</html>