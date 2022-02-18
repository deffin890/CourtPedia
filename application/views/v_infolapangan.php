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
            <?php if($this->session->flashdata('sukses') == TRUE){ ?>
            <div class="alert alert-success text-center" role="alert">
                <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                <p><?= $this->session->flashdata('sukses') ?></p>
            </div>
            <?php }?>
            <!--
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>HARI</th>
                            <th>ID LAPANGAN</th>
                            <th>JAM</th>
                            <th>HARGA</th>
                            <th>STATUS LAPANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dataLapang as $dl){ ?>
                        <tr>
                            <td><?= $dl->hari ?></td>
                            <td><?= $dl->id_lapangan ?></td>
                            <td><?= $dl->jam ?></td>
                            <td><?= $dl->harga ?></td>
                            <td>
                                <?php if($dl->status_lapangan == 1){?>
                                <a href="<?= base_url('updateLapang/'.$dl->id);?>">
                                    <button type="button" class="btn btn-primary">Sedang Dipakai</button>
                                </a>
                                <?php }else{ ?>
                                <span class="badge badge-info">Tidak Dipakai</span>
                                <?php }?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
-->
            <div class="container">
                <h1>INFO LAPANGAN</h1>
                <br>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">Senin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Selasa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">Rabu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu3">Kamis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu4">Jumat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu5">Sabtu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu6">Minggu</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <?php foreach($dataLapang as $dl){ ?>
                        <h4 class="mt-5">Lapangan <?= $dl->nama_lapang;?></h4>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">JAM</th>
                                    <th scope="col">HARGA</th>
                                    <th scope="col">STATUS LAPANGAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($dataJadwal as $dj){
                                    if($dl->id == $dj->id_lapangan && $dj->hari == 'Senin'){
                                ?>
                                <tr>
                                    <td><?= $dj->jam; ?></td>
                                    <td><?= $dj->harga; ?></td>
                                    <td>
                                    <?php if($dj->status_lapangan == 1){?>
                                    <a href="<?= base_url('updateLapang/'.$dj->id);?>">
                                        <button type="button" class="btn btn-primary">Sedang Dipakai</button>
                                    </a>
                                    <?php }else{ ?>
                                    <span class="badge badge-info">Tidak Dipakai</span>
                                    <?php }?>
                                    </td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                    <div id="menu1" class="container tab-pane fade">
                        <?php foreach($dataLapang as $dl){ ?>
                        <h4 class="mt-5">Lapangan <?= $dl->nama_lapang;?></h4>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">JAM</th>
                                    <th scope="col">HARGA</th>
                                    <th scope="col">STATUS LAPANGAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($dataJadwal as $dj){
                                    if($dl->id == $dj->id_lapangan && $dj->hari == 'Selasa'){
                                ?>
                                <tr>
                                    <td><?= $dj->jam; ?></td>
                                    <td><?= $dj->harga; ?></td>
                                    <td>
                                    <?php if($dj->status_lapangan == 1){?>
                                    <a href="<?= base_url('updateLapang/'.$dj->id);?>">
                                        <button type="button" class="btn btn-primary">Sedang Dipakai</button>
                                    </a>
                                    <?php }else{ ?>
                                    <span class="badge badge-info">Tidak Dipakai</span>
                                    <?php }?>
                                    </td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                    <div id="menu2" class="container tab-pane fade">
                        <?php foreach($dataLapang as $dl){ ?>
                        <h4 class="mt-5">Lapangan <?= $dl->nama_lapang;?></h4>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">JAM</th>
                                    <th scope="col">HARGA</th>
                                    <th scope="col">STATUS LAPANGAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($dataJadwal as $dj){
                                    if($dl->id == $dj->id_lapangan && $dj->hari == 'Rabu'){
                                ?>
                                <tr>
                                    <td><?= $dj->jam; ?></td>
                                    <td><?= $dj->harga; ?></td>
                                    <td>
                                    <?php if($dj->status_lapangan == 1){?>
                                    <a href="<?= base_url('updateLapang/'.$dj->id);?>">
                                        <button type="button" class="btn btn-primary">Sedang Dipakai</button>
                                    </a>
                                    <?php }else{ ?>
                                    <span class="badge badge-info">Tidak Dipakai</span>
                                    <?php }?>
                                    </td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                    <div id="menu3" class="container tab-pane fade">
                        <?php foreach($dataLapang as $dl){ ?>
                        <h4 class="mt-5">Lapangan <?= $dl->nama_lapang;?></h4>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">JAM</th>
                                    <th scope="col">HARGA</th>
                                    <th scope="col">STATUS LAPANGAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($dataJadwal as $dj){
                                    if($dl->id == $dj->id_lapangan && $dj->hari == 'Kamis'){
                                ?>
                                <tr>
                                    <td><?= $dj->jam; ?></td>
                                    <td><?= $dj->harga; ?></td>
                                    <td>
                                    <?php if($dj->status_lapangan == 1){?>
                                    <a href="<?= base_url('updateLapang/'.$dj->id);?>">
                                        <button type="button" class="btn btn-primary">Sedang Dipakai</button>
                                    </a>
                                    <?php }else{ ?>
                                    <span class="badge badge-info">Tidak Dipakai</span>
                                    <?php }?>
                                    </td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                    <div id="menu4" class="container tab-pane fade">
                        <?php foreach($dataLapang as $dl){ ?>
                        <h4 class="mt-5">Lapangan <?= $dl->nama_lapang;?></h4>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">JAM</th>
                                    <th scope="col">HARGA</th>
                                    <th scope="col">STATUS LAPANGAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($dataJadwal as $dj){
                                    if($dl->id == $dj->id_lapangan && $dj->hari == 'Jumat'){
                                ?>
                                <tr>
                                    <td><?= $dj->jam; ?></td>
                                    <td><?= $dj->harga; ?></td>
                                    <td>
                                    <?php if($dj->status_lapangan == 1){?>
                                    <a href="<?= base_url('updateLapang/'.$dj->id);?>">
                                        <button type="button" class="btn btn-primary">Sedang Dipakai</button>
                                    </a>
                                    <?php }else{ ?>
                                    <span class="badge badge-info">Tidak Dipakai</span>
                                    <?php }?>
                                    </td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                    <div id="menu5" class="container tab-pane fade">
                        <?php foreach($dataLapang as $dl){ ?>
                        <h4 class="mt-5">Lapangan <?= $dl->nama_lapang;?></h4>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">JAM</th>
                                    <th scope="col">HARGA</th>
                                    <th scope="col">STATUS LAPANGAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($dataJadwal as $dj){
                                    if($dl->id == $dj->id_lapangan && $dj->hari == 'Sabtu'){
                                ?>
                                <tr>
                                    <td><?= $dj->jam; ?></td>
                                    <td><?= $dj->harga; ?></td>
                                    <td>
                                    <?php if($dj->status_lapangan == 1){?>
                                    <a href="<?= base_url('updateLapang/'.$dj->id);?>">
                                        <button type="button" class="btn btn-primary">Sedang Dipakai</button>
                                    </a>
                                    <?php }else{ ?>
                                    <span class="badge badge-info">Tidak Dipakai</span>
                                    <?php }?>
                                    </td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                    <div id="menu6" class="container tab-pane fade">
                        <?php foreach($dataLapang as $dl){ ?>
                        <h4 class="mt-5">Lapangan <?= $dl->nama_lapang;?></h4>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">JAM</th>
                                    <th scope="col">HARGA</th>
                                    <th scope="col">STATUS LAPANGAN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($dataJadwal as $dj){
                                    if($dl->id == $dj->id_lapangan && $dj->hari == 'Minggu'){
                                ?>
                                <tr>
                                    <td><?= $dj->jam; ?></td>
                                    <td><?= $dj->harga; ?></td>
                                    <td>
                                    <?php if($dj->status_lapangan == 1){?>
                                    <a href="<?= base_url('updateLapang/'.$dj->id);?>">
                                        <button type="button" class="btn btn-primary">Sedang Dipakai</button>
                                    </a>
                                    <?php }else{ ?>
                                    <span class="badge badge-info">Tidak Dipakai</span>
                                    <?php }?>
                                    </td>
                                </tr>
                                <?php }} ?>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php $this->load->view('template/footer.php'); ?>

</body>

</html>
