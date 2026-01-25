
            <div class="more_footer">

                <div class="main-content">
                    <div class="container-fluid">
                        
                        <footer class="footer">
                            <!-- To the right -->
                        
                            <!-- Default to the left -->
                            <div><strong>Copyright &copy; {{ date('Y') }}.</strong> {{ $title }} All rights reserved.</div>

                        </footer>
                    </div>
                </div>
            </div>

           
    </div>
            <!-- end main content-->

<!-- END layout-wrapper -->




</body>
<script>
function showToast(message, type = "success") {
    const toastId = "nt-toast-" + Date.now();

    const typeClass = {
        success: "nt-toast-success",
        warning: "nt-toast-warning",
        danger: "nt-toast-danger"
    }[type];

    const toastHTML = `
        <div id="${toastId}" class="nt-toast ${typeClass}">
            <div class="nt-toast-accent"></div>
            <div class="nt-toast-row">
                <div class="nt-toast-body">${message}</div>
                <button class="nt-toast-close" onclick="removeNtToast('${toastId}')">&times;</button>
            </div>
        </div>
    `;

    const container = document.getElementById("nt-toast-container");
    container.insertAdjacentHTML("beforeend", toastHTML);

    const toastEl = document.getElementById(toastId);
    requestAnimationFrame(() => toastEl.classList.add("nt-toast-show"));

    setTimeout(() => removeNtToast(toastId), 3200);
}

function removeNtToast(id) {
    const el = document.getElementById(id);
    if (el) el.remove();
    location.reload();
}


</script>

<!-- JAVASCRIPT -->
<!-- jQuery FIRST -->
<script src="{{ asset('admin/libs/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('admin/libs/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('admin/libs/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/libs/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/libs/waves.min.js') }}"></script>

<!-- App JS (LAST) -->
<script src="{{ asset('admin/js/app.js') }}"></script>

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
        