<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

    <h2 style="text-align:center">Welcome back. Please Login.</h2>
    <div>
        <form name="frmUser" method="post" action="action.php">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <label for="role"><b>Roles</b></label>
            <select name="role">
                <option value="customer">Customer</option>
                <option value="retailer">Retailer</option>
                <option value="supplier">Supplier</option>
                <option value="wholesaler">Wholesaler</option>
            </select>
            <input type="submit" value="Login" name="but_submit" id="but_submit">
        </form>
    </div>
</body>

</html>
