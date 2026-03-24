<?php
session_start();
if (!isset($_SESSION['isloggedIn']) || $_SESSION['isloggedIn'] != "1") {
    header("Location: login.php");
    exit();
}
include("database.php");

$query = "SELECT * FROM users";
$res = mysqli_query($conn, $query);
?>

<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h3>Dashboard page</h3>
    <a href="logout.php">Logout</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($res)) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>Edit | Delete</td>
                <td> <a href="user_edit.php?id=<?php echo $row ['id'] ?>">Edit</td>
            </tr>
        <?php
        }
        else{
            echo "<tr><td colspan ='6'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>