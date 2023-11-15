<?php
require_once "models/db.php";
function getProduct()
{
    $sql = "SELECT * FROM product";
    return getData($sql);
}
