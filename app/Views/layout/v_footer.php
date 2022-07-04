<!-- Required Js -->
<!-- Nama Vendor -->
<script src="<?= base_url(); ?>/template/assets/js/vendor-all.min.js"></script>

<script src="<?= base_url(); ?>/template/assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/template/assets/js/plugins/feather.min.js"></script>
<script src="<?= base_url(); ?>/template/assets/js/pcoded.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
<!-- <script src="assets/js/plugins/clipboard.min.js"></script> -->
<!-- <script src="assets/js/uikit.min.js"></script> -->

<script>
    // $("body").append('<div class="fixed-button active"><a href="https://gumroad.com/dashboardkit" target="_blank" class="btn btn-md btn-success"><i class="material-icons-two-tone text-white">shopping_cart</i> Upgrade To Pro</a> </div>');
</script>

<!-- DataTable CDN Link -->
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#mydatatable').DataTable();
    });
</script>
<!-- End DataTable -->


<!-- Alert Menghilang Otomatis -->
<!-- <script>
    window.setTimeout(function() {
        $('.alert').fadeTo(500, 0), slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script> -->
<!-- End Alert Menghilang Otomatis -->


</body>

</html>