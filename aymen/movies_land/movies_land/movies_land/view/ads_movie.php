<?php
include(__DIR__ . "/header.php"); ?>

<div class="row row-cols-1 row-cols-md-4">
<?php

foreach ($this->moviesList as $movie): 
 ?> <div class="col mb-4">
<div class="card" >
<div class="card-headermovie">
<?= $movie['title'] ?>
</div>
<div class="card-body">
<h5 class="card-title"><?= $movie['title']?></h5>
<p class="card-text"><?= $movie['year'] ?></p>
<a href="?page=ad&id=<?= $movie['id'] ?>" class="btn btn-primary">Voir le film</a>
</div>
</div>
    </div>
<?php
endforeach; ?> 
</div>
<?php

include(__DIR__ . "/footer.php");