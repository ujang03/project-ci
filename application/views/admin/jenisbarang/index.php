<div class="container-fluid">
    <div class="card mb-4 mt-4">
        <div class="card-header d-flex justify-content-between">
            <h1 class="mt-1"><b>Satuan Barang</b></h1>

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
                            <th>Id</th>
                            <th>Nama</th>
                            <th>is_actived</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($jenis as $item) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?= $item->id ?></td>
                                <td><a style="text-decoration:none; color:black;"><?= $item->nama ?></a></td>
                                <td><?= ($item->is_actived == 1) ? 'Active' : 'Deactive' ?></td>
                                <td>
                                    <a class="btn btn-warning" href="<?= base_url('JenisBarang/edit') ?>/<?= $item->id ?>"><i class="fa fa-pen"></i></a>
                                    <a class="btn btn-danger" onclick="deleteConfirm('<?= base_url('JenisBarang/delete/') . $item->id ?>')"> <i class="fa fa-trash"></i> </a>
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
                <h4 class="modal-title">Tambah Jenis Barang</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="POST" action="<?php echo base_url('admin/jenisbarang/store') ?>">
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
    function deleteConfirm(url) {
        $("#btn-delete").attr('href', url);
        $("#deleteModal").modal();
    }
</script>