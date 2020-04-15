
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->

          <!-- /top tiles -->
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Report Antrian Gangguan </h2>
                       
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No. Antrian</th>
                          <th>Nama Pelanggan</th>
                          <th>Nomor Indihome</th>
                          <th>Jam Masuk</th>
                          <th>Tanggal Masuk</th>
                          <th>Daerah</th>
                          <th style="text-align:right;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; ?>
              <?php foreach ($data_gangguan->result_array() as $i) :
                $id_gangguan=$i['id_gangguan'];
                $nama_pelanggan=$i['nama_pelanggan'];
                $nomor_indihome=$i['nomor_indihome'];
                $nama_daerah=$i['nama_daerah'];
                $jam=$i['jam'];
                $tgl=$i['tgl'];
              ?>
                        <tr>
                          <td><?php echo $no++;?></td>
                          <td><?php echo $nama_pelanggan;?></td>
                          <td><?php echo $nomor_indihome;?></td>
                          <td><?php echo $jam;?></td>
                          <td><?php echo $tgl;?></td>
                          <td><?php echo $nama_daerah;?></td>
                  <td style="text-align:right;">
                  <button type="button" class="btn btn-round btn-danger fa fa-trash" data-toggle="modal" data-target="#ModalHapus<?php echo $id_gangguan;?>"> Hapus</button>
                  
                 </td>
                </tr>
               <?php endforeach;?>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              
              <div class="row">
              </div>
            </div>
          </div>
        </div>

        



              <?php foreach ($data_gangguan->result_array() as $i) :
                $id_gangguan=$i['id_gangguan'];
                $nama_pelanggan=$i['nama_pelanggan'];
                $nomor_indihome=$i['nomor_indihome'];
                $nama_daerah=$i['nama_daerah'];
                $jam=$i['jam'];
                $tgl=$i['tgl'];
              ?>
      <!-- Modal Edit gangguan -->
<div class="modal fade" id="ModalEdit<?php echo $id_gangguan;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h4 class="modal-title" id="myModalLabel"> Selesai Pelayanan</h4>
      </div>
    <?php echo form_open(base_url('gangguan/selesai'), 'class="form-horizontal" enctype="multipart/form-data"');  ?> 
        <div class="modal-body">

              <input value="<?php echo $id_gangguan;?>" name="id_gangguan" type="hidden">

                   <input type="hidden" name="kode" value="<?php echo $id_gangguan;?>"/>
         <p>Apakah antrian <b><?php echo $nama_pelanggan;?></b> selesai di layani ?</p>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat" id="simpan">Selesai</button>
            </div>

        
        <?php echo form_close( ); ?>
    </div>
  </div>
</div>
<?php endforeach;?>


            <?php foreach ($data_gangguan->result_array() as $i) :
                $id_gangguan=$i['id_gangguan'];
                $nama_pelanggan=$i['nama_pelanggan'];
                $nomor_indihome=$i['nomor_indihome'];
                $nama_daerah=$i['nama_daerah'];
                $jam=$i['jam'];
                $tgl=$i['tgl'];
              ?>
      <!-- Modal Edit gangguan -->
<div class="modal fade" id="ModalHapus<?php echo $id_gangguan;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
        <h4 class="modal-title" id="myModalLabel"> Hapus Antrian</h4>
      </div>
      <form class="form-horizontal" action="<?php echo base_url().'gangguan/hapus_gangguan'?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">

            <input type="hidden" name="kode" value="<?php echo $id_gangguan;?>"/>
         <p>Apakah Anda yakin ingin menghapus antrian <b><?php echo $nama_pelanggan;?></b>?</p>
         </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
            </div>

        
      </form>
    </div>
  </div>
</div>
<?php endforeach;?>

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
       