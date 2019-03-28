$(document).ready(function() {
    $('.js-table').DataTable({
        "responsive": true,
        "pageLength": 100,
        "language": {
            "paginate": {
                "previous": '<i class="fa fa-chevron-left"></i>',
                "next": '<i class="fa fa-chevron-right"></i>'
            }
        },
        // "scrollX": true,
        "columnDefs": [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        } ]
    });
} );