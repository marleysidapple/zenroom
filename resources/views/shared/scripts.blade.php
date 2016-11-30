    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script type="text/javascript">
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
   </script>
  
  