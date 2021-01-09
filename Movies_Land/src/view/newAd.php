<?php
include(__DIR__."./header.php");
?>

<form action="?page=newAd" method="post">
    <div class="form_group">
        <label for="title">Nom du film</label>
        <input type="text" name="title" class="form-control" id="title" required>
    </div>

    <div class="form_group">
        <label for="title">Séléctionnez la catégorie</label>
        <input type="text" name="title" class="form-control" id="title" required>
    </div>
    
    <div class="form_group">
        <label for="url">Affiche du film</label>
        <input type="text" name="url" class="form-control" id="url" required>
    </div>
    <div class="form_group">
        <label for="date">Année du film</label>
        <input type="number" name="date" class="form-control" id="date" required>
    
    <input type="hidden" name="type" value="signup">
    <button type="submit" class="btn btn-primary">ajouter un film</button>
</form>
<?php
if(!is_null($this->alertPublic)){
    echo $this->alertPublic;
}
include(__DIR__."./footer.php");
?>