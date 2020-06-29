<!-- Author:bhavik chudasama
admin js -->
<script src="dist_client/vendor/jquery/jquery.min.js"></script>
  <script src="dist_client/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="dist_client/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="dist_client/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="{{URL::asset('dist_client/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{URL::asset('dist_client/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{URL::asset('dist_client/js/demo/chart-pie-demo.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>