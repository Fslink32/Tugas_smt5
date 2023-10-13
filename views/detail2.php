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
          <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2021/4/17/48f0ec80-8569-40f2-8862-40e2e4dd05e2.jpg" alt="Product 1">
        </div>
        <div class="product-info">
          <h2>Gula Aren Baduy</h2>
          <p>Gula aren, atau gula merah, atau gula kawung adalah pemanis yang dibuat dari nira yang berasal dari tandan bunga jantan pohon enau.
            Gula aren biasanya juga diasosiasikan dengan segala jenis gula yang dibuat dari nira, yaitu cairan yang dikeluarkan dari bunga pohon dari keluarga palma,
            seperti kelapa, aren, dan siwalan.
            <br>
            Gula aren versi bubuk sering pula disebut sebagai gula semut atau gula kristal.
            Dinamakan gula semut karena bentuk gula ini mirip rumah semut yang bersarang di tanah.
          </p>
          <div class="harga">Harga: 10.000-100.000</div>
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