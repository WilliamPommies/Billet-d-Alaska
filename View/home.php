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
        require "./Model/model.php";
        while ($articleRepo)
        {
            ?>
            <div class="news">
                <a href="view/article.php">
                    <h3>
                        <?php echo htmlspecialchars($articleRepo['title']); ?>
                    </h3>
                </a>
                <p>
                    aperçu : <?php
                    echo($articleRepo['content']);
                    ?>
                </p>
                <em><a href="view/comments.php">Commentaires</a></em>
            </div>
            <?php
        }
    
        ?>
    </body>
</html>