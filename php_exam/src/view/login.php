<?php
include(__DIR__."./header.php");

?>

<h2>Connexion:</h2>
<form action="?page=login"method="post"> 
    <div class="form-group">
        <label for="email1">Email</label>
        <input type="email1" name="email1" class="from-control" id="pswd1"
                placeholder="Password" required>
    </div>

    <input type="hidden" name="type" value="signin">

    <button type="submit" class="btn btn-primary">connexion</button>

</form>

<h2>Création de compte :</h2>
<form action="?page=login" method="post">
    <div class="form-group">
        <label for="email2">Email</label>
        <input type="email" name="email" class="form-control" id="email2"
                placeholder="Enter Email" required>
    </div>
    <div class="form-group">
        <label for="pswd2">password</label>
        <input type="password" name="password" class="for-control" id="pswd2" placeholder="Password"required>

    </div>

    <input type="hidden" name="type" value="signup">

    <button type="submit" class="btn btn-primary">créer un compte</button>
</form>
<?php

include(__DIR__."./footer.php");