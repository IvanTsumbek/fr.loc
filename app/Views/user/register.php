<div class="container">

  <h1><?= $title ?? '' ?></h1>

  <div class="row">

    <col-md-6 class="offset-md-3">
      <form action="<?= base_url('/register') ?>" method="post">

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input name="name" input type="text" class="form-control" id="name" placeholder="Name">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input name="email" input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input name="password" input type="password" class="form-control" id="password" placeholder="password">
        </div>

        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm password</label>
          <input name="confirmPassword" input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password">
        </div>

        <button type="submit" class="btn btn-warning">Register</button>

      </form>
    </col-md-6>

  </div>
</div>