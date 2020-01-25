<?php

class DatabaseConnection {
    private $host;
    private $dbname;
    private $user;
    private $password;

    public $connection;

    public function __construct(array $config)
    {
        $this->host = $config['host'];
        $this->dbname = $config['dbname'];
        $this->user = $config['user'];
        $this->password = $config['password'];

        try {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8", $this->user, $this->password);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}

class ArticleRepository {
    private $databaseConnection;

    public function __construct(DatabaseConnection $databaseConnection)
    {
        $this->databaseConnection = $databaseConnection;
    }

    public function find ($id) {
        $query = $this->databaseConnection->connection->prepare("SELECT * FROM articles WHERE id = :id");
        $query->execute(array('id' => $id));
        $result = $query->fetch();
        $query->closeCursor();
        return $result;
    }
}

$dbConfigFileContent = file_get_contents('./config/db.json');
$db = new DatabaseConnection(json_decode($dbConfigFileContent, TRUE));
$articleRepo = new ArticleRepository($db);

// var_dump($articleRepo->find(2));