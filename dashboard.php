<?php
include("database.php");
session_start();
if(!(isset($_SESSION['isloggedIn']))){
    header("Location:logout.php");
}

$query = "select * from users";
$res = mysqli_query($conn,$query);
$cnt = mysqli_num_rows($res);
?>
<html>
    <head>
        <title>Dashboard Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>
        <a href="logout.php" class="btn btn-warning">Logout</a>
        <h3>Users List</h3>
        <table border="1" class="table table-striped" style="width:100%">
            <tr>
                <th>#</th><th>Username</th><th>Contact</th><th>Email</th><th>Password</th><th>Actions</th>
            </tr>
            <?php
                if($cnt > 0){
                    $i=1;
                    while($row = mysqli_fetch_assoc($res)){
<<<<<<< HEAD
                        $id = $row['id'];
                        $username = $row['username'];
=======
>>>>>>> f69271eda5e1ff414df6a1a22f677b1d475bd37c
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['password']; ?></td>
<<<<<<< HEAD
                            <td>
                                <a href="user_edit.php?id=<?php echo base64_encode(base64_encode($row['id'])) ?>">Edit</a> 
                                <a href="javascript:void(0)" onclick="confirmDelete('<?php echo base64_encode($id);  ?>','<?php echo $username ?>')">Delete</a>
                            </td>
=======
                            <td><a href="user_edit.php?id=<?php echo base64_encode(base64_encode($row['id'])) ?>">Edit</a> Delete</td>
                            <a href=></a>
>>>>>>> f69271eda5e1ff414df6a1a22f677b1d475bd37c
                        </tr>
                        <?php
                    }
                }
                else{
                    echo "<tr><th colspan='6'>No Data Found</th></tr>";
                }
            ?>
        </table>
<<<<<<< HEAD
        <script type="text/javascript">
            function confirmDelete(id,name){
                if(confirm("Are you sure you want to Delete User "+name+"?")){
                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: 'action.php',
                        data: { action: '<?php  echo base64_encode("btnaAjax") ?>', action1:'<?php echo base64_encode("deleteUser") ?> ',user_id: id },
                        success:function(response){
                            if(response == "Success"){
                                window.location.href='dashboard.php';
                            }
                            else if(response == "Fail"){

                            }
                            else if(response == "NoUserFound"){

                            }
                            else if(response == "NoDataFound"){

                            }
                        }});
                }
            }
=======
        <script type ="text/javascript">
            function confirmDelete(){
                if(confirm("Are you sure to delete this ")){
                    return true;
                }
            }
             

>>>>>>> f69271eda5e1ff414df6a1a22f677b1d475bd37c
        </script>
    </body>
</html>