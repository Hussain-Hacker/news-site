<?php
    include "config.php";
    if($_SESSION['user_role'] == '0') {
        header("Location: {$hostname}/post.php");
    }
    $cat_id = $_GET["id"];

    $sql = "DELETE FROM category WHERE category_id = '{$cat_id}'";

    if(mysqli_query($conn, $sql)) {
        header("Location:{$hostname}/category.php");
    }

    mysqli_close($conn);
?>