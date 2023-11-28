<div class="container-fluid">
    <div class="card mb-4 mt-4">
        <div class="card-header d-flex justify-content-between">
            <h4>Form Pengajuan Peminjaman</h4>
            <div class="mt-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Tambah Peminjaman
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peminjam</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Kembali</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Tujuan</th>
                            <th>Status</th>
                            <th style="text-align: center;">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($barang as $b) {
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $b->name ?></td>
                                <td><?= $b->tgl_peminjaman ?></td>
                                <td><?= $b->tgl_pengembalian ?></td>
                                <td><?= $b->nama_barang ?></td>
                                <td><?= $b->jumlah_barang ?></td>
                                <td><?= $b->tujuan ?></td>
                                <td><?php switch ($b->is_completed) {
                                        case '1':
                                            echo "Approved";
                                            break;
                                        case '2':
                                            echo "DisApprove";
                                            break;
                                        default:
                                            echo "Wait for Approve";
                                    } ?>
                                </td>
                                <td>
                                    <?php if ($b->is_completed == 1) { ?>
                                        <a href='<?php echo base_url('admin/checkpinjam/disapprove/'), $b->id ?>' type='button' class='btn btn-danger'><i class='fa-solid fa-x'></i></a>
                                    <?php } elseif ($b->is_completed == 2) { ?>
                                        <a href='<?php echo base_url('admin/checkpinjam/approve/'), $b->id ?>' type='button' class='btn btn-primary'><i class='fa-solid fa-check'></i></a>
                                    <?php } else { ?>
                                        <a href='<?php echo base_url('admin/checkpinjam/approve/'), $b->id ?>' type='button' class='btn btn-primary'><i class='fa-solid fa-check'></i></a>
                                        <a href='<?php echo base_url('admin/checkpinjam/disapprove/'), $b->id ?>' type='button' class='btn btn-danger'><i class='fa-solid fa-x'></i></a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </form>
            </div>
        </div>
    </div>
    <!-- Modal tambah pinjam -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Peminjaman</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="POST" action="<?php echo base_url('admin/checkpinjam/store') ?>">
                    <div class="modal-body">

                        <input type="text" name="nama" placeholder="Nama" class="form-control" required><br>
                        <select name="is_actived" placeholder="is_active" class="form-control" required>
                            <option value="1">actived</option>
                            <option value="0">deactived</option>
                        </select><br>
                        <button type="submit" class="btn btn-primary" name="tambahJenisBarang">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Approve -->
    <!-- <div class="modal fade" id="apModal">
        <div class="modal-dialog">
            <div class="modal-content"> -->

    <!-- Modal Header -->
    <!-- <div class="modal-header">
                    <h4 class="modal-title">Approve</h4> -->
    <!-- </div> -->

    <!-- Modal body -->
    <!-- <form method="POST" action="<?php echo base_url('admin/checkpinjam/store') ?>">
                    <div class="modal-body">
                        <select name="is_actived" placeholder="is_active" class="form-control" required>
                            <option value="1">Approve</option>
                            <option value="2">Disapprove</option>
                        </select><br>
                        <button type="submit" class="btn btn-primary float-right mr-2" name="tambahJenisBarang">Submit</button>
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
</div>
</tbody>
</table>
</div>
</div>
</div>
</div>
</main>
</form>
</div>