<?php 
    include 'database/db.php';
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: DELETE");
    header("Access-Control-Allow-Headers: *");

    $id = $_GET['id'];
    $db = new db('localhost','root','','userregister');
    $insert = $db->query("delete from users where ID = '".$id."'");
?>