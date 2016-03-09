$(function() {
    $('#mostrarRandom').click(function(e){
        var cantidad = $('#cantidadRandom').val();
        var wp_ajax = $('#wp-ajax').attr('data');
        $('#postRandom').html('<p>Cargando artículo...</p>');
        $.post( wp_ajax, {
            action: 'mostrar_random',
            cantidad_post: cantidad
        }, function(data){
            $('#postRandom').html(data);
        });
    })
})
