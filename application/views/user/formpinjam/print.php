<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?= $title_pdf; ?>
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient">
    <a class=" text-center justify-content-center" href="<?= base_url('user'); ?>">
        <div class=" my-2">
            <img style="width: 60px;" class="rounded-circle" src='<?= base_url('assets/'); ?>img/logo_PU.png'>
        </div>
        <div class=" mx-0">SYSTEM INVENTORY IT PREUNIV</div>
    </a>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID Peminjam</label></div>
                <div class=""><input type="text" value="<?= $cetakpinjam[0]->id ?>" class="form-control" name=""></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Peminjam</label></div>
                <div class=""><input type="text" value="<?= $cetakpinjam[0]->name ?>" class="form-control" name=""></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal Peminjaman</label></div>
                <div class=""><input type="text" id="tgl_peminjaman" name="tgl_peminjaman" value="<?= $cetakpinjam[0]->tgl_peminjaman; ?>" class="form-control" required></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal Pengembalian</label></div>
                <div class=""><input type="text" id="tgl_peminjaman" name="tgl_pengembalian" value="<?= $cetakpinjam[0]->tgl_pengembalian; ?>" class="form-control" required></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tujuan</label></div>
                <div class=""><input type="text" id="tujuan" name="tujuan" value="<?= $cetakpinjam[0]->tujuan; ?>" class="form-control" required></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Barang</label></div>
                <div class=""><input type="text" id="tujuan" name="tujuan" value="<?= $cetakpinjam[0]->nama_barang; ?>" class="form-control" required></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Unit</label></div>
                <div class=""><input type="text" min="0" id="jumlah_barang" name="jumlah_barang" value="<?= $cetakpinjam[0]->jumlah_barang; ?>" placeholder="Unit" class="form-control" required></div>
            </div>
        </form>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Inventory IT 2023</span>
            </div>
        </div>
    </footer>
</body>

</html>