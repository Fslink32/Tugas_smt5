<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $this->base_url('assets/css/'); ?>profile1.css">
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
              <a class="nav-link" href="halaman.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Detail Barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="insert.php">Tambah Barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Profile1.php">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="profile-section">
    <div class="container">
      <div class="profile-toggle">
        <button class="active" onclick="toggleProfile('seller')">Profile Pembeli</button>
        <button onclick="toggleProfile('buyer')">Profile Penjual</button>
      </div>
      <div id="seller-profile" class="profile-info">
        <img src="https://i.pinimg.com/736x/71/01/7d/71017d2c0810a0c624a5e25c1bd53124.jpg" alt="Profile Picture">
        <h2>Miftahul Rizal</h2>
        <p>Email: miftahulrizal27@gmail.com</p>
        <p>Nomor Telp/WA : 087771234567
        <p>Lokasi: Rangkasbitung-Lebak-Banten</p>
        <a href="#" class="edit-profile">Edit Profile</a>
      </div>
      <div id="buyer-profile" class="profile-info">
        <img src="https://i.pinimg.com/736x/71/01/7d/71017d2c0810a0c624a5e25c1bd53124.jpg" alt="Profile Picture">
        <h2>Miftahul Rizal</h2>
        <p>Email: miftahulrizal27@gmail.com</p>
        <p>Nomor Telp/WA : 087771234567
        <p>Lokasi: Rangkasbitung-Lebak-Banten</p>
        <a href="#" class="edit-profile">Edit Profile</a>
        <div class="product-list">
          <h2>Produk Saya</h2>
          <div class="product-item">
            <img src="https://jubelio-store.s3.ap-southeast-1.amazonaws.com/sustaination/2021/04/01215658/Madu-15-scaled.webp" alt="Product 1">
            <h4>Madu Baduy</h4>
            <p>Madu Merah Murni Baduy Forest 100% Alami Pengganti Gula.</p>
            <button class="lihat-button">Edit</button>
            <button class="hapus-button">Hapus</button>
          </div>
          <div class="product-item">
            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2021/4/17/48f0ec80-8569-40f2-8862-40e2e4dd05e2.jpg" alt="Product 3">
            <h4>Gula Aren Baduy</h4>
            <p>Gula aren atau gula merah adalah pemanis yang dibuat dari nira.</p>
            <button class="lihat-button">Edit</button>
            <button class="hapus-button">Hapus</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2023 Marketplace. All rights reserved.</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</body>

</html>