var jqu = jQuery.noConflict();
jqu(document).ready(function(){
    jqu("#json_btn").click(loadXMLDoc);
});
function loadXMLDoc() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }
    };
    xmlhttp.open("GET", "reservas.xml", true);
    xmlhttp.send();
}
function myFunction(xml) {
    var i;
    var xmlDoc = xml.responseXML;
    var table="<tr><th>DNI</th><th>Hotel</th><th>Fecha de entrada</th><th>Fecha de salida</th><th>Tipo de habitación</th><th>Número de habitaciones</th></tr>";
    var x = xmlDoc.getElementsByTagName("reserva");
                        
    for (i = 0; i <x.length; i++) {    
        table += "<tr><td>" +
        x[i].getElementsByTagName("dni")[0].childNodes[0].nodeValue +
        "</td><td>" +
        x[i].getElementsByTagName("hotel")[0].childNodes[0].nodeValue +
        "</td><td>" +
        x[i].getElementsByTagName("date_in")[0].childNodes[0].nodeValue +
        "</td><td>" +
        x[i].getElementsByTagName("date_out")[0].childNodes[0].nodeValue +
        "</td><td>" +
        x[i].getElementsByTagName("room_type")[0].childNodes[0].nodeValue +
        "</td><td>" +
        x[i].getElementsByTagName("room_number")[0].childNodes[0].nodeValue +
        "</td></tr>";
        }
    document.getElementById("demo").innerHTML = table;              
}