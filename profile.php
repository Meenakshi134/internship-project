<?php
include 'db.php';

if (!isset($_GET['id'])) {
    echo "No user selected";
    exit;
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
$user = mysqli_fetch_assoc($result);

if (!$user) {
    echo "User not found";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>

<h2>User Profile - Detailed View</h2>

<p><b>ID:</b> <?php echo $user['id']; ?></p>
<p><b>Name:</b> <?php echo $user['name']; ?></p>
<p><b>Email:</b> <?php echo $user['email']; ?></p>

<hr>

<h3>Profile Summary</h3>

<p>
This page displays the complete profile information of the selected user.
It helps to view user details, activity summary, and basic statistics in a
single place.
</p>
<a href="index.php">⬅ Back</a>

</body>
</html>