<?php
session_start();
    if(isset($_POST)){
        $username=$_POST['username'];
        $password=$_POST['password'];
        include "db.php";
        $query="SELECT password FROM user WHERE username='$username'";
        $result=$connection->query($query);
        if ($result->num_rows>0){
            while ($row=$result->fetch_assoc()){
                if ($row['password']==$password){
                    $_SESSION['username']=$username;
                    header("location:..\dashboard.php");
                    exit();
                }else{
                    $_SESSION['failureMessage']="Username or password is incorrect";
                    header("location:..\index.php");
                    exit();
                }
                break;
            }
        }else{
            $_SESSION['failureMessage']="Username or password is incorrect";
            header("location:..\index.php");
            exit();
        }
    }else{
        $_SESSION['failureMessage']='Fill all details first.';
        header("location:..\index.php");
        exit();
    }

