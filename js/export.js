$(document).ready( function () {
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $('.dt-button').addClass('btn btn-dark');
    $('.dt-button').removeClass('buttons-html5');
    $('.dt-button').removeClass('dt-button');
    
} );