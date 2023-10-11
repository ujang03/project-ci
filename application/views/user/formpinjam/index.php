<div id="layoutSidenav_content">
<main>
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
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php $no = 1;

                        $sql = "SELECT * 
                        FROM tb_peminjam a, tb_barang b, tb_akun c, tb_trans_peminjaman d
                        where b.id_barang = a.id_barang
                        and a.id_akun = c.id_akun
                        and a.id_peminjam = d.id_peminjam";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                        ?> -->
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['username']; ?></td>
                                <td><?= $row['nama_barang'];?></td>
                                <td><?= $row['jumlah_barang']; ?></td>
                                <td><?= $row['tgl_peminjaman']; ?></td>
                                <td><?= $row['status']==1?"Approved":"checked";?></td>
                                <td>
                                    <!-- <?php
                                        if($row['status'] == 0){
                                            echo "<a href='approvepeminjaman.php?id=$row[id_peminjam]' type='button' class='btn btn-primary'>Approve</a>";
                                        }
                                    ?> -->
                                    <button class="btn btn-info">Detail</button>
                                </td>
                            </tr>
                            </form>
                            </div>
                                </div>
                            </div>
                        <!-- <?php
                        };
                        ?> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</main>
        </form>
    </div>
</div>
</div>