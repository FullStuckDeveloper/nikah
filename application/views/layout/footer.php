    <!-- <footer class="main-footer">

    </footer> -->
</div>

<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
        $('#example3').DataTable({
            "pageLength": 10,
            "dom": 'Bfrtip',
            "buttons": [{
                extend: 'excel',
                text: 'Export to Excel'
            }],
        });
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker1').datepicker({
            autoclose: true,
            format: "MM yyyy",
            viewMode: "months", 
            minViewMode: "months"
        });
        $('#datepicker2').datepicker({
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker3').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd",
        });
        $('#datepicker4').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd",
        });
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });

        $(document).on('click', '.edit-record', function (e) {
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('hasil.php',
                    {id: $(this).attr('data-id')},
                function (html) {
                    $(".modal-body").html(html);
                });
            });
        });
</script>
</body>
</html>