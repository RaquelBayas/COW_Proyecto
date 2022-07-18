<?php
    require_once 'config.php';

    if(isSet($_SESSION['email'])) {
        header("Location: private.php");
        exit;
    }

    if(isSet($_POST['submit'])){
        $do_login = true;
        include_once 'servidor_login.php';
    }

    /*
    $email = $_GET['email'];
    $password = $_GET['password'];
    

    if(!valid_email($email)){
        echo "Correo electrónico inválido.";
    }
            
    function valid_email($email){
        return (!preg_match("/^([a-z\+_\-]+)*@([a-z\-]+\.)+[a-z]{2,3}$/ix", $email)) ? FALSE : TRUE;
    }

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
            }
        }
        if ($okay) {
            echo "Usuario registrado";
        } else {
            echo "Usuario no registrado";
        }

    
        }catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
*/

?>