<!doctype html>
<html lang="fr">
<head>
    <script src="/view/public/style/js/script.js"></script>
    <meta charset="UTF-8">
    
    <title>Movies Land</title>
    <link rel="stylesheet" href="./src/public/style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<header>
    <nav>
        <div class="menu"><a href="?page=home">Home</a></div>
        <div class="menu"><a href="?page=ads">Voir les films</a></div>
        <div class="menu"><a href="?page=newAd">Ajouter un film</a></div>
        <div class="menu"><a href="?page=search">recherche</a></div>

    </nav>
</header>

<h1><?php echo $this->title;?></h1>



