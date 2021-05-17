<?php

    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];
    $dni = $_GET['dni'];
    $email = $_GET['email'];
    $entrada = $_GET['entrada'];
    $salida = $_GET['salida'];
    $hotel = $_GET['hotel'];
    $tipo_hab = $_GET['tipo_hab'];
    $habitaciones = $_GET['habitaciones'];
    $adultos = $_GET['adultos'];
    $niños = $_GET['niños'];
    
    
    if(!valid_nombre($nombre)){
        echo "Nombre inválido.";
    }
            
    function valid_nombre($nombre){
        return (!preg_match("/^[a-zA-Zá-úÁ-Úà-ùÀ-Ù]{2,}+(\s[a-zA-Zá-úÁ-Úà-ùÀ-Ù]{2,})?$/ix", $nombre)) ? FALSE : TRUE;
    }
    
    if(!valid_apellidos($apellidos)){
        echo "Apellidos inválidos.";
    }

    function valid_apellidos($apellidos){
        return (!preg_match("/^[a-zA-Zá-úÁ-Ú]{2,}+((\s[a-zA-Zá-úÁ-Ú]{2,})*)+(\s[a-zA-Zá-úÁ-Ú]{2,})*$/", $apellidos)) ? FALSE : TRUE;
    }
    
    if(!valid_dni($dni)){
        echo "DNI inválido.";
    }
    function valid_dni($dni) {
       return (!preg_match("/^[0-9]{8,8}[A-Za-z]$/", $dni)) ? FALSE: TRUE;
    }

    if(!valid_email($email)){
        echo "Correo electrónico inválido.";
    }
    
    function valid_email($email) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? FALSE : TRUE;
    }
    
    if(!validDateIN($entrada)){
            echo "Fecha de entrada errónea";
    }
        
    function validDateIN($entrada){
            return (!preg_match("/^((19|2[0-9])[0-9]{2})-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])$/ix", $entrada)) ? FALSE : TRUE;
    }
        
    function valid_dateIn($entrada) {
            list($year, $month, $day) = explode("-",$entrada);
            if(checkdate($month,$day,$year)){
                echo "Fecha inválida";
            }
    }
        
    if(!validDate($entrada,$salida)){
        echo "Fecha de entrada incorrecta.";
    }
        
    function validDate($entrada,$salida){
        $dateEntrada = explode("-",$entrada);
        $dateSalida = explode("-",$salida);
    
        if($entrada > $salida) {
            echo "NO";
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
    if(!validDateOUT($salida)){
        echo "Fecha de salida errónea.";
    }
        
    function validDateOUT($salida){
        return (!preg_match("/^((19|2[0-9])[0-9]{2})-(0[1-9]|1[012])-(0[1-9]|[12][0-9]|3[01])$/ix", $salida)) ? FALSE : TRUE;
    }
    
    if (!empty($_GET["submitBusq"])){
        $busq_destino = $_GET['busq_destino'];
        $busq_entrada = $_GET['busq_entrada'];
        $busq_salida = $_GET['busq_salida'];
        $busq_habitaciones = $_GET['busq_habitaciones'];
        $busq_adultos = $_GET['busq_adultos'];
        $busq_niños = $_GET['busq_niños'];
    }  
    
    $servername = "localhost";
    $dbname = "hoteles";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $sql = "CREATE TABLE IF NOT EXISTS bookings (
            id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            hotel VARCHAR(30),
            firstname VARCHAR(30),
            lastname VARCHAR(30),
            dni VARCHAR(9),
            email VARCHAR(50),
            date_in VARCHAR(30),
            date_out VARCHAR(30),
            room_type VARCHAR(10),
            room_number INT(5),
            adults INT(5),
            childs INT(5),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        $conn->exec($sql);
            //$conn->beginTransaction();
            //$conn->commit();
        $sql = "INSERT INTO hoteles (id,nombre, ciudad, pais, zona, piscina, img) 
        VALUES ('0','K-Pop Hotel Seoul Tower','Seoul','Corea del Sur','Interior','0','https://images.trvl-media.com/hotels/10000000/9280000/9276900/9276817/6836c418.jpg?impolicy=fcrop&w=1200&h=800&p=1&q=medium')
        ON DUPLICATE KEY UPDATE nombre = 'K-Pop Hotel Seoul Tower'";            
        $conn->exec($sql);
            
        $sql = "INSERT INTO hoteles (id,nombre, ciudad, pais, zona, piscina, img) 
        VALUES ('1','Noel Business Hotel','Busan','Corea del Sur','Playa','0','https://pix10.agoda.net/hotelImages/124/1249197/1249197_16060914380043331238.jpg?s=1024x768')
        ON DUPLICATE KEY UPDATE nombre = 'Noel Business Hotel'";
        $conn->exec($sql);
            
        $sql = "INSERT INTO hoteles (id,nombre, ciudad, pais, zona, piscina, img) 
        VALUES ('2','Hotel Regent Marine The Blue','Jeju','Corea del Sur','Playa','1','https://www.hotelscombined.es/himg/30/e0/ba/revato-1173238-10990069-271812.jpg')
        ON DUPLICATE KEY UPDATE nombre = 'Hotel Regent Marine The Blue'";
        $conn->exec($sql);
            
        $sql = "INSERT INTO hoteles (id,nombre, ciudad, pais, zona, piscina, img) 
        VALUES ('3','Mayplace Seoul Dongdaemun','Seul','Corea del Sur','Interior','0','https://pix10.agoda.net/hotelImages/670/670682/670682_16060113560042987271.jpg?s=1024x768')
        ON DUPLICATE KEY UPDATE nombre = 'Mayplace Seoul Dongdaemun'";
        $conn->exec($sql);
            
        $sql = "INSERT INTO hoteles (id,nombre, ciudad, pais, zona, piscina, img) 
        VALUES ('4','Golden Seoul Hotel','Seoul','Corea del Sur','Interior','0','https://pix10.agoda.net/hotelImages/517/517379/517379_15061114090029270278.jpg?s=1024x768')
        ON DUPLICATE KEY UPDATE nombre = 'Golden Seoul Hotel'";
        $conn->exec($sql);

        $sql = "INSERT INTO hoteles (id,nombre, ciudad, pais, zona, piscina, img) 
        VALUES ('5','Lotte Hotel Seoul','Seoul','Corea del Sur','Interior','1','https://cdn4.hotelopia.com/giata/bigger/63/630281/630281a_hb_a_001.jpg')
        ON DUPLICATE KEY UPDATE nombre = 'Lotte Hotel Seoul'";
        $conn->exec($sql);
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try{
        $sql = "INSERT INTO bookings (hotel, firstname, lastname, dni, email, date_in, date_out,room_type, room_number, adults, childs)
        VALUES('$hotel','$nombre','$apellidos','$dni','$email','$entrada','$salida','$tipo_hab','$habitaciones','$adultos','$niños')";
        $conn->exec($sql);
        echo "Se ha efectuado correctamente la reserva a nombre de :"; 
        echo "$nombre $apellidos en el hotel $hotel desde el $entrada hasta el $salida";

    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    
    
?>