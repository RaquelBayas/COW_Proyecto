<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
<?php
    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];
    $dni = $_GET['dni'];
    $email = $_GET['email'];
    $servername = "localhost";
    $dbname = "hoteles";
    $connection = new PDO("mysql:host=$servername;dbname=$dbname","root","");
    if (!$connection) {
        die('No se puede establecer la conexión: ' . mysqli_error($connection));
    }    
    $sql="SELECT * FROM bookings WHERE firstname = '".$nombre."' AND lastname = '".$apellidos."' AND 
    dni = '".$dni."' AND email = '".$email."' ";
    $q = $connection->query($sql);

    $reservas = array();
    while($row = $q->fetch()){
      array_push($reservas,$row);
    }

    if(count($reservas)){
      createXMLfile($reservas);
    }  

    function createXMLfile($reservas) {
      $filePath = 'reservas.xml';
      $dom = new DOMDocument('1.0', 'UTF-8');
      $root = $dom->createElement('reservas'); 

      for($i=0; $i<count($reservas); $i++){
        $reserva_id        =  $reservas[$i]['id'];  
        $reserva_dni = htmlspecialchars($reservas[$i]['dni']);
        $reserva_hotel    =  htmlspecialchars($reservas[$i]['hotel']); 
        $reserva_date_in    =  htmlspecialchars($reservas[$i]['date_in']); 
        $reserva_date_out     =  $reservas[$i]['date_out']; 
        $reserva_room_type  =  $reservas[$i]['room_type']; 
        $reserva_room_number  =  $reservas[$i]['room_number']; 

        $reserva = $dom->createElement('reserva');
        $reserva->setAttribute('id', $reserva_id);
        $dni     = $dom->createElement('dni', $reserva_dni); 
        $reserva->appendChild($dni); 
        $hotel   = $dom->createElement('hotel', $reserva_hotel); 
        $reserva->appendChild($hotel); 
        $date_in    = $dom->createElement('date_in', $reserva_date_in); 
        $reserva->appendChild($date_in); 
        $date_out     = $dom->createElement('date_out', $reserva_date_out); 
        $reserva->appendChild($date_out); 
        $room_type = $dom->createElement('room_type', $reserva_room_type); 
        $reserva->appendChild($room_type);
        $room_number = $dom->createElement('room_number', $reserva_room_number); 
        $reserva->appendChild($room_number);

        $root->appendChild($reserva);
      }
      $dom->appendChild($root); 
      $dom->save($filePath); 
    } 
?>