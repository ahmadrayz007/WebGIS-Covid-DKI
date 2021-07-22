<!-- jQuery 3 -->
<script src="<?=templates()?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=templates()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?=templates()?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=templates()?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- Table script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- Morris.js charts -->
<script src="<?=templates()?>bower_components/raphael/raphael.min.js"></script>
<script src="<?=templates()?>bower_components/morris.js/morris.min.js"></script>

<!-- SlimScroll -->
<script src="<?=templates()?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=templates()?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=templates()?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=templates()?>dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
