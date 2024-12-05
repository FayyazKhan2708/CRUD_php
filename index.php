<?php include 'connect.php';
// inserting data inside table
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    //insert query
    $sql = "insert into `phpcrud` (username, email, mobile, address) values ('$username', '$email', '$mobile', '$address')";
    $result= mysqli_query($conn, $sql);
    if($result){
        header('location:display.php');
    }else{
        echo die("Data not inserted");
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP CRUD-Project</title>
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>PHP CRUD</h1>
    <a href="display.php">View Data</a>
    <form action="" method="post">
        <input type="text" placeholder="Enter your name" required autocomplete="off" name="username">
        <input type="email" placeholder="Enter your email" required autocomplete="off" name="email">
        <input type="number" placeholder="Enter your mobile number" required autocomplete="off" name="mobile">
        <input type="text" placeholder="Enter your address" required autocomplete="off" name="address">
        <input type="submit" class="btn" name="submit">
    </form>
</body>

</html>