<?php
    session_start();
    include "mesFonctionsSQL.php";

    if(isset($_POST['admin_mail'])&& !emtpy($_POST['admin_mail']) && isset($_POST['admin_password']) && !empty($_POST['admin_password'])){

        

        $email = htmlspecialchars($_POST['admin_mail']);
        $password = htmlspecialchars($_POST['admin_password']);

        $check = $bdd->prepare('SELECT * FROM admin WHERE admin_mail = :admin_mail AND admin_password = :admin_password');
        $check->execute(array(
            ":admin_mail" => $email,
            ":admin_password" => $password
        ));
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