 $(function() {
     $(".datepicker").datepicker({
         changeMonth: true,
         changeYear: true,
         minDate: 0,
     });
     $('#singler, #singlep, #doubler, #doublep').dialog({
         autoOpen: false
     });
     //dialog
     $('.singleroom').click(function() {
         var editId = $(this).closest('span').attr('attr');
         var currentValue = $(this).closest('span').text();
         $("#singleroom").val(currentValue);
         $("#columnid").val(editId);
         $('#singler').dialog('open');
     });
     $('.singleprice').click(function() {
         var editId = $(this).closest('span').attr('attr');
         var currentValue = $(this).closest('span').text();
         $("#singleprice").val(currentValue);
         $("#columnid1").val(editId);
         $('#singlep').dialog('open');
     });
     $('.doubleroom').click(function() {
         var editId = $(this).closest('span').attr('attr');
         var currentValue = $(this).closest('span').text();
         $("#doubleroom").val(currentValue);
         $("#columnid2").val(editId);
         $('#doubler').dialog('open');
     });
     $('.doubleprice').click(function() {
         var editId = $(this).closest('span').attr('attr');
         var currentValue = $(this).closest('span').text();
         $("#doubleprice").val(currentValue);
         $("#columnid3").val(editId);
         $('#doublep').dialog('open');
     });
     $('#singleroom').on('keyup', function() {
         var val = $('#singleroom').val();
         if (val > 5) {
             $('.help-block').html('Number should be between 1 and 5');
             $('button.updaterow').prop('disabled', true);
         } else {
             $('button.updaterow').prop('disabled', false);
             $('.help-block').html('');
         }
     });
     $('#doubleroom').on('keyup', function() {
         var val = $('#doubleroom').val();
         if (val > 5) {
             $('.help-block').html('Number should be between 1 and 5');
             $('button.updaterow').prop('disabled', true);
         } else {
             $('.help-block').html('');
             $('button.updaterow').prop('disabled', false);
         }
     });
     $('.pri').keypress(function(eve) {
         if ((eve.which != 46 || $(this).val().indexOf('.') != -1) && (eve.which < 48 || eve.which > 57) || (eve.which == 46 && $(this).caret().start == 0)) {
             eve.preventDefault();
         }
         $('.pri').keyup(function(eve) {
             if ($(this).val().indexOf('.') == 0) {
                 $(this).val($(this).val().substring(1));
             }
         });
     });
 });