<!-- Create a form accepting username and password. Using PHP, connect to a database, and insert the data recieved from the user.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include '_dbconnect.php'; ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username) || empty($password)) {
            die("Username and password are required.");
        }

        $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `user` (`user_pass`, `user_name`) VALUES ('$hashed_pass', '$username');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            die("You are registered successfully");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>

    <form action="index.php" method="post">
        <label>Username:</label>
        <input type="text" id="username" name="username">
        <br><br>
        <label>Password:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" value="Register">
    </form>
</body>

</html>