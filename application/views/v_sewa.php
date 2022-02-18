<html>
<?php $this->load->view('template/head.php'); ?>

<body>
    <?php $this->load->view('template/nav.php'); ?>
    <section class="allmain">
        <div class="headbg" style="background-image:url('<?= base_url('lib/img/bg.jpg')?>')">
            <div class="text">
                <h3>courtpedia</h3>
                <h1>LIST LAPANGAN</h1>
            </div>
        </div>

        <div class="halaman">
            <div class="row">
                <div class="col-md-9 halaman1 ">
                    <div class="row">
                        <?php foreach($data as $d){ ?>
                        <div class="col-md-5 card box">
                            <img src="<?= base_url('lib/img/lapang/'.$d->foto1);?>" class="card-img-top listlapang">
                            <a href="<?= site_url('detail/'.$d->id) ?>">
                            <div class="tulisan text-left">
                                <h4>LAPANG <?= $d->nama_lapang;?></h4>
                                
                            </div>
                            </a>
                        </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-md-3 halaman2">
                    <form action="#" method="post">
                        <h1 class="text-center mb-5">FORM BOOKING</h1>

                        <div class="form-group">
                            <label class="frmLabel">Nama Lapang</label>
                            <input type="text" class="form-control inputan" name="nama_lapang">
                        </div>

                        <div class="form-group">
                            <label class="frmLabel">Hari</label>
                            <select class="form-control inputan" name="hari" id="hari">
                                <option selected>Pilih Hari</option>
                                <option>Senin</option>
                                <option>Selasa</option>
                                <option>Rabu</option>
                                <option>Kamis</option>
                                <option>Jumat</option>
                                <option>Sabtu</option>
                                <option>Minggu</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="frmLabel">Jadwal</label>
                            <select class="form-control inputan" name="jadwal" id="jadwal">
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="frmLabel">Tanggal Booking</label>
                            <input type="date" class="form-control inputan" name="tgl">
                        </div>

                        <button class="btn frmButton" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('template/footer.php'); ?>

</body>

</html>
