<?php 
    if(isSet($cookie_name)) {
        // Check if the cookie exists
        if(isSet($_COOKIE[$cookie_name])) {
            parse_str($_COOKIE[$cookie_name]);
            if(($usr == $config_email) && ($hash == md5($config_password))) {
                $_SESSION['email'] = $config_email;
            }

        }
    }

?>