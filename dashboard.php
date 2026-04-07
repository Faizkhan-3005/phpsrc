<?php
include("database.php");

$query = "select * from users";
$res = mysqli_query($conn,$query);
$cnt = mysqli_num_rows($res);
?>
<html>
    <head>
        <title>Dashboard Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>
        <a href="logout.php" class="btn btn-primary">Logout</a>
        <h3>Users List</h3>
        <table border="1">
            <tr>
                <th>#</th><th>Username</th><th>Contact</th><th>Email</th><th>Password</th><th>Actions</th>
            </tr>
            <?php
                if($cnt > 0){
                    $i=1;
                    while($row = mysqli_fetch_assoc($res)){
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><a href="user_edit.php?id=<?php echo base64_encode(base64_encode($row['id'])) ?>">Edit</a> Delete</td>
                            <a href=></a>
                        </tr>
                        <?php
                    }
                }
                else{
                    echo "<tr><th colspan='6'>No Data Found</th></tr>";
                }
            ?>
        </table>
        <script type ="text/javascript">
            function confirmDelete(){
                if(confirm("Are you sure to delete this ")){
                    return true;
                }
            }
             

        </script>
    </body>
</html>