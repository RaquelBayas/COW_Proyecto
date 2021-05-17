window.onload = pageLoad;

function pageLoad(){
    var dataChecked = document.getElementById("dataChecked");
    dataChecked.onclick = regexp;
}

function regexp(){
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellidos").value;
    var email = document.getElementById("email").value;
    var dni = document.getElementById("dni").value;
    
    var regexNombreApellido = new RegExp(/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{1,})+[\s]{0,}([A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?$/);
    var regexDni = new RegExp(/^([0-9]{8,8}[A-Za-z]$)/);
    var regexEmail = new RegExp(/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/);
       
    if(nombre=="" && apellido=="" && email=="" && dni==""){
        alert("Introduce los datos");
    } else {
        if(!regexNombreApellido.test(nombre)){
            alert("Nombre incorrecto");  
        } 
        if(!regexNombreApellido.test(apellido)) {
            alert("Apellido incorrecto");   
        }
        if(!regexDni.test(dni)) {
            alert("DNI incorrecto");   
        }
        if(!regexEmail.test(email)) {
            alert("Email incorrecto");   
        }
        
        var sendData = document.getElementById("sendData");
        sendData.disabled = false;
    }
}