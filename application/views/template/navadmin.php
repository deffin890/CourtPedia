    <style>
        .header.active {
            background: black;
            transition: 0.5s;
            color: black;
        }

    </style>
    <script type="text/javascript">
        $(window).on("scroll", function() {
            if ($(window).scrollTop() > 50) {
                $(".header").addClass("active");
            } else {
                $(".header").removeClass("active");
            }
        });
        
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

    </script>
    <nav class="navbar fixed-top navbar-expand-sm p-1 header">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('lib/img/logo3.png')?>" width="50" alt="logo" class="ml-5">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse mr-5" id="navbar-list-2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('admin'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('infolapangan'); ?>">Info Lapangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('logout'); ?>">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-bars"></i></a>
                </li>

            </ul>
        </div>
    </nav>
