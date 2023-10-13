<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="<?= $this->base_url('assets/css/'); ?>register.css">
</head>

<body>
  <div class="container">
    <div class="register-container">
      <h1>Register</h1>
      <form action="<?= $this->base_url('auth/register'); ?>" method="POST">
        <div class="form-group">
          <label for="register-username">Nomor Induk</label>
          <input type="text" id="register-username" name="nomor_induk" required>
        </div>
        <div class="form-group">
          <label for="register-email">Nama Lengkap</label>
          <input type="text" id="register-email" name="nama_lengkap" required>
        </div>
        <div class="form-group">
          <label for="register-password">Tanggal Lahir</label>
          <input type="text" id="register-password" name="tanggal_lahir" required>
        </div>
        <!-- <div class="form-group">
          <label for="register-confirm-password">Confirm Password</label>
          <input type="password" id="register-confirm-password" required>
        </div> -->
        <div class="form-group">
          <button type="submit">Register</button>
        </div>
      </form>
      <p>Already have an account? <a href="<?= $this->base_url('login'); ?>">Login here</a></p>
    </div>
  </div>
</body>

</html>