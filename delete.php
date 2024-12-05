<?php 

include 'connect.php';

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    
    //delete query
    $delete_data= mysqli_query($conn,"Delete from `phpcrud` where id =$delete_id") or die("Data not deleted succeffuly");

    if($delete_data){
        header('location:display.php');
    }
}

?>