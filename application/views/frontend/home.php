
<body class="vp-background">
    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 vp-logodiv">
                
                <div class="mt-2">
                    <span class="vp-logokiri vp-text" id="time"></span>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url();?>assets/images/logokanan.png" class="float-right vp-logokanan" style="margin-right: -24px;" />
            </div>
        </div>
        <br>
        <div class="container vp-display">
            <div class="row">
                <div style="margin-top:-70px" class="col-sm-7">
                    <h3 class="vp-text"> Selamat datang di virtual XL center</h3></a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row vp-display">
                <div class="col-sm-7">
                    <p class="vp-text-light">Anda dapat menemukan informasi lengkap seputar layanan digital XL.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container vp-text mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card vp-lapor">
                    <div class="card-body vp-widget" attr_kendala="pasang-baru" data-toggle="tooltip" data-html="true"
                        title="<p class='text-left'>Daftar dan dapatkan Internet terbaik</p>">
                        <h6 class="card-subtitle">Registrasi Prioritas <i
                                class="vp-icons fas fa-notes-medical float-right pd10"></i></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card vp-lapor">
                    <div class="card-body vp-widget" attr_kendala="gangguan" data-toggle="tooltip" data-html="true"
                        title="<p class='text-left'>Layanan Pelaporan Anda Yang Sedang Bermasalah</p>">
                        <h6 class="card-subtitle">Gangguan <i class="vp-icons fas fa-exclamation float-right pd10"></i>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card vp-lapor">
                    <div class="card-body vp-widget" attr_kendala="informasi" data-toggle="tooltip" data-html="true"
                        title="<p class='text-left'>Temukan solusi berbagai jenis bantuan seputar XL</p>">
                        <h6 class="card-subtitle">Informasi Product<i class=" vp-icons fas fa-info float-right pd10"></i></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <h3 class="vp-text form-aduan" style="display: none;">Masukkan Data Anda</h3>
            </div>
            <div class="col-md-12 mt-3">
                <form class="vp-text-light form-aduan" style="display: none;" action="<?php echo base_url();?>home/aksi" method="post">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nama_pelanggan" class="vp-text">Nama Pelanggan</label>
                                <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan"
                                    value="" required="true">
                            </div>
                        </div>
                        <div class="col-sm-4" id="no_hub"></div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputPlasa" class="vp-text">Daerah</label>
                                <select name="id_daerah" class="form-control" required="true">
                                    <option value="" ></option>
                        <?php foreach ($data_daerah->result_array() as $i) :
                           $id_daerah=$i['id_daerah'];
                          $nama_daerah=$i['nama_daerah'];
                          ?>
                          <option value="<?php echo $id_daerah;?>" ><?php echo $nama_daerah;?></option>
                        <?php endforeach;?>
                                </select>
                                <div class="invalid-feedback">
                                    Silahkan pilih daerah anda
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center vp-text">
                            <br />
                            <button type="submit" class="btn-primary btn-lg vp-button-besar" id="add_dataa">Proses</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
