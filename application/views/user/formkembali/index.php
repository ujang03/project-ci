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
                                            <td><?php switch ($form->is_completed) {
                                                    case '1':
                                                        echo "Approved";
                                                        break;
                                                    case '2':
                                                        echo "DisApprove";
                                                        break;
                                                    default:
                                                        echo "Wait for Approve";
                                                } ?></td>
                                            <td>
                                                <a class="btn btn-success" onclick="deleteConfirm('<?= base_url('user/formpinjam') . $form->id ?>')"> <i class="fa fa-print"></i> </a>
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