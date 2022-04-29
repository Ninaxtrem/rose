$(document).ready(function() {
    $('#table_id').DataTable();
} );

$('#table_id').DataTable( {
    columnDefs: [
      {
          targets: -1,
          className: 'dt-body-right'
      }
    ]
  } );