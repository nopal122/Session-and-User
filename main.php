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
    session_start();
    if (!isset ($_SESSION['user'])) {
        header('Location:tampilanpermasalahan.html');
        exit;
    }
    else {
        echo "Login anda : ".$_SESSION['user']; /*The previous $_SESSION will be printed in this page, which is the value of $username*/
        echo "<br>";
        echo "Ini adalah halaman utama";
        echo "<br>";
    }
    echo "<a href='tampilanpermasalahan.html'>Logout</a>"; /*When user press log out, they will be moved to the main page*/
    session_destroy();
    ?>
</body>
</html>