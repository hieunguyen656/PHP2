<?php
require_once "env.php";
class db
{
    public $connect;
    public function __construct()
    {
        $this->connect = new PDO(
            "mysql:host=" . DBHOST
                . ";dbname=" . DBNAME
                . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
    }
    public function getData($query, $getAll = true)
    {
        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }
    public function pdo_query_one($sql)
    {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $stmt = $this->connect->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            throw $e;
        } finally {
            unset($connect);
        }
    }
}
