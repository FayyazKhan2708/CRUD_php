<?php 
include 'connect.php';

//Update Query logic
if (isset($_POST['update_btn'])) {
    $data_id = $_POST['data_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $sql = "update `phpcrud` set username='$username', email = '$email', mobile = '$mobile', address = '$address' where id=$data_id";

    $result= mysqli_query($conn, $sql);
    if($result){
        header('location:display.php');
    }else{
        echo die("Error in updating data");
    }
 
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Data-Project</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Update Data</h1>
    <a href="display.php">View Data</a>
    <?php
    if (isset($_GET['edit'])) {
        $edit_id = $_GET['edit'];
        $get_data = mysqli_query($conn, "Select * from `phpcrud` where id = $edit_id");
        if (mysqli_num_rows($get_data) > 0) {
            $fetch_data = mysqli_fetch_assoc($get_data);
            ?>
            <form action="" method="post">
                <input type="hidden" name="data_id" value="<?php echo $fetch_data['id'] ?>">
                <input type="text" required autocomplete="off" value="<?php echo $fetch_data['username'] ?>" name="username">
                <input type="email" required autocomplete="off" value="<?php echo $fetch_data['email'] ?>" name="email">
                <input type="number" required autocomplete="off" value="<?php echo $fetch_data['mobile'] ?>" name="mobile">
                <input type="text" required autocomplete="off" value="<?php echo $fetch_data['address'] ?>" name="address">
                <input type="submit" class="btn" name="update_btn" value="Update">
            </form>
            <?php
        }
    }

    ?>

</body>

</html>