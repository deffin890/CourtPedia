<html>
<?php $this->load->view('template/head.php'); ?>

<body>
    <?php $this->load->view('template/navadmin.php'); ?>
    <section class="allmain">
        <div class="headbg" style="background-image:url('<?= base_url('lib/img/bg.jpg')?>')">
            <div class="text">
                <h3>courtpedia</h3>
                <h1>HALLO ADMIN !</h1>
            </div>
        </div>

        <div class="halaman">
            <h2>ORDER CUSTOMER</h2><br>
            <div class="table-responsive ">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>NAMA</th>
                            <th>LAPANG</th>
                            <th>JADWAL</th>
                            <th>TANGGAL BOOKING</th>
                            <th>INVOICE</th>
                            <th>HARGA</th>
                            <th>PEMBAYARAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $d){?>
                        <tr>
                            <td><?= $d->nama;?></td>
                            <td><?= $d->nama_lapang;?></td>
                            <td><?= $d->hari;?>, <?= $d->jam;?></td>
                            <td><?= $d->tgl_booking;?></td>
                            <td><?= $d->invoice;?></td>
                            <td><?= $d->harga;?></td>
                            <td>
                                <?php if($d->status_bayar == 1){?>
                                <span class="badge badge-success">Sudah Bayar</span>
                                <?php }else{ ?>
                                <span class="badge badge-danger">Belum Bayar</span>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <?php $this->load->view('template/footer.php'); ?>

</body>

</html>
