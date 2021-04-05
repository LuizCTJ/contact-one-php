<?php 
    include 'database/db.php';
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: *");

    $db = new db('localhost','root','','userregister'); 
    $users = $db->query('SELECT * FROM users')->fetchAll();
    echo json_encode($users,true);
?>