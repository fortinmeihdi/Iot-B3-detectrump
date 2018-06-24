<?php
/**
 * Created by PhpStorm.
 * User: Noron
 * Date: 23/06/2018
 * Time: 16:26
 */
$db = mysqli_connect('localhost', 'root', '', 'trumpbox');
$email =  mysqli_real_escape_string($db, $_POST['email']);
$pwd = mysqli_real_escape_string($db, $_POST['pwd']);

if (empty($email)) { array_push($errors, "Une adresse mail est requis"); }
if (empty($pwd)) { array_push($errors, "Un mot de passe est requis"); }

$pwd = md5($pwd);

$query = "INSERT INTO user (use_mail, use_password) 
  			  VALUES('$email', '$pwd')";
mysqli_query($db, $query);
$_SESSION['username'] = $email;
$_SESSION['success'] = "Vous êtes maintenant inscrit";
?>

