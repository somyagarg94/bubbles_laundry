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

<form name="frmUser" method="post" action="action.php">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label for="psw"><b>Roles</b></label>

    <select name="role">
  <option value="customer">Customer</option>
  <option value="retailer">Retailer</option>
  <option value="supplier">Supplier</option>
  <option value="wholesaler">Wholesaler</option>
</select>

<!-- 
    <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" name="role" style="background-color:rgb(143, 163, 185)">
              Roles
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="roles/customer.html">Customer</a>
              <a class="dropdown-item" href="roles/retailer.html">Retailer</a>
              <a class="dropdown-item" href="roles/supplier.html">Supplier</a>
              <a class="dropdown-item" href="roles/wholesaler.html">Wholesaler</a>
            </div>
          </div>
    </div> -->

    <button type="submit" value="Submit" name="but_submit" id="but_submit" >Login</button>
  
</form>

</body>
</html>