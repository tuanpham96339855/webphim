</div>
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        function short_url(full_url, remove_str) {
            if (full_url.includes(remove_str)) {
                return full_url.substring(0, full_url.indexOf(remove_str));
            }
            return full_url
        }
        $(function () {
            var current_page_URL = location.href;
            current_page_URL = short_url(current_page_URL, '/Admin/Index')
            current_page_URL = short_url(current_page_URL, '/Create')
            current_page_URL = short_url(current_page_URL, '/Edit')
            $("#wrapper li a").each(function () {
                if ($(this).attr("href") !== "#") {
                    var target_URL = $(this).prop("href");
                    if (target_URL == current_page_URL) {
                        $(this).addClass('active_color');
                        return false;
                    }
                }
            });
        });
    </script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/datatables-demo.js"></script>
</body>

</html>