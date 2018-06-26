
<?php
/**
 * Created by PhpStorm.
 * User: Noron
 * Date: 16/06/2018
 * Time: 17:32
 */

$servername = "localhost";
$username = "root";
$password = "blop";
$dbname = "trumpbox";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion " . $conn->connect_error);
}

$mail = "SELECT USE_MAIL FROM USER";

$datesound = "SELECT SO_DATE FROM SOUND";

$datemove = "SELECT MO_DATE FROM MOVE";

$conn->close();
