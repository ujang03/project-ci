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

                        <tr>
                            <td></td>
                            <td> username</td>
                            <td> nama_barang</td>
                            <td> jumlah_barang</td>
                            <td> tgl_peminjaman</td>
                            <td>'status'=="Approved":"checked"</td>
                            <td><button class="btn btn-info">Detail</button></td>
                        </tr>
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