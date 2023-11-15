<?php
require_once "models/db.php";
class Customer extends db
{
    public function getCustomer()
    {
        $sql = "select * from customer";
        return $this->getData($sql);
    }
    public function addCustomer($name, $phone, $age)
    {
        $sql = "INSERT INTO customer (name,phone,age) VALUES ('$name', '$phone', '$age')";
        return $this->getData($sql);
    }
    public function updateCustomer($id, $name, $phone, $age)
    {
        $sql = "UPDATE customer SET name = '$name', phone ='$phone', age = '$age' WHERE id ='$id'";
        return $this->getData($sql);
    }
    public function deleteCustomer()
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM customer WHERE id =$id";
        $this->getData($sql, false);
    }
}
