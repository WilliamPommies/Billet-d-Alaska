<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Billets Simples pour l'Alaska</title>
        <link href="Public/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Billets Simples pour l'Alaska !</h1>
        <p>Les derniers chapitres :</p>
 
        
        <?php
        while ($donnees = $req->fetch())
        {
        ?>
        <div class="news">
            <a href="/chapitres/<?php $donnees['id'] ?>">
                <h3>
                    <?php echo htmlspecialchars($donnees['title']); ?>
                </h3>
            </a>
            <p>
                aperçu : <?php
                echo($donnees['content']);
                ?>
            </p>
            <em><a href="#">Commentaires</a></em>
        </div>
        <?php
        }
        $req->closeCursor();
        ?>
    </body>
</html>