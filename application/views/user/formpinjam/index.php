<div class="container-fluid">
    <div class="card mb-4 mt-4">
        <div class="card-header d-flex justify-content-between">
            <h4>Form Pengajuan Peminjaman</h4>
        </div>
        <div class="card-body card-block">
            <div class="bootstrap-iso">
                <form action="<?php echo base_url('user/formpinjam/save') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Peminjam</label></div>
                        <div class="col-12 col-md-9"><input type="text" value="<?= $user['name']; ?>" class="form-control" name="" disabled></div>
                        <input type="hidden" id="id_user" name="id_user" value="<?= $user['id']; ?>" class="form-control">
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal Peminjaman</label></div>
                        <div class="col-12 col-md-9"><input type="date" id="tgl_peminjaman" name="tgl_peminjaman" value="" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="tanggal" class=" form-control-label">Tanggal Pengembalian</label></div>
                        <div class="col-12 col-md-9"><input type="date" id="tgl_peminjaman" name="tgl_pengembalian" value="" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tujuan</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="tujuan" name="tujuan" value="" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Barang</label></div>
                        <div class="col-12 col-md-9">
                            <select name="id_barang" id="select" class="form-control">
                                <?php foreach ($barang as $b) { ?>
                                    <option value="<?php echo $b->id_barang ?>"><?php echo $b->nama_barang ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Unit</label></div>
                        <div class="col-12 col-md-9"><input type="number" min="0" id="jumlah_barang" name="jumlah_barang" placeholder="Unit" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"></div>
                        <div class="col-12 col-md-9">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>Tambah</button>
                        </div>
                    </div>
                </form>
                <div class="content mt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Barang yang di pinjam</strong>
                                </div>
                                <div class="container-fluid">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Nama Barang</th>
                                                        <th>Jumlah Barang yang di pinjam</th>
                                                        <th>tanggal Peminjaman</th>
                                                        <th>tanggal pengembalian</th>
                                                        <th>Keperluan</th>
                                                        <th>Status</th>
                                                        <th>Opsi</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                foreach ($formpinjam as $form) {
                                                ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?= $form->nama_barang ?></td>
                                                            <td><?= $form->jumlah_barang ?></td>
                                                            <td><?= $form->tgl_peminjaman ?></td>
                                                            <td><?= $form->tgl_pengembalian ?></td>
                                                            <td><?= $form->tujuan ?></td>
                                                            <td><?= $form->is_completed == 0 ? "Pending" : "Approved" ?></td>
                                                            <td>
                                                                <a class="btn btn-success" onclick="deleteConfirm('<?= base_url('AdminBarang/delete/') . $form->id ?>')"> <i class="fa fa-print"></i> </a>
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