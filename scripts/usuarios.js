$(document).ready(function () {
    $('#usuarios').DataTable({
            'language': {
              'lengthMenu': 'Mostrar _MENU_ registros por pagina',
              'zeroRecords': 'No se encontaron resultados',
              'info': 'Mostrar pagina _PAGE_ de _PAGES_',
              'infoEmpty': 'No records available',
              'search': 'Buscar',
              'paginate': {
                'next': 'Próximo',
                'previous': 'Anterior'
              }
            }

    });
});
