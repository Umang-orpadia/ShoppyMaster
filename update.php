
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    $fname = $_SESSION["fname"];
    $lname = $_SESSION["lname"];
    $mn = $_SESSION["mn"];
    $email = $_SESSION["email"];
    $address = $_SESSION["address"];
    ?>
    <div class="container"> <!-- Apply the container class -->
        <form action="Update1.php" method="post">
            <!-- username <input type="text" name="umname"><br> -->
            <label for="fname">Firstname:</label>
            <input type="text" name="fname" id="fname" value="<?php echo "$fname" ?>"><br>
            <label for="lname">Lastname:</label>
            <input type="text" name="lname" id="lname" value="<?php echo "$lname" ?>"><br>
            <label for="mn">Mobile no.:</label>
            <input type="text" name="mn" id="mn" value="<?php echo "$mn" ?>"><br>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" value="<?php echo "$email" ?>"><br>
            <label for="add">Address:</label>
            <input type="text" name="add" id="add" value="<?php echo "$address" ?>"><br>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
