<?php
/**
 * Created by PhpStorm.
 * User: Noron
 * Date: 23/06/2018
 * Time: 15:52
*/
$db = mysqli_connect('localhost', 'root', '', 'trumpbox');
$email =  mysqli_real_escape_string($db, $_POST['email']);
$pwd = mysqli_real_escape_string($db, $_POST['pwd']);

if (empty($email)) {
    array_push($errors, "Adresse email requise");
}
if (empty($pwd)) {
    array_push($errors, "Mot de passe requis");
}

$pwd = md5($pwd);
$query = "SELECT * FROM user WHERE email='$email' AND pwd='$pwd'";
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $email;
    $_SESSION['success'] = "Vous êtes maintenant connecté";
    header('localhost/Iot/tab.html');
    }
?>