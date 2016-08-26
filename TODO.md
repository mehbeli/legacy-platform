1. fix product list selection on open sale page - click on checkbox does not account as row selection. [/]
2. open sale settings - set fix setting first -> payment methods, delivery methods - pending validation (create, update)
3. open sale time end must be after open sale start

--

$(document).ready(function() {
   var table = $('#example').DataTable({
      'ajax': 'https://api.myjson.com/bins/1us28',
      'columnDefs': [
         {
            'targets': 0,
            'checkboxes': {
               'selectRow': true
            }
         }
      ],
      'select': {
         'style': 'multi'
      },
      'order': [[1, 'asc']]
   });

   $('#example').on('select.dt', function(e, api, type, indexes){
      console.log('Row selected');
      itik(api);
   });

   function itik(dt) {
   		console.log(dt);
   }

   // Handle form submission event
   $('#frm-example').on('submit', function(e){
      var form = this;

      var rows_selected = table.column(0).checkboxes.selected();

      // Iterate over all selected checkboxes
      $.each(rows_selected, function(index, rowId){
         // Create a hidden element
         $(form).append(
             $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId)
         );
      });

      // FOR DEMONSTRATION ONLY
      // The code below is not needed in production

      // Output form data to a console     
      $('#example-console-rows').text(rows_selected.join(","));

      // Output form data to a console     
      $('#example-console-form').text($(form).serialize());

      // Remove added elements
      $('input[name="id\[\]"]', form).remove();

      // Prevent actual form submission
      e.preventDefault();
   });   
});

--
