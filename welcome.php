<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body class="welcome">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "<br> to <a>wowFood</a> Food Ordering Website!</h1>"; ?>
    <div><br><br><br><br><br><br><br><br><br>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>