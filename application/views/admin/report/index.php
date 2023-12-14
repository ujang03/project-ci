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
                                        <th>Nama Peminjam</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Barang yang di pinjam</th>
                                        <th>tanggal Peminjaman</th>
                                        <th>tanggal pengembalian</th>
                                        <th>Keperluan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <?php
                                foreach ($reportadmin as $report) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $report->name ?></td>
                                            <td><?= $report->nama_barang ?></td>
                                            <td><?= $report->jumlah_barang ?></td>
                                            <td><?= $report->tgl_peminjaman ?></td>
                                            <td><?= $report->tgl_pengembalian ?></td>
                                            <td><?= $report->tujuan ?></td>
                                            <td><?php
                                                if ($report->is_completed == 1) {
                                                    if ($report->is_return == 1) {
                                                        echo "Barang Sudah Kembali";
                                                    } else {
                                                        echo "Approved";
                                                    }
                                                } elseif ($report->is_completed == 2) {
                                                    echo "Disapproved";
                                                } else {
                                                    echo "Barang belum di approve";
                                                }
                                                ?></td>
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