function guardar(){
    $.ajax({
        type:"POST",
        url: "../../controlador/controlAdmin.php",
        data: {
            'Nombre': $('#nombre').val(),
            'Apellido': $('#apellidos').val(),
            'Email': $('#correo').val(),
            'tl': $('#telefono').val(),
            'metodo': "guardar"
        },
        success: function(data){
            alert(data);
            $('#nombre').val('');
            $('#apellidos').val('');
            $('#correo').val('');
            $('#telefono').val('');
        }
    });
}