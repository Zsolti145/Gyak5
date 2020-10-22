<?php session_start();
if (!isset($_SESSION["logged-in"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class="box" action="inc/logout.inc.php" method="POST">
        <input type="submit" value="Log out">
        <input type="button" onclick="showInput()" value="back">
        
    </form>

    <div class="box" id="input-field">
        <label for="input">User: <?php echo $_SESSION["user"]; ?></label>
        <input type="text" id="input" placeholder="Input text">
        <input type="email" name="" id="">
        <input type="submit" onclick="showAlert()" value="Show Alert">
        
        <input type="button" onclick="hideInput()" value="Log out">
    </div>

</body>
<script src="alert.js"></script>
<script src="input.js"></script>

</html>