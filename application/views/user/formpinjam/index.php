<div class="container-fluid">
    <div class="card mb-4 mt-4">
        <div class="card-header d-flex justify-content-between">
            <h4>Form Pengajuan Peminjaman</h4>

        </div>
        <div class="card-body">
            <form class="mt-2">
                <!-- <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Peminjam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama">
                    </div>
                </div> -->
                <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                <div class="form-group row">

                    <label for="namabarang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <select name="id_barang" class="form-control" id="namabarang">
                            <option value="0">Pilih Barang</option>
                            <?php
                            foreach ($barang as $value) {
                                echo "<option value='" . $value->id_barang . "'>" . $value->nama_barang . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlahbarang" class="col-sm-2 col-form-label">Jumlah Barang</label>
                    <div class="col-sm-10">
                        <input name="jumlah_barang" type="number" class="form-control" id="jumlahbarang">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tglpinjam" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_peminjaman" value="<?= date("Y-m-d") ?>" class="form-control" id="tglpinjam">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="tglkembali" class="col-sm-2 col-form-label">Tanggal Kembalikan</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tglkembali">
                    </div>
                </div> -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">SUBMIT PEMINJAMAN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</main>
</form>
</div>