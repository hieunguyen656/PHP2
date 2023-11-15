<?php
require_once "models/Custumer.php";

function listCustumer()
{
    $custumer = getCustumer();
    include_once "views/custumer/list.php";
}
function addCustumer()
{
    if (isset($_POST['gui'])) {
        $ten_kh = $_POST['ten_kh'];
        $tuoi = $_POST['tuoi'];
        add($ten_kh, $tuoi);
        header("location: index.php?url=list");
    }
    include "views/custumer/add.php";
}

function editCustumer()
{
    if (isset($_GET['id']) && ($_GET['id']) > 0) {
        $id = $_GET['id'];
        $sql = "select * from custumer where id = '$id'";
        $rows =  pdo_query_one($sql);
    }
    include "views/custumer/edit.php";
}
function updateCustumer()
{

    if (isset($_POST['gui'])) {
        $id = $_POST['id'];
        $ten_kh = $_POST['ten_kh'];
        $tuoi = $_POST['tuoi'];
        update($ten_kh, $tuoi, $id);
        // header('location: index.php?url=list');
    }

    $custumer = getCustumer();
    include "views/custumer/list.php";
}

function deleteCustumer()
{
    if (isset($_GET['id']) && ($_GET['id']) > 0) {
        $id = $_GET['id'];
        delete($id);
    }
    header("location: index.php?url=list");
    // include_once "views/custumer/add.php";
}
