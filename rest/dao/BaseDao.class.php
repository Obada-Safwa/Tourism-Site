<?php

require_once __DIR__."/../Config.class.php";

class BaseDao {

    private $conn;
    private $table_name;

    public function __construct($table_name) {

        $this->table_name = $table_name;
        $host = Config::DB_HOST();
        $dbname = Config::DB_SCHEMA();
        $username = Config::DB_USERNAME();
        $password = Config::DB_PASSWORD();
        $port = Config::DB_PORT();

        try {

            $this->conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname","$username","$password");

            // $this->conn->setAttribute(PDO::ATTR_ERRMODE , PDO:ERRMODE_EXCEPTION);

            // echo "Succes";
        }

        catch (PDOException $e) {

            echo "Failed" . $e->getmessage();

        }
    }

    public function get_all() {
        $sql = $this->conn->prepare("SELECT * FROM ". $this->table_name);
        $sql->execute();
        return $sql->fetchAll();
    }

    public function get_by_id($id,$id_column_name) {
        $stmt = "SELECT * FROM " .$this->table_name. " WHERE ${id_column_name} = :id";
        $stmt2= $this->conn->prepare($stmt);
        $stmt2->execute(array(":id" => $id));
        return $stmt2->fetchAll();
    }

    public function add($entity) {
        $query = "INSERT INTO " .$this->table_name. " (";
        foreach ($entity as $key => $value) {
            $query.= "$key , ";
        }
        $query = substr($query ,0, -2);
        $query.= ") VALUES (";
        foreach ($entity as $key => $value) {
            $query.= ":$key , ";
        }
        $query = substr($query ,0, -2);
        $query.= ")";

        $stmt = $this->conn->prepare($query);
        $stmt->execute($entity);
        // $entity['id'] = $this->conn->lastInsertId();
        // return $entity;
        return "DONE";
    }

    public function delete($id, $id_column_name) {
        $sql = $this->conn->prepare("DELETE FROM " .$this->table_name. " WHERE $id_column_name = :id");
        $sql->execute(array(":id" => $id));
        return "Deleted";
    }

    public function update($entity, $id, $id_column_name) {
        $sql = "UPDATE " .$this->table_name. " SET ";
        foreach ($entity as $key => $value) {
            $sql.= "$key = :$key , ";
        }
        $sql = substr($sql, 0, -2);
        $sql.= "WHERE $id_column_name = :id";
        $stmt = $this->conn->prepare($sql);
        $entity["id"] = $id;
        $stmt->execute($entity);
        return "Updated";
    }
}

?>