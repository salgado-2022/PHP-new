function guardar(){
    $.ajax({
        type:"POST",
        url: "",
        data: {
            'Nombre': $('#nombre').val(),
            'Apellido': $('#apellido').val(),
            'Email': $('#email').val(),
            'metodo': "guardar"
        },
        success: function(data){
            alert(data);
            $('#nombre').val('');
            $('#apellido').val('');
            $('#email').val('');
        }
    });
}