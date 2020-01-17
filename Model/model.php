<?php 


function getChapters()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $chapters = $bdd->query('SELECT id, title, content FROM articles ORDER BY id DESC');

    return $chapters;

}

function getComments()
{
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $comments = $bdd->query('SELECT id, username, comment FROM commentaires ORDER BY id DESC');

    return $comments;
}