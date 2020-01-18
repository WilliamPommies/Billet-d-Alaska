<?php



// class ArticleRepository {
//     private $databaseConnection;

//     public function __construct(DatabaseConnection $databaseConnection)
//     {
//         $this->databaseConnection = $databaseConnection;
//     }

//     public function find ($id) {
//         $query = $this->databaseConnection->connection->prepare("SELECT * FROM articles WHERE id = :id");
//         $query->execute(array('id' => $id));
//         $result = $query->fetch();
//         $query->closeCursor();
//         return $result;
//     }
// }

// $dbConfigFileContent = file_get_contents('./config/db.json');
// $db = new DatabaseConnection(json_decode($dbConfigFileContent, TRUE));
// $articleRepo = new ArticleRepository($db);

// var_dump($articleRepo->find(1));


require_once('Controller/Router.php');

$router = new Router();
$router->routePath();