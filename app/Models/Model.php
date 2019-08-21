<?php

namespace App\Models;

abstract class Model
{
    private $host = HOST;
    private $user = USER;
    private $pass = PASS;
    private $dbsa = DATABASE;

    protected $table = null;
    private $connection = null;

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        $conn = $this->connect();
        $read = $conn->prepare($sql);
        $read->setFetchMode(\PDO::FETCH_ASSOC);

        try {
            $read->execute();
            return $read->fetchAll();
        } catch (\PDOException $e) {
            echo "Falha na busca: " . $e->getMessage();
            return null;
        }
    }

    public function find($id)
    {
        if ($id) {
            $sql = "SELECT * FROM {$this->table} WHERE id = {$id}";
            $conn = $this->connect();
            $read = $conn->prepare($sql);
            $read->setFetchMode(\PDO::FETCH_OBJ);

            try {
                $read->execute();
                return $read->fetchObject();
            } catch (\PDOException $e) {
                echo "Falha na busca: " . $e->getMessage();
                return null;
            }
        }
        return false;
    }

    public function where($sql)
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM {$this->table} WHERE " . $sql;
        $read = $conn->prepare($sql);
        $read->setFetchMode(\PDO::FETCH_ASSOC);

        try {
            $read->execute();
            return $read->fetchAll();
        } catch (\PDOException $e) {
            echo "Falha na busca: " . $e->getMessage();
            return null;
        }
    }

    public function read($sql)
    {
        $conn = $this->connect();
        $read = $conn->prepare($sql);
        $read->setFetchMode(\PDO::FETCH_ASSOC);

        try {
            $read->execute();
            return $read->fetchAll();
        } catch (\PDOException $e) {
            echo "Falha na busca: " . $e->getMessage();
            return null;
        }
    }


    public function deleteCustom($termos)
    {
        $delete = "DELETE FROM {$this->table} WHERE  {$termos}";
        $conn = $this->connect();
        $delete = $conn->prepare($delete);

        try {
            $delete->execute();
            return true;
        } catch (\PDOException $e) {
            echo "Falha ao apagar o registro: " . $e->getMessage();
            return false;
        }
    }

    public function delete($id)
    {
        $delete = "DELETE FROM {$this->table} WHERE  id = {$id}";
        $conn = $this->connect();
        $delete = $conn->prepare($delete);

        try {
            $delete->execute();
            return true;
        } catch (\PDOException $e) {
            echo "Falha ao apagar o registro: " . $e->getMessage();
            return false;
        }
    }


    public function update(array $dados, $id)
    {
        foreach ($dados as $key => $value) {
            $places[] = $key . ' = :' . $key;
        };

        $places = implode(', ', $places);
        $update = "UPDATE {$this->table} SET {$places} WHERE  id = {$id}";

        $conn = $this->connect();
        $update = $conn->prepare($update);

        try {
            $update->execute($dados);
            return true;
        } catch (\PDOException $e) {
            echo "Falha ao inserir na tabela: " . $e->getMessage();
            return false;
        }
    }


    public function create(array $dados)
    {
        $fileds = implode(', ', array_keys($dados));
        $places = ':' . implode(', :', array_keys($dados));
        $create = "INSERT INTO {$this->table} ({$fileds}) VALUES ({$places})";

        $conn = $this->connect();
        $create = $conn->prepare($create);

        try {
            $create->execute($dados);
            return $conn->lastInsertId();
        } catch (\PDOException $e) {
            echo "Falha ao inserir na tabela: " . $e->getMessage();
            return null;
        }
    }

    private function connect()
    {
        try {
            if (is_null($this->connection)):
                $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbsa;
                $options = [\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                $this->connection = new \PDO($dsn, $this->user, $this->pass, $options);
            endif;
        } catch (\PDOException $e) {
            echo "Falha na conexão: " . $e->getMessage();
            die;
        }

        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $this->connection;
    }
}
