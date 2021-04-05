<?php 
    include 'database/db.php';
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT");
    header("Access-Control-Allow-Headers: *");

    $data = json_decode(file_get_contents('php://input'), true);
    $db = new db('localhost','root','','userregister');
    if(!empty($data["username"])){
        $insert = $db->query("update users set username = '".$data["username"]."', password = '".$data["password"]."', name = '".$data["name"]."', phone = '".$data["phone"]."' where id = '".$data["id"]."'");
    }
?>