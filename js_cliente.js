var jq = jQuery.noConflict();
jq(document).ready(function(){
    jq("#datos").click(function() {
        var nombre = jq("input#nombre").val();
        var apellidos = jq("input#apellidos").val();
        var dni = jq("input#dni").val();
        var email = jq("input#email").val();
        var entrada = jq("input#entrada").val();
        var salida = jq("input#salida").val();
        var hotel = jq("#hotel option:selected").val();
        var tipo_hab = jq("#tipo_hab option:selected").val();
        var habitaciones = jq("#habitaciones option:selected").val();
        var adultos = jq("#adultos option:selected").val();
        var niños = jq("#niños option:selected").val();
        var datos = 'nombre=' + nombre + '&apellidos='+apellidos + '&dni='+dni+'&email='+email+'&entrada='+entrada
        +'&salida='+salida+'&hotel='+hotel+'&tipo_hab='+tipo_hab+'&habitaciones='+habitaciones+'&adultos='+adultos+'&niños='+niños;
        alert(datos);
        jq('.formreserva').validate( {
            rules: {
                required: function(element){
                    return /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{1,})+[\s]{0,}([A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?$/.test($('nombre').val());
                }                
            }
        });
        jq('.formreserva').submit(function() {
            jq.ajax({
                url: "servidor.php",
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
});