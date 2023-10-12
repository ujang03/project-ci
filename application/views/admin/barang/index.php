<div class="container-fluid">
    <div class="card mb-4 mt-4">
        <div class="card-header d-flex justify-content-between">
            <h1 class="mt-1"><b>Barang</b></h1>

            <!-- Button to Open the Modal -->
            <div class="mt-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Add Item
                </button>

            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Jenis Barang</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($barang as $item) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?= $item->id_barang ?></td>
                                <td><a style="text-decoration:none; color:black;"><?= $item->nama_barang ?></a></td>
                                <td><?= $item->stok_barang ?></td>
                                <td><?= $item->jenis_barang ?></td>
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

<!-- Modal tambah barang -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Barang</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="POST" action="<?php echo base_url('admin/barang/store') ?>">
                <div class="modal-body">

                    <input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control" required><br>
                    <input type="number" name="stok_barang" placeholder="Stok Barang" class="form-control" required><br>
                    <select name="jenis_barang" placeholder="Jenis_barang" class="form-control" required>
                        <option value="pcs">Pcs</option>
                        <option value="meter">Meter</option>
                    </select><br>
                    <button type="submit" class="btn btn-primary" name="tambahBarang">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Hapus Barang</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="POST">
                <div class="modal-body">
                    Apakah yakin ingin menghapus barang ini ?<br><br>
                    <!-- <input type="hidden" name="kodeBarang" value="'id_barang'"> -->
                    <a id="btn-delete" class="btn btn-danger">Delete</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function deleteConfirm(url){
        $("#btn-delete").attr('href',url);
        $("#deleteModal").modal();
    }
</script>