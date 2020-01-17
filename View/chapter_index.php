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
        while ($data = $chapters->fetch())
        {
        ?>
        <div class="news">
            <a href="/chapitres/<?php $data['id'] ?>">
                <h3>
                    <?php echo htmlspecialchars($data['title']); ?>
                </h3>
            </a>
            <p>
                aperçu : <?php
                echo($data['content']);
                ?>
            </p>
            <em><a href="#">Commentaires</a></em>
        </div>
        <?php
        }
        $chapters->closeCursor();
        ?>
    </body>
</html>