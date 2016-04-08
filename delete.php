<?php
include_once 'config.php';

if($_POST['id'])
{
    $id = $_POST['id'];
    $sql_query= "DELETE FROM employees WHERE id=:id";
    $result_set=$connection->prepare($sql_query);
    $result_set->execute(array(':id'=>$id));
}
