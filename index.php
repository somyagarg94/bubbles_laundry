<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <h2 style="text-align:center">Welcome back. Please Login.</h2>

    <form name="frmUser" method="post" action="action.php">
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <label for="role"><b>Roles</b></label>
            </br>
            <select name="role" style="width:200px;">
                <option value="customer">Customer</option>
                <option value="retailer">Retailer</option>
                <option value="supplier">Supplier</option>
                <option value="wholesaler">Wholesaler</option>
            </select>
            <button type="submit" value="Submit" name="but_submit" id="but_submit">Login</button>
    </form>

</body>

</html>
