<?php

session_start();
if (isset($_SESSION['username'])){
        if (isset($_POST)){
            $postId=$_POST['postId'];
            include "db.php";

            $query="DELETE FROM posts where post_id='$postId'";
            $result=$connection->query($query);
            $_SESSION['successMessage']="Blog Post deleted successfully.";
            header("location:../dashboard.php");
            exit();
        }

}else{
    $_SESSION['failureMessage']="Login First.";
    header("../index.php");
    exit();
}