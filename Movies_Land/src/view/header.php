<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="./public/js/script.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<header  style="background-color: #eee" >
    <nav> 
    <table>
    <tr>
        <td><div class="menu"><a href="?page=home" style="color: black">Home </a></div></td>
        <td style="padding: 5px"><div class="menu"><a href="?page=List" style="color: black" >Mes films </a></div></td>
        <td style="padding: 5px"><div class="menu"><a href="?page=newAd" style="color: black" >Ajouter un film </a></div></td>
        <td style="padding: 5px"><div class="menu"><a href="?page=search" style="color: black" >Catégorie </a></div></td>
        <td style="padding: 5px"><div class="menu"><a href="?page=Archive" style="color: black" >Archives </a></div></td>
        <td > </td>
    </tr>
    </table>
    </nav>
    
</header>
<h1><?php echo $this->title;?></h1>




<?php
?>