
<!DOCTYPE html>
<html>

<body>

<?php

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
    include('roles/error.html');
} else {
    if($_POST["role"] === "retailer"){
        include('roles/retailer.html');
    }
    elseif($_POST["role"] === "customer"){
        include('roles/customer.html');
    }
    elseif($_POST["role"] === "wholesaler"){
        include('roles/wholesaler.html');
    }
    elseif($_POST["role"] === "supplier"){
        include('roles/supplier.html');
    }
}
}
?>

</body>
</html>