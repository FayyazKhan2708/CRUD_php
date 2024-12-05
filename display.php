<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Display Data-Project</title>
    <link rel="stylesheet" href="style.css">
    <style>
        th,
        td {
            border: 1px double black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Display Data</h1>
    <a href="index.php">Enter New Data</a>
    
            <?php
            $display_data = mysqli_query($conn, "Select * from `phpcrud`");
            $num = 1;
            if (mysqli_num_rows($display_data) > 0) {
                echo "<table>
                <thead>
                    <th>S1 No</th>
                    <th>Usrname</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Operations</th>
                </thead>
                <tbody>";
                while ($row = mysqli_fetch_assoc($display_data)) {
                    ?>

                    <tr>
                        <td>
                            <?php echo $num; ?>
                        </td>
                        <td>
                            <?php echo $row['username'] ?>
                        </td>
                        <td>
                            <?php echo $row['email'] ?>
                        </td>
                        <td>
                            <?php echo $row['mobile'] ?>
                        </td>
                        <td>
                            <?php echo $row['address'] ?>
                        </td>
                        <td>
                            <a href="delete.php?delete=<?php echo $row['id'] ?>"
                                onclick="return confirm('Are ou sure you want to delete this data?');">Delete</a>
                            <a href="update.php?edit=<?php echo $row['id'] ?>">Edit</a>
                        </td>
                    </tr>

                    <?php
                    $num++;
                }
            } else {
                echo "<div>No Data</div>";
            }
            ?>


        </tbody>
    </table>
</body>

</html>