/* global $ */
$(document).ready(function(){
    $('.btn-process').click(function (e) {//btn-process es el id de nuestro btn
        e.preventDefault();//prevent default para q no refresque
        
        var row = $(this).parents('tr');//el elemento que hicimos click (this), nuestro padre q es tr (ahi definimos el id de la tarea correspondiente) de esta manera recuperamos ese id
        
        var id = row.data('id');//obtenemo el correspondiente id
        
        var form = $('#form-update');//id de del form update
        alert(form.attr('action'));
        //prueba
        //var url1=form.attr('action');
        
        //prueba
        var url = form.attr('action').replace(':TASK_ID', id);//reemplazamos lo que teniamos en task_id por el id de la tarea
        
        var data = form.serialize();//serializamos para poder mandar al controlador
        
        $('#button-' + id).addClass('disabled');//agregamos una clase al boton para deshabilitarlo
        
        $.post(url, data, function(result){//mandamos la url y data **ahora vamos al controlador a realizar la action q devolvera los datos json. luego volvemos ya con los datos procesados en la bd
            $('#button-' + id).removeClass('disabled');
            if(result.processed == 1)//si la tarea se finalizo
            {
                $('#message-warning').addClass("hidden");//ocultamos el msj
                
                $('#message').removeClass("hidden");//para q no muestre el msj
                
                $('#glyphicon-' + id).removeClass('glyphicon-time text-danger').addClass('glyphicon-ok text-success');//estamos cambiando el icono que indica en espera y el texto en espera
                $('#glyphicon-' + id).prop('title', 'Finalizada');//cambiamos la propiedad title a finish
                
                $('#user-message').html('Tarea Finalizada.');//mostramos el texto de confirmacion
            }
            else//si ya esta finalizada
            {
                $('#message').addClass("hidden");
                $('#message-warning').removeClass("hidden");
                $('#user-message-warning').html('La tarea ya está finalizada.');
            }
        }).fail(function () {//si pasa halgo durante el proceso
            $('#button-' + id).removeClass('disabled');
            alert('La tarea no se pudo finalizar.')
        });
    });
    
    //prueba
    function fakeReplace(str, substr, newstr) {
    return str.split(substr).join(newstr);
    }
});