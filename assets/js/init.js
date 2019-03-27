$(document).ready(function() {
    $('.js-table').DataTable({
        "responsive": true,
        "pageLength": 100,
        "language": {
            "paginate": {
                "previous": '<i class="fa fa-chevron-left"></i>',
                "next": '<i class="fa fa-chevron-right"></i>'
            }
        }
    });
} );