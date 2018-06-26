<?php
require('data.php');

$db = mysqli_connect($servername, $username, $password, $dbname);
$email =  mysqli_real_escape_string($db, $_POST['email']);
$pwd = mysqli_real_escape_string($db, $_POST['pwd']);

if (empty($email)) { array_push($errors, "Une adresse mail est requis"); }
if (empty($pwd)) { array_push($errors, "Un mot de passe est requis"); }

$pwd = md5($pwd);

$query = "INSERT INTO USER (USE_MAIL, USE_PASSWORD) 
  			  VALUES('$email', '$pwd')";
mysqli_query($db, $query);
$_SESSION['username'] = $email;
$_SESSION['success'] = "Vous êtes maintenant inscrit";
PRINT('<meta http-equiv="refresh" content="2;url=tab.html" />');
?>

