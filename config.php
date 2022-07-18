<?php
    session_start(); // Start Session
    header('Cache-control: private');

    $email = isSet($_POST['email']);
    $password = isSet($_POST['password']);

    $servername = "localhost";
    $dbname = "simpsons";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        try{
        //$sql = "INSERT INTO students (name,email)
        //VALUES('$nombre','$email')";
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);
        $okay=False;
        foreach($result as $row) {
            if (($row['email'] == $email) && ($row['password'] == $password)) {
                $okay = True;
                $config_email = $row['email'];
                $config_password = $row['password'];
            }
        }
        }catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    //$config_email = 'lisa@fox.com';
    //$config_password = 'vegan';
    $cookie_name = 'siteAuth';
    $cookie_time = (3600 * 24 * 30); // 30 days
    
    if(!isSet($_SESSION['email'])){
        include_once 'autologin.php';
    }
?>