<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start(); /*This is where the login part start*/
    $username = $_GET["username"]; /*All the user input will be saved in these variables*/
    $pass = $_GET["sandi"];
    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal"); 
    mysqli_select_db($conn, "percobaan7");
    $query = "SELECT * FROM `login` WHERE Username='$username' AND Password='$pass'"; /*This syntax is used for checking data, does the data exist in database or not*/
    $hasil = mysqli_query($conn, $query);
    if (mysqli_num_rows($hasil) == 1) { /*If there's a result from the syntax, it will automatically move to main.php*/
        header('Location:main.php');
        $_SESSION['user'] = $username; /*$_SESSION will be taking $username value*/
        exit;
    }
    else {
        echo "Account is not available";
    }
    ?>
</body>
</html>