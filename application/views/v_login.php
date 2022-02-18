<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href=" <?= base_url('lib/img/logo3.png')?>">
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('lib/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/css/login.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CourtPedia</title>
</head>

<body>

    <div class="row rows">
        <div class="col-sm-6 text-center abc">
            <!-- Default form login -->
            <form action="<?= site_url('LoginController/getUser')?>" method="post">
                <img src="<?= base_url('lib/img/logo.png')?>" width="150px;">
                <ul class="fxt-socials">
                    <li class="fxt-google"><a href="#" title="google"><i class="fa fa-envelope"></i><span>Google +</span></a></li>
                    <li class="fxt-twitter"><a href="#" title="twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                    <li class="fxt-facebook"><a href="#" title="Facebook"><i class="fa fa-facebook-f"></i><span>Facebook</span></a></li>
                </ul>

                <div class="fxt-style-line">
                    <h2>Or Login With Email</h2>
                </div>

                <?php if($this->session->flashdata('gagal') == TRUE){ ?>
                <div class="alert alert-danger" role="alert">
                    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                    <p><?= $this->session->flashdata('gagal') ?></p>
                </div>
                <?php } ?>

                <input type="text" class="form-control mb-3" placeholder="Username" name="username" required>
                <input type="password" class="form-control mb-4" placeholder="Password" name="password" required>

                <div class="d-flex">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ingatkan Saya</label>
                    </div>
                    <div class="ml-auto">
                        <a href="#">
                            <p>Lupa Password</p>
                        </a>
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-block " type="submit">LOGIN</button>

                <div class="reg">
                    <p>Belum Punya Akun? <a href="<?= base_url('register') ?>">Register</a> </p>
                </div>
            </form>
        </div>
        <div class="col-sm-6 xyz text-center" style="background-image: url(<?= base_url('lib/img/futsal.png')?>)">

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?= base_url('lib/js/bootstrap.min.js') ?>"></script>
</body>

</html>
