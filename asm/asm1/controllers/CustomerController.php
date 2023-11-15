<?php
require_once "models/Customer.php";
class CustomerController
{
    public function listCustomer()
    {
        $customer = new Customer();
        $customer = $customer->getCustomer();
        include "views/customer/listCustomer.php";
    }
    public function addCustomer()
    {
        if (isset($_POST['add']) && ($_POST['add'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $age = $_POST['age'];

            $customer =  new Customer();
            $customers = $customer->addCustomer($name, $phone, $age);
            header("location: ?url=/");
        }
        include "views/customer/addCustomer.php";
    }
    public function editCustomer()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $sql = "select * from customer where id = '$id'";
            $customer = new Customer();
            $customer = $customer->pdo_query_one($sql);
            //     $rows = 
            // var_dump(edit($id))
        }
        include "views/customer/editCustomer.php";
    }
    public function updateCustomer()
    {
        if (isset($_POST['gui'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $age = $_POST['age'];
            $customer = new Customer();
            $customer = $customer->updateCustomer($name, $phone, $age, $id);
            header('location: index.php?url=');
            //$rows
        } else {
            include "views/customer/editCustomer.php";
        }
    }
    public function removeCustomer()
    {
        $customer = new Customer();
        $customer->deleteCustomer();
        header("location: ?url=/");
    }
}
