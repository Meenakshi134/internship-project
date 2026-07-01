<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>

<h2>User List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td>
            <a href="profile.php?id=<?php echo $row['id']; ?>">
                View Profile
            </a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>