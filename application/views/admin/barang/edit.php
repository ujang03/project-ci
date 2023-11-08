<div class="page-content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h4>Edit Barang</h4>
                <form method="post" action="<?= base_url('AdminBarang/update') ?>">

                    <input type="hidden" value="<?= $dataBarang->id_barang ?>" name="id_barang">

                    <div class="row mb-3">
                        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= $dataBarang->nama_barang ?>" name="nama_barang" id="nama_barang">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stok_barang" class="col-sm-2 col-form-label">Stok Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= $dataBarang->stok_barang ?>" name="stok_barang" id="stok_barang">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis Barang</label>
                        <div class="col-sm-10">
                           <select name="jenis_barang" placeholder="Jenis_barang" class="form-control" required>
                    <?php
                    foreach ($jenis as $item) {
                    ?>
                        <option value="<?= $item->id ?>"><?= $item->nama ?></option>
                    <?php }; ?>
                    </select><br>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-outline-info" value="Edit Barang">
                    <a href="<?= base_url('AdminBarang/index') ?>" class="btn btn-outline-danger">Cancel</a>
                </form>
            </div>
        </div>

    </div>
</div>