<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $this->base_url('assets/css/'); ?>detail.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="<?= $this->base_url(); ?>">Marketplace Baduy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= $this->base_url('halaman'); ?>">Beranda</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?= $this->base_url('cart'); ?>">Keranjang</a>
            </li>
            <?php if (!empty($_SESSION['users'])) : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= $this->base_url('insert'); ?>">Tambah Barang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= $this->base_url('profile'); ?>">Profile</a>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="btn btn-primary btn-pill" href="<?= $this->base_url('login'); ?>">Login</a>
              </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="detail-section">
    <div class="container">
      <div class="product-container">
        <div class="product-image">
          <img src="<?= $this->base_url('uploads/' . $data['file']); ?>" alt="Product 1">
        </div>
        <div class="product-info">
          <h2><?= $data['nama']; ?></h2>
          <p><?= $data['deskripsi']; ?></p>
          <div class="harga">Harga: <?= $data['harga']; ?></div>
          <button>Beli</button>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2023 Marketplace BADUY. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>