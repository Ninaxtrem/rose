<?php
    session_start();
    include "config.php";

    if(isset($_POST['email']) && isset($_POST['psword'])){


        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['psword']);

        $check = $bdd->prepare('SELECT * FROM admin');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if($data['admin_password'] === $password)
                {
                    $_SESSION['admin'] = $data['admin_name'];
                    header('Location:crud.php');
                }else header('Location:connex_admin.php?login_err=password');
            }else header('Location:connex_admin.php?login_err=email');
        }else header('Location:connex_admin.php?login_err=already');
    }else header('Location:connex_admin.php');
?>