<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Details de la page</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Back Office</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="?a=lister">Pages</a></li>
                <li class="active"><a href="?a=ajouter">Ajouter une page</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php
if(count($_POST) === 0) {
?>
    <!-- afficher le form -->
    <div class="container theme-showcase" role="main">
        <h1>Ajouter une page</h1>
        <form action="" method="post">
            <h4><label for="slug">Slug</label></h4><input id="slug" name="slug" type="text">
            <h4><label for="title">Title</label></h4><input id="title" name="title" type="text">
            <h4><label for="body">Body</label></h4><textarea id="body" name="body">
                <div class="jumbotron">
                    <h1>Default</h1>
                    <p>Default</p>
                    <span class="label label-success">default</span>
                </div>
            </textarea>
            <br><input class="btn btn-success" type="submit" value="Ajouter la page">
        </form>
    </div>
<?php
} else {

    // traitement de la form
?>
    <div class="container alert alert-info">
        <p><strong>Succes !</strong> La page a ete ajoutee avec succes.</p>

        <a class="btn btn-default" href="index.php">Retour a l'accueil</a>
        <br>
    </div>
<?php


}?>

</body>
</html>
