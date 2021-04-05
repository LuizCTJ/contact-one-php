<?php 
    include 'database/db.php';
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: *");

    $data = json_decode(file_get_contents('php://input'), true);
    $db = new db('localhost','root','','userregister');
    if(!empty($data["username"])){
        $insert = $db->query("insert into users (username, password, name, phone) values ('".$data["username"]."','".$data["password"]."','".$data["name"]."','".$data["phone"]."')");
    }
    echo $db->lastInsertID();
?>
