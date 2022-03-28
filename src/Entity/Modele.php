<?php
abstract class Modele
{
    protected $conn;
    protected $table;

    public  function __construct()
    {
        include __DIR__ . '/../../src/Database.php';
        $this->conn = Database::getPdo();
    }



    public function findAll()
    {

        $sql = "SELECT * from $this->table";
        $resultat = $this->conn->query($sql);

        $tab = $resultat->fetchAll();
        var_dump($tab);
    }

    public function findOne($id)
    {

        $sql = "SELECT * FROM $this->table WHERE id=$id";
        $resultat = $this->conn->query($sql);

        $tab = $resultat->fetchAll();
        var_dump($tab);
    }

    public function deleteOne($id)
    {

        $sql = "DELETE FROM $this->table WHERE id=$id";
        $resultat = $this->conn->query($sql);

        $tab = $resultat->fetchAll();
        var_dump($tab);
    }
}
