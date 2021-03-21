<?php
if (!empty($_GET['id'])) {
    // require connection
    require_once 'config.php';

    $s_id = $_GET['id'];
    $del_query = "DELETE FROM `employees` WHERE id = '" . $s_id . "'";
    $result = mysqli_query($link, $del_query);
    if ($result) {
        header('location:index.php?msg=del');
    }
}