
<?php
/**
 * Created by PhpStorm.
 * User: Noron
 * Date: 16/06/2018
 * Time: 17:32
 */

$servername = "localhost";
$username = "nom de compte";
$password = "mot de passe";
$dbname = "nom database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion " . $conn->connect_error);
}

$mail = "SELECT use_mail FROM user ";

$datesound = "SELECT so_date FROM sound";

$datemove = "SELECT mo_date FROM move";

$conn->close();
