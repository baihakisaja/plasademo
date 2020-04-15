
    <div class="sticky bottom">
        <footer class="sticky-footer bg-transparent">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <h6 class="text-dark font-weight-bold">Copyright &copy; Virtual XL Center
                        <script>
                            var date = new Date()
                            document.write(date.getFullYear())
                        </script>
                    </h6>
                </div>
            </div>
        </footer>
    </div>
 <!-- jQuery -->
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>assets/socket.io/dist/socket.io.js"></script>
  <script>
    $(function () {
        const port = "3000";
        const socketIoAddress = `http://192.168.43.32:${port}`;
        const socket = io(socketIoAddress);

        $("#add_dataa").click(function () {
                        socket.emit('reload-table');
                        reloadTable();
            
        });
    })
</script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/homepage.js"></script>

<!-- page script -->

</body>

</html>