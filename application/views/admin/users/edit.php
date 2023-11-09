<div class="page-content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h4>Edit User</h4>
                <form method="post" action="<?= base_url('AdminUser/update') ?>">

                    <input type="hidden" value="<?= $dataUser->id ?>" name="id">

                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= $dataUser->name ?>" name="name" id="name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= $dataUser->email ?>" name="email" id="Email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="role_id" class="col-sm-2 col-form-label">Role ID</label>
                        <div class="col-sm-10">
                        <select name="role_id" placeholder="Role" class="form-control" required>
                    <?php
                    foreach ($roles as $role) {
                    ?>
                        <option value="<?= $role->id ?>"><?= $role->role ?></option>
                    <?php }; ?>
                    </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="is_actived" class="col-sm-2 col-form-label">Actived</label>
                        <div class="col-sm-10">
                        <select name="is_actived" placeholder="Role" class="form-control" required>
                    
                        <option value="1">active</option>
                        <option value="0">deactive</option>
                    
                    </select>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-outline-info" value="Edit User">
                    <a href="<?= base_url('AdminUser/index') ?>" class="btn btn-outline-danger">Cancel</a>
                </form>
            </div>
        </div>

    </div>
</div>