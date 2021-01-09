<?php

include(__DIR__ . "/header.php");
?>

    <form action="?page=newAd" method="post">

    <div class="form-group">
            <label for="title">Titre du film</label>
            <input type="text" name="title" class="form-control" id="title"
                   required>
        </div>

    <div class="form-group">
            <label for="img">Imgage du film</label>
            <input type="text" class="form-control" name="img" id="img">
        </div>

        <div class="form-group">
            <label for="year">année de production</label>
            <input type="text"   name="year" class="form-control" id="year">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter un film</button>
    </form>

<?php
include(__DIR__ . "/footer.php");