<?php
require_once 'controllers/CustumerController.php';
$url = isset($_GET['url']) == true ? $_GET['url'] : "list";
// echo $url;

switch ($url) {
    case 'list':
        // dieu huong ve ham listProduct trong ProductController
        listCustumer();
        break;

    case "add_custumer":
        addCustumer();
        break;

    case "edit_custumer":
        editCustumer();
        break;
    case "update_custumer":
        updateCustumer();
        break;

    case "delete_custumer":
        deleteCustumer();
        break;
}
