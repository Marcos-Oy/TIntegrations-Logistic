$('#regiones').on('change', (function () {
    var id = $('#regiones').val()
    $.ajax(
        {
            type: 'POST',
            url: 'combos/listar_comunas.php',
            data: { 'id': id }
        }
    )
        .done(function (listas_r) {
            $('#comunas').html(listas_r)
        }
        )
        .fail(function () {
            alert('Error al cargar comunas')
        }
        )
}
)
)