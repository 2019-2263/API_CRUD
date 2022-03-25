</div>
</div>



<script src="js/mikhmon-ui.dark.min.js"></script>
<script src="js/mikhmon.js?t=2022-02-22_15:45:11"></script>
<script src="js/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function(){
  makeAllSortable();
  $("#filterTable").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#dataTable tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });


  // =========================================================
  // Coverage Area ***

  // $(document).on('click', '.remove-coverage', function() {
  //   swal('test');
  // });

  // Coverage Area ***
  // =========================================================


});

</script>


</body>
</html>

