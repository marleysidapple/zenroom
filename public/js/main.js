 $(function() {
     $(".datepicker").datepicker({
         changeMonth: true,
         changeYear: true,
         minDate: 0,
     });

      $('#singler, #singlep, #doubler, #doublep').dialog({
        autoOpen:false
    });

     //dialog
     $('.singleroom').click(function() {
         var editId = $(this).closest('span').attr('attr');
         var currentValue = $(this).closest('td').text();
          $("#singleroom").val(currentValue);
          $("#columnid").val(editId);
         $('#singler').dialog('open');
     });

      $('.singleprice').click(function() {
         var editId = $(this).closest('span').attr('attr');
         var currentValue = $(this).closest('td').text();
          $("#singleprice").val(currentValue);
          $("#columnid1").val(editId);
         $('#singlep').dialog('open');
     });

       $('.doubleroom').click(function() {
         var editId = $(this).closest('span').attr('attr');
         var currentValue = $(this).closest('td').text();
          $("#doubleroom").val(currentValue);
          $("#columnid2").val(editId);
         $('#doubler').dialog('open');
     });

      $('.doubleprice').click(function() {
         var editId = $(this).closest('span').attr('attr');
         var currentValue = $(this).closest('td').text();
          $("#doubleprice").val(currentValue);
          $("#columnid3").val(editId);
         $('#doublep').dialog('open');
     });

 });

 
