<div class="container-fluid">
    <div class="card mb-4 mt-4">
        <div class="card-header d-flex justify-content-between">
            <h4>Form Pengajuan Peminjaman</h4>
        </div>
            <div class="card-body card-block">
            <div class="bootstrap-iso">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    
                <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Peminjam</label></div>
                <div class="col-12 col-md-9"><input type="text" value="<?= $user['name']; ?>"  class="form-control" disabled></div>
                <div class="col-12 col-md-9"><input type="hidden" id="idpb" name="idpb" value="" class="form-control" ></div>
                </div>
                <div class="row form-group">
                <div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal Peminjaman</label></div>
                <div class="col-12 col-md-9"><input type="date" id="tanggal" name="tanggal" value=""  class="form-control" required></div>
                </div>
                <div class="row form-group">
                <div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal Pengembalian</label></div>
                <div class="col-12 col-md-9"><input type="date" id="tanggal" name="tanggal" value=""  class="form-control" required></div>
                </div>
                <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama 1</label></div>
                <div class="col-12 col-md-9"><input type="text" id="nama1" name="nama1" value=""  class="form-control" required></div>
                </div>
                <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama 2</label></div>
                <div class="col-12 col-md-9"><input type="text" id="nama2" name="nama2" value=""  class="form-control" required></div>
                </div>
                <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tujuan</label></div>
                <div class="col-12 col-md-9"><input type="text" id="nama3" name="nama3" value=""  class="form-control" required></div>
                </div>

                <div class="row form-group">
                <div class="col col-md-3"><label for="select" class=" form-control-label">Barang</label></div>
                <div class="col-12 col-md-9">
                <select name="select" id="select" class="form-control">
                <?php foreach($barang as $b) { ?>
                <option value="<?php echo $b->id_barang ?>"><?php echo $b->nama_barang ?></option>
                <?php } ?>
                </select>
                </div>
                </div>
                <div class="row form-group">
                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Unit</label></div>
                <div class="col-12 col-md-9"><input type="number" min="0" id="unit" name="unit" placeholder="Unit" class="form-control" required></div>
                </div>
                    
                <div class="row form-group">
                <div class="col col-md-3"></div>
                <div class="col-12 col-md-9">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah
                </button>
                </div>
                </div>						  
                <div class="content mt-3">
        
            <div class="row">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                <strong class="card-title">Barang Pilihan</strong>
            </div>
        <div class="container-fluid">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Jenis Barang</th>
                            <th>Barang yang Tersedia</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($barang as $item) {
                    ?>
                    <tbody>
                        <tr>
                        <td><?= $item->id_barang?></td>
                        <td><a style="text-decoration:none; color:black;"><?= $item->nama_barang ?></a></td>
                        <td><?= $item->stok_barang ?></td>
                        <td><?= $item->nama ?></td>
                        <td></td>
                        <td>
                    <a class="btn btn-warning" href="<?= base_url('AdminBarang/edit') ?>/<?= $item->id_barang ?>"><i class="fa fa-pen"></i></a>
                    <a class="btn btn-danger" onclick="deleteConfirm('<?= base_url('AdminBarang/delete/') . $item->id_barang ?>')" > <i class="fa fa-trash"></i> </a>
                        </td>
                        </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

            </table>
            </div>
            </div>
            </div>
            </div>
</div>
</div>
</main>
</form>