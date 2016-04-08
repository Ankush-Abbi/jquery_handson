<?php
include_once 'config.php';
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email =$_POST['email'];
$mobile = $_POST['mobile'];
$skill = implode(",", $_POST['skill']);
$salary = $_POST['salary'];
$sql_query = "UPDATE
                employees
                set
                first_name = '".$first_name ."', last_name = '".$last_name."', email = '".$email."', mobile = '".$mobile."', skill = '".$skill."',salary = '".$salary."'
                Where id = '". $id."'";
$result_set = $connection->prepare($sql_query);
$result_set->execute();