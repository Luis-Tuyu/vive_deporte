
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "vive_deporte";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Conneción fallida en concexion.php: %s\n", mysqli_connect_error());
    exit();
}
?>