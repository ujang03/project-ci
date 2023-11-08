<div class="page-content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h4>Edit Jenis Barang</h4>
                <form method="post" action="<?= base_url('JenisBarang/update') ?>">

                    <input type="hidden" value="<?= $dataJenisBarang->id ?>" name="id">

                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= $dataJenisBarang->nama ?>" name="nama" id="nama">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="is_actived" class="col-sm-2 col-form-label">Is Actived</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="is_actived" id="is_actived">
                                <option <?= $dataJenisBarang->is_actived == 'actived' ? 'Selected' : '' ?> value="1">Actived</option>
                                <option <?= $dataJenisBarang->is_actived == 'deactived' ? 'Selected' : '' ?> value="0">Deactived</option>
                            </select>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-outline-info" value="Edit Jenis Barang">
                    <a href="<?= base_url('JenisBarang/index') ?>" class="btn btn-outline-danger">Cancel</a>
                </form>
            </div>
        </div>

    </div>
</div>