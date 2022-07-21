$(document).ready(function() {
    setTimeout(function() {

        // Zero Configuration start
        $('#simpletable').DataTable();

        // Default Ordering start
        $('#order-table').DataTable({
            "order": [
                [3, "desc"]
            ]
        });

        // Multi-Column Ordering start
        $('#multi-colum-dt').DataTable({
            columnDefs: [{
                targets: [0],
                orderData: [0, 1]
            }, {
                targets: [1],
                orderData: [1, 0]
            }, {
                targets: [4],
                orderData: [4, 0]
            }]
        });

        // Complex Headers start
        $('#complex-dt').DataTable();

        // DOM Positioning start
        $('#DOM-dt').DataTable({
            "dom": '<"top"i>rt<"bottom"flp><"clear">'
        });

        // Alternative Pagination start
        $('#alt-pg-dt').DataTable({
            "pagingType": "full_numbers"
        });

        // Scroll - Vertical start
        $('#scr-vrt-dt').DataTable({
            "scrollY": "200px",
            "scrollCollapse": true,
            "paging": false
        });

        // Scroll - Vertical, Dynamic Height start
        $('#scr-vtr-dynamic').DataTable({
            scrollY: '50vh',
            scrollCollapse: true,
            paging: false
        });

        // Language - Comma Decimal Place start
        $('#lang-dt').DataTable({
            "language": {
                "decimal": ",",
                "thousands": "."
            }
        });

    }, 350);
});
