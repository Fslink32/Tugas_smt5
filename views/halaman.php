<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $this->base_url('assets/css/'); ?>halaman.css">
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
  <section class="hero">
    <div class="container">
      <h2>Welcome to Marketplace BADUY</h2>
      <p>Temukan semua yang Anda butuhkan disini</p>
      <form class="search-form">
        <input type="text" placeholder="Cari Produk">
        <button type="search"><a href="search.php">Cari</a></button>

      </form>
    </div>
  </section>

  <section class="product-section">
    <div class="container">
      <h3>Produk</h3>
      <div class="row">
        <?php foreach ($data as $value) : ?>
          <div class="product-item col-md-3 mb-3">
            <img src="<?= $this->base_url('uploads/' . $value['file']); ?>" alt="Product 1">
            <h4><?= $value['nama']; ?></h4>
            <p><?= $value['deskripsi']; ?></p>
            <a href="<?= $this->base_url('detail/product/' . $value['id']); ?>">View Details</a>
          </div>
        <?php endforeach ?>
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