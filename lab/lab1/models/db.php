<?php
require_once "env.php";
// tạo kết nối từ project php sang mysql
 function getConnect(){
        $connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        return $connect;
 }



// nếu như dùng để lấy danh sách thì sẽ truyền true còn truyền false thì
//sẽ chạy được các câi truy vấn như thêm sửa xóa
function getData($query, $getAll = true){
        $conn = getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }

        return $stmt->fetch();
 }
 function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = getConnect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

?>