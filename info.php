<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detectrump : info </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">
        <img src="téléchargement.jpeg" alt="Logo" style="width:40px;">
    </a>
    <a class="nav-link" href="#">Deconnexion</a>
</nav>

<h5>Compte actuel : </h5>
<?php
 $mail = "SELECT use_mail FROM user ";
 echo $mail;
?>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>Type détecter</th>
        <th>Date</th>
    </tr>
    </thead>
    <?php
    $datesound = "SELECT so_date FROM sound";

    $datemove = "SELECT mo_date FROM move";
    ?>
    <tbody>
    <tr>
        <td>
            <?php
             echo "son ou mouvement"
            ?>
        </td>
        <td>
            <?php
            echo "date"
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "son ou mouvement"
            ?>
        </td>
        <td>
            <?php
            echo "date"
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "son ou mouvement"
            ?>
        </td>
        <td>
            <?php
            echo "date"
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "son ou mouvement"
            ?>
        </td>
        <td>
            <?php
            echo "date"
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
            echo "son ou mouvement"
            ?>
        </td>
        <td>
            <?php
            echo "date"
            ?>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>