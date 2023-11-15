<?php
include_once "controllers/CustomerController.php";
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        $customerController = new CustomerController();
        echo $customerController->listCustomer();
        break;
    case 'add-customer':
        $customerController = new CustomerController();
        echo $customerController->addCustomer();
        break;
    case 'edit-customer':
        $customerController = new CustomerController();
        echo $customerController->editCustomer();
        break;
    case 'remove-customer':
        $customerController = new CustomerController();
        echo $customerController->removeCustomer();
        break;
}
