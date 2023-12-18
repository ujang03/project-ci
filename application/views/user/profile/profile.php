<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4">
      <div class="card mb-4">
        <div class="card-body text-center">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
          <h5 class="my-3"><?= $user['name']; ?></h5>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Full Name</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0"><?= $user['name']; ?></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Email</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0"><?= $user['email']; ?></p>
            </div>
          </div>
          <hr>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group row">
              <div class="col-sm-3">
                <p class="mb-0">New Password</p>
              </div>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
              </div>
            </div>
            <hr>
            <div class="form-group row">
              <div class="col-sm-3">
                <label for="reEnter">reenter new password</label>
              </div>
              <div class="col-sm-9">
                <input id="reEnter" type="password" class="form-control" placeholder="Password">
              </div>
            </div>
            <hr>
            <button type="button" class="btn btn-primary float-right">Change Password</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</main>