<?php
include_once 'config.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email =$_POST['email'];
$mobile = $_POST['mobile'];
$skill = implode(",", $_POST['skill']);
$salary = $_POST['salary'];
try {
    $sql_query = "INSERT INTO employees(first_name,last_name,email,mobile,skill,salary) VALUES('$first_name','$last_name','$email','$mobile','$skill','$salary')";
    $result_set = $connection->prepare($sql_query);

    if($result_set->execute()) {
      echo 'employee added successfully';
    } else {
        echo 'An error occurred';
    }
} catch (PDOException $exception) {
    echo $exception->getMessage();
}

