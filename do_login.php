<?php
    if(!$do_login) exit;
    // declare post fields
        $post_email = trim($_POST['email']);
        $post_password = trim($_POST['password']);
        $post_autologin = $_POST['autologin'];
        if(($post_email == $config_email) && ($post_password == $config_password)) {
            $login_ok = true;
            $_SESSION['email'] = $config_email;
            if($post_autologin == 1) {
                $password_hash = md5($config_password); // will result in a 32 characters hash
                setcookie ($cookie_name, 'usr='.$config_email.'&hash='.$password_hash, time() + $cookie_time);
            }
        header("Location: private.php");
        exit;
    }
?>
