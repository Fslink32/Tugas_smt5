<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?= $this->base_url('assets/css/'); ?>login.css">
</head>

<body>
  <div class="container">
    <div class="login-container">
      <h1>Login</h1>
      <form action="<?= $this->base_url('auth/login'); ?>" method="POST">
        <div class="form-group">
          <label for="login-username">nomor_induk</label>
          <input type="text" id="login-username" name="nomor_induk" required>
        </div>
        <div class="form-group">
          <label for="login-password">Tanggal Lahir</label>
          <input type="text" id="login-password" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
          <button type="submit">Login</button>
        </div>
      </form>
      <p>Don't have an account? <a href="<?= $this->base_url('register'); ?>">Register here</a></p>
    </div>
  </div>
</body>

</html>