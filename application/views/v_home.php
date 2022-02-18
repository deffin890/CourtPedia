<!doctype html>
<html lang="en">

<?php $this->load->view('template/head.php'); ?>

<body>

    <?php $this->load->view('template/nav.php'); ?>


    <section class="parallax" style="background-image:url('<?= base_url('lib/img/bg.jpg')?>')">
        <img src="<?= base_url('lib/img/logo2.png')?>" width="400px" alt="logo">
        <p>We create <span class="rotating">beautiful graphics, functional websites, working mobile apps</span></p>
        <button class="btn" type="submit">LIHAT SELENGKAPNYA</button>
    </section>

    <section class="booking text-center">
        <img class="ml" src="<?= base_url('lib/img/upi.png')?>" width="100">
        <img class="ml-5" src="<?= base_url('lib/img/kemakom.png')?>" width="100">
        <img class="ml-5" src="<?= base_url('lib/img/logo3.png')?>" width="100">
    </section>

    <section class="courtpedia">
        <div class="text">
            <h3>courtpedia</h3>
            <h4>Software booking sarana olahraga online untuk SPORT UPI, yang memudahkan mahasiswa/i ataupun umum dalam melakukan penyewaan</h4>
        </div>


        <div class="grid-container">
            <div class="grid-item item1 mr-2">
                <img src="<?= base_url('lib/img/gambar1.jpg') ?>">
            </div>
            <div class="grid-item item2 mr-2 ">
                <img src="<?= base_url('lib/img/bg.jpg') ?>">
            </div>
            <div class="grid-item item3 mr-2">
                <img src="<?= base_url('lib/img/gambar3.jpg') ?>">
            </div>
            <div class="grid-item item4 mr-2">
                <img src="<?= base_url('lib/img/gambar4.jpg') ?>">
            </div>
            <div class="grid-item item5">
                <img src="<?= base_url('lib/img/gambar5.jpg') ?>">
            </div>
            <div class="grid-item item6 mt-2 mr-2">
                <img src="<?= base_url('lib/img/basketball.png') ?>">
            </div>
            <div class="grid-item item7 mt-2 mr-2">
                <img src="<?= base_url('lib/img/bg2.jpg') ?>">
            </div>
            <div class="grid-item item8 mt-2 mr-2">
                <h6 style="padding:20px;font-size:30px;text-transform:uppercase;font-weight:bold;">Galery CourtPedia</h6>

            </div>
            <div class="grid-item item9 mt-2">
                <img src="<?= base_url('lib/img/futsal.png') ?>">
            </div>
            <div class="grid-item item10 mt-2 mr-2">
                <img src="<?= base_url('lib/img/gambar2.jpg') ?>">
            </div>
            <div class="grid-item item11 mt-2 mr-2">
                <img src="<?= base_url('lib/img/gambar6.jpg') ?>">
            </div>
        </div>
    </section>

    <section class="parallax2" style="background-image:url('<?= base_url('lib/img/bg2.jpg')?>')">
        <div class="d-flex p-5">
            <h2>AYUK SEGERA BOOKING LAPANGANMU !</h2>
            <a href="<?= base_url('sewa');?>" class="ml-auto">
                BOOKING SEKARANG
            </a>
        </div>
    </section>

    <section class="tim">
        <div class="text">
            <h3>tim courtpedia</h3><br>
            <h4>Kumpulkan sumber daya dan kerja sebagai tim selalu mengalahkan kemampuan pribadi.</h4>
        </div>

        <div class="row foto text-center">
            <div class="col-md-3">
                <img src="<?= base_url('lib/img/deffin.jpg')?>" class="img-fluid">
                <div class="bio">
                    <h4>DEFFIN AD</h4>
                    <h5>PROGRAMMER</h5>
                    <div class="sosmed">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('lib/img/alyya.jpg')?>" class="img-fluid">
                <div class="bio">
                    <h4>NON ALYYA</h4>
                    <h5>DEVELOPER</h5>
                    <div class="sosmed">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('lib/img/argi.jpg')?>" class="img-fluid">
                <div class="bio">
                    <h4>M. ARGI</h4>
                    <h5>BACK END DEVELOPER</h5>
                    <div class="sosmed">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?= base_url('lib/img/phon.jpg')?>" class="img-fluid">
                <div class="bio">
                    <h4>PHONTEUKA</h4>
                    <h5>DEVELOPER</h5>
                    <div class="sosmed">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="kontak">
        <div class="row">
            <div class="col-md-6 kontak1">
                <form action="#" method="post">
                    <input type="email" class="form-control" placeholder="Email" required>
                    <input type="text" class="form-control mt-3" placeholder="Subject" required>
                    <textarea class="form-control mt-3" placeholder="Pesan" style="height:100px;"></textarea>
                    <button class="btn mt-4" type="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-6 kontak2">
                <h1>KONTAK KAMI</h1>
                <p>Lorem ipsum dolor sit amet, an torquatos delicatissimi pro, cu nam tamquam docendi, pro in magna aeterno blandit. Placerat appellantur his ea, unum noluisse forensibus mei in, gubergren scriptorem vis in. Nam putant dictas signiferumque in. Rebum ipsum omnesque ut sea, mel ad etiam aperiri. Sed ei ferri maluisset honestatis.</p>
                <div class="sosmed">
                    <i class="fa fa-phone"></i><span>085794132624</span><br>
                    <i class="fa fa-envelope mt-2"></i><span>courtpedia@upi.edu</span><br>
                    <i class="fa fa-map-pin mt-2"></i><span>Universitas Pendidikan Indonesia</span>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('template/footer.php'); ?>


</body>

</html>
