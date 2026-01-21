
                <div class="main-content">
                    <div class="container-fluid">
                        
                        <footer class="footer">
                            <!-- To the right -->
                        
                            <!-- Default to the left -->
                            <div><strong>Copyright &copy; {{ date('Y') }}.</strong>{{ $title }} All rights reserved.</div>

                        </footer>
                    </div>
                </div>


                </div>
            <!-- end main content-->

<!-- END layout-wrapper -->




</body>


<!-- JAVASCRIPT -->
<!-- jQuery FIRST -->
<script src="{{ asset('admin/libs/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('admin/libs/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('admin/libs/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/libs/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>

<!-- App JS (LAST) -->
<script src="{{ asset('admin/js/app.js') }}"></script>

<!-- <script src="NewDashboard/assets/libs/jquery/jquery.min.js"></script>
<script src="NewDashboard/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="NewDashboard/assets/libs/simplebar/simplebar.min.js"></script>
<script src="NewDashboard/assets/libs/node-waves/waves.min.js"></script> -->

<!-- Peity chart-->
<!-- <script src="NewDashboard/assets/libs/peity/jquery.peity.min.js"></script> -->

<!-- Plugin Js-->
<!-- <script src="NewDashboard/assets/libs/chartist/chartist.min.js"></script>
<script src="NewDashboard/assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>

<script src="NewDashboard/assets/js/pages/dashboard.init.js"></script>

<script src="NewDashboard/assets/js/app.js"></script> -->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script>
    //$("#tableView").DataTable();
    $(document).ready(function() {
        $('#tableView').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>
</html>
        