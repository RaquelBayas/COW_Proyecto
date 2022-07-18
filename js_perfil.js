var jq = $.noConflict();
jq(document).ready(function(){
    jq("#send_data_perfil").click(function() {
        var nombre = jq("input#nombre").val();
        var apellidos = jq("input#apellidos").val();
        var dni = jq("input#dni").val();
        var email = jq("input#email").val();
        var datos = 'nombre=' + nombre + '&apellidos='+apellidos + '&dni='+dni+'&email='+email;
        jq('.formreserva').submit(function() {
            jq.ajax({
                url: "serv2.php",
                type: "GET",
                data: datos,
            })
            .done(function(data) {
                jq('#final').html(data);
            })
            .fail(function(){
                alert("failed");
            });
            return false;
        });
    });

    /*jq("#datos").click(function() {
        var email = jq("input#email").val();
        var password = jq("input#password").val();
        var datos = 'email=' + email + '&password='+password;
       console.log(datos);
        jq('.formlogin').submit(function() {
            jq.ajax({
                url: "servidor_login.php",
                type: "GET",
                data: datos,
            })
            .done(function(data) {
                jq('#final').html(data);
            })
            .fail(function(){
                alert("failed");
            });
            return false;
        });
    });*/
});