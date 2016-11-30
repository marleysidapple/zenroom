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
 $('#all').change(function() {
     if ($("#all").is(":checked")) {
         $("input:checkbox").prop('checked', this.checked);
     } else {
         $("input:checkbox").prop('checked', false);
     }
 });
 $('#weekdays').change(function() {
     if ($("#weekdays").is(":checked")) {
         $("input:checkbox.weekday").prop('checked', this.checked);
     } else {
         $("input:checkbox#all").prop('checked', false);
         $("input:checkbox.weekday").prop('checked', false);
     }
 });
 $('#weekends').change(function() {
     if ($("#weekends").is(":checked")) {
         $("input:checkbox.weekend").prop('checked', this.checked);
     } else {
         $("input:checkbox#all").prop('checked', false);
         $("input:checkbox.weekend").prop('checked', false);
     }
 });
 $('.weekday').change(function() {
     if ($("input:checkbox.weekday:checked").length < 5) {
         $("input:checkbox#weekdays").prop('checked', false);
         $("input:checkbox#all").prop('checked', false);
     } else {
         $("input:checkbox#weekdays").prop('checked', true);
         $("input:checkbox#weekends").prop('checked', false);
     }
 });
 $('.weekend').change(function() {
     if ($("input:checkbox.weekend:checked").length < 2) {
         $("input:checkbox#weekends").prop('checked', false);
         $("input:checkbox#all").prop('checked', false);
     } else {
         $("input:checkbox#weekends").prop('checked', true);
         $("input:checkbox#weekdays").prop('checked', false);
     }
 });
 $('.weekday, .weekend').change(function() {
     if ($("input:checkbox.weekday:checked").length == 5 && $("input:checkbox.weekend:checked").length == 2) {
         $("input:checkbox#all").prop('checked', true);
         $("input:checkbox#weekends").prop('checked', true);
         $("input:checkbox#weekdays").prop('checked', true);
     }
 });