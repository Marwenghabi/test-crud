<?php

if (isset($_GET['id'])) {
    require_once "config.php";

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM employees WHERE id=$id";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: read.php");
    }
} else if (isset($_POST['update'])) {
    include "../config.php";

  /*  function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_POST['id']);
    $name = validate($_POST['name']);
    $address = validate($_POST['address']);
    $salary = validate($_POST['salary']);*/
    if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
        $salary = $_POST['salary'];
   /* if (isset($_POST['update'])) {
    if (empty($id)) {
        header("Location: ../update.php?id=$id&error=salary is required");
    } else {*/

        $sqll = "UPDATE employees
               SET name='$name',address='$address',salary='$salary'
               WHERE id=$id ";
        $result = mysqli_query($link, $sqll);
        $_SESSION['message'] = "Address updated!"; 
       // if ($result) {
            header("Location: ../index.php?success=successfully updated");
       /* } else {
            header("Location: ../update.php?id=$id&error=unknown error occurred&$employee_data");
        }*/
    }
} else {
    header("Location: read.php");
}