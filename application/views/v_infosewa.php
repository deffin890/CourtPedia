<html>
<?php $this->load->view('template/head.php'); ?>

<body>
    <?php $this->load->view('template/nav.php'); ?>
    <section class="allmain">
        <div class="headbg" style="background-image:url('<?= base_url('lib/img/bg.jpg')?>')">
            <div class="text">
                <h3>courtpedia</h3>
                <h1>INFO SEWA</h1>
            </div>
        </div>

        <div class="halaman">
            <?php if($this->session->flashdata('sukses') == TRUE){ ?>
            <div class="alert alert-success text-center" role="alert">
                <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                <p><?= $this->session->flashdata('sukses') ?></p>
            </div>
            <?php } ?>
            <h1 class="halo">HALLO, <span><?= $this->session->userdata('nama');?></span></h1>

            <style>
                .halo {
                    font-weight: 600;
                }

                .halo span {
                    font-weight: 400;
                    font-size: 40px;
                    text-transform: capitalize;
                }

            </style>
            <div class="table-responsive mt-5">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>ID LAPANG</th>
                            <th>NAMA LAPANG</th>
                            <th>HARI</th>
                            <th>JAM</th>
                            <th>TANGGAL BOOKING</th>
                            <th>HARGA</th>
                            <th>INVOICE</th>
                            <th>STATUS PEMBAYARAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($invoice as $inv){?>
                        <tr class="text-center">
                            <td><?= $inv->id_lapang; ?></td>
                            <td><?= $inv->nama_lapang; ?></td>
                            <td><?= $inv->hari; ?></td>
                            <td><?= $inv->jam; ?></td>
                            <td><?= $inv->tgl_booking; ?></td>
                            <td><?= $inv->harga; ?></td>
                            <?php if($inv->status_bayar == 0){?>
                            <td>-</td>
                            <td>
                                <a href="<?= base_url('payorder/'.$inv->id)?>">
                                    <button type="button" class="btn btn-primary">Bayar</button>
                                </a>
                            </td>
                            <?php }else{ ?>
                            <td><?= $inv->invoice; ?></td>
                            <td><span class="badge badge-success">Sudah Bayar</span></td>
                            <?php } ?>
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
\
