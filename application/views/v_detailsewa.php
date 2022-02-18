<html>
<?php $this->load->view('template/head.php'); ?>

<body>
    <?php $this->load->view('template/nav.php'); ?>
    <section class="allmain">
        <div class="headbg" style="background-image:url('<?= base_url('lib/img/bg.jpg')?>')">
            <div class="text">
                <h3>courtpedia</h3>
                <h1>DETAIL LAPANGAN</h1>
            </div>
        </div>

        <div class="halaman">
            <div class="row">
                <?php foreach($detail as $detail){ ?>
                <div class="col-md-5 lapang1">
                    <img src="<?= base_url('lib/img/lapang/'.$detail->foto1)?>">
                </div>
                <div class="col-md-4">
                    <div class="col-md-12 lapang2">
                        <img src="<?= base_url('lib/img/lapang/'.$detail->foto2)?>">
                    </div>
                    <div class="col-md-12 lapang2 mt-3">
                        <img src="<?= base_url('lib/img/lapang/'.$detail->foto3)?>">
                    </div>
                </div>
                <div class="col-md-3 halaman2">
                    <?php if($this->session->flashdata('sukses') == TRUE){ ?>
                    <div class="alert alert-success text-center" role="alert">
                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <p><?= $this->session->flashdata('sukses') ?></p>
                    </div>
                    <?php }else if($this->session->flashdata('gagal') == TRUE){ ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                        <p><?= $this->session->flashdata('gagal') ?></p>
                    </div>
                    <?php } ?>
                    
                    <form action="<?= base_url('booking') ?>" method="post">
                        <h1 class="text-center mb-5">FORM BOOKING</h1>

                        <div class="form-group">
                            <input type="text" class="form-control inputan" value="<?= $detail->id ?>" id="id_lapang" name="id_lapang" hidden>
                        </div>

                        <div class="form-group">
                            <label class="frmLabel">Nama Lapang</label>
                            <input type="text" class="form-control inputan" value="<?= $detail->nama_lapang; ?>" name="nama_lapang">
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
                <?php } ?>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#hari').on('change', function() {
                            var hari = $('#hari').val();
                            var id_lapang = $('#id_lapang').val();
                            $.ajax({
                                type: 'POST',
                                url: '<?php echo base_url('BookingController/getJadwal') ?>',
                                data: {
                                    'hari': hari,
                                    'id_lapangan': id_lapang
                                },
                                async: false,
                                dataType: 'json',
                                success: function(data) {
                                    var html = '';
                                    var i;
                                    for (i = 0; i < data.length; i++) {
                                        html += '<option>' + data[i].jam + '</option>';
                                    }
                                    $("#jadwal").html(html);
                                }
                            })
                        })
                    })

                </script>

                <div class="col-md-9 deskripsi">
                    <h1>DETAIL LAPANGAN FUTSAL</h1>
                    <p class="pr-5">Lorem ipsum dolor sit amet, an torquatos delicatissimi pro, cu nam tamquam docendi, pro in magna aeterno blandit. Placerat appellantur his ea, unum noluisse forensibus mei in, gubergren scriptorem vis in. Nam putant dictas signiferumque in. Rebum ipsum omnesque ut sea, mel ad etiam aperiri. Sed ei ferri maluisset honestatis.Lorem ipsum dolor sit amet, an torquatos delicatissimi pro, cu nam tamquam docendi, pro in magna aeterno blandit. Placerat appellantur his ea, unum noluisse forensibus mei in, gubergren scriptorem vis in. Nam putant dictas signiferumque in. Rebum ipsum omnesque ut sea, mel ad etiam aperiri. Sed ei ferri maluisset honestatis.</p>
                </div>
            </div>

        </div>
    </section>

    <?php $this->load->view('template/footer.php'); ?>

</body>

</html>
