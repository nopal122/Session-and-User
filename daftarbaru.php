<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan hasil pendaftaran baru</title>
</head>
<body>
    <?php
    $nama = $_GET["namabaru"]; /* This is the beginning of registering, this is where the variable will be saved */
    $pass = $_GET["passwordbaru"];
    $checkpass = $_GET["retypepassword"];
    $gender = $_GET["gender"];
    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal"); 
    mysqli_select_db($conn, "percobaan7");
    $sqlstr="INSERT INTO `login` (Username , Password, Gender) VALUE ('$nama','$pass','$gender')"; /* This syntax is used to save all the input user to your database */
    $hasil = mysqli_query($conn, $sqlstr);
    if ($hasil) {                           /* Using this a must for those of you who wants to connect your PHP with database */
        echo "Your data has been saved";    /*  This will be helpful for checking does your database is connected or not */
    }
    else {
        mysqli_error($conn);
        echo "Error";
    }
    echo "<br>";
    echo "User berhasil terdaftar"; 
    ?>
</body>
</html>