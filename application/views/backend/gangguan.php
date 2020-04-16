
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Antrian Gangguan </h2>
                       
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No. Antrian</th>
                          <th>Nama Pelanggan</th>
                          <th>Nomor XL</th>
                          <th>Jam Masuk</th>
                          <th>Tanggal Masuk</th>
                          <th>Daerah</th>
                          <th style="text-align:right;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody class="gangguan">
                         
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              
              <div class="row">
              </div>
            </div>
          </div>
        </div>

        



<div class="reloadmodselesai2"></div>

         <div class="reloadmo2"></div>

<?php if($this->session->flashdata('berhasil_simpan') == TRUE): ?>
 <script type="text/javascript">
 swal("Berhasil!", "gangguan Berhasil di SIMPAN", "success");
 </script>
<?php endif; ?>

<?php if($this->session->flashdata('berhasil_edit') == TRUE): ?>
 <script type="text/javascript">
 swal("Berhasil!", "Antrian Selesai", "success");
 </script>
<?php endif; ?>

<?php if($this->session->flashdata('berhasil_hapus') == TRUE): ?>
 <script type="text/javascript">
 swal("Berhasil!", "gangguan Behasil di HAPUS", "success");
 </script>
<?php endif; ?>

<?php if($this->session->flashdata('gagal_up') == TRUE): ?>
 <script type="text/javascript">
 swal("Gagal!", "Format File Gambar Salah", "warning");
 </script>
<?php endif; ?>
        <!-- /page content -->

        <!-- footer content -->
<footer>

          <div class="clearfix"></div>
          Copyright &copy; Virtual XL Center 2020
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/gentelella-master/build/js/custom.min.js"></script>

      <!-- Datatables -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url();?>assets/gentelella-master/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>


<script src="<?= base_url() ?>/assets/socket.io/dist/socket.io.js"></script>
<script>
    $(function () {
        const port = "3000";
        const socketIoAddress = `https://plasa.herokuapp.com:${port}`;
        const socket = io(socketIoAddress);
        const gangguanTable = $('#gangguan').DataTable();
        const reloadTable2 = function () {
            $.ajax({
                    url   : '<?php echo site_url("gangguan/list_gangguan");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var count = 1;
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                    '<td>'+ count++ +'</td>'+
                                    '<td>'+ data[i].nama_pelanggan +'</td>'+
                                    '<td>'+ data[i].nomor_indihome +'</td>'+
                                    '<td>'+ data[i].jam +'</td>'+
                                    '<td>'+ data[i].tgl +'</td>'+
                                    '<td>'+ data[i].nama_daerah +'</td>'+
                                    '<td style="text-align:right;">'+
                                        '<button type="button" class="btn btn-round btn-primary fa fa-pencil" data-toggle="modal" data-target="#ModalEdit'+ data[i].id_gangguan +'"> Selesai</button>'+
                                        '<button type="button" class="btn btn-round btn-danger fa fa-trash" data-toggle="modal" data-target="#ModalHapus'+ data[i].id_gangguan +'"> Hapus</button>'+
                                    '</td>'+
                                    '</tr>';
                        }
                        $('.gangguan').html(html);
                    }
 
                });
        }
        const reloadmodhapus2 = function () {
            $.ajax({
                    url   : '<?php echo site_url("gangguan/list_gangguan");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var count = 1;
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<div class="modal fade" id="ModalHapus'+ data[i].id_gangguan +'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button><h4 class="modal-title" id="myModalLabel"> Hapus Antrian</h4></div><form class="form-horizontal" action="<?php echo base_url().'gangguan/hapus_gangguan'?> " method="post" enctype="multipart/form-data"><div class="modal-body">'+
            '<input type="hidden" name="kode" value="'+ data[i].id_gangguan +'"/>'+
         '<p>Apakah Anda yakin ingin menghapus antrian <b>'+ data[i].nama_pelanggan +'</b>?</p></div>'+
            '<div class="modal-footer">'+
              '<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>'+
              '<button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button></div></form></div></div></div>';
                        }
                        $('.reloadmo2').html(html);
                    }
 
                });
        }
        const reloadmodselesai2 = function () {
            $.ajax({
                    url   : '<?php echo site_url("gangguan/list_gangguan");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var count = 1;
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<div class="modal fade" id="ModalEdit'+ data[i].id_gangguan +'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button><h4 class="modal-title" id="myModalLabel"> Selesai Pelayanan</h4></div>'+
    '<form class="form-horizontal" action="<?php echo base_url().'gangguan/selesai'?>" method="post" enctype="multipart/form-data">'+
        '<div class="modal-body"><input value="'+ data[i].id_gangguan +'" name="id_gangguan" type="hidden"><input type="hidden" name="kode" value="'+ data[i].id_gangguan +'"/>'+
         '<p>Apakah antrian <b>'+ data[i].nama_pelanggan +'</b> selesai di layani ?</p>'+
          '</div><div class="modal-footer"><button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button><button type="submit" class="btn btn-primary btn-flat" id="simpan">Selesai</button></div></form></div></div></div>';
                        }
                        $('.reloadmodselesai2').html(html);
                    }
 
                });
        }
        reloadTable2();
        reloadmodhapus2();
        reloadmodselesai2();
        socket.on('reload', () => {
            var audio = new Audio('<?php echo base_url();?>assets/ring.mp3');
            audio.play();
            swal("Pemberitahuan!", "Ada antrian masuk", "success");
            reloadmodhapus2();
            reloadmodselesai2();
            reloadTable2();
        });
    })
</script>
       
  
  </body>
</html>
