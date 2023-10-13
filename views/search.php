<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace - Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $this->base_url('assets/css/'); ?>search.css">
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
  <section class="search-section">
    <div class="container">
      <div class="search-bar">
        <input type="text" placeholder="Cari Produk">
        <button class="search-button">Cari</button>
      </div>

      <div class="product-list">
        <div class="product-item">
          <img src="https://jubelio-store.s3.ap-southeast-1.amazonaws.com/sustaination/2021/04/01215658/Madu-15-scaled.webp" alt="Product 1">
          <h4>Madu Baduy</h4>
          <p>Madu Merah Murni Baduy Forest 100% Alami Pengganti Gula
            <br>
            Manfaat Madu Merah Murni Baduy: Membantu meningkatkan daya tahan tubuh. Membantu menpercepat penyembuhan luka. Membantu membantu anti-inflamasi & anti-bakteri.
          </p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://images.tokopedia.net/img/cache/900/product-1/2020/3/27/395739114/395739114_279463cd-720c-4dfa-842f-ab4191e5be76_700_700.jpg" alt="Product 2">
          <h4>Kain Tenun Baduy</h4>
          <p>Kain tenun Suku Baduy dibuat dengan bantuan alam dan proses menenun dilakukan oleh kaum perempuan Suku Baduy. </p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2021/4/17/48f0ec80-8569-40f2-8862-40e2e4dd05e2.jpg" alt="Product 3">
          <h4>Gula Aren Baduy</h4>
          <p>Gula aren, atau gula merah, atau gula kawung adalah pemanis yang dibuat dari nira yang berasal dari tandan bunga jantan pohon enau</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://asset.kompas.com/crops/C53ieEbKJB1pt7X7NupAFHRONk0=/0x133:1000x633/780x390/data/photo/2018/02/18/1513089653.jpg" alt="Product 1">
          <h4>Souvenir</h4>
          <p>Gantungan khas suku baduy yang dibuat dari bahan-bahan yang tersedia dialam.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://asset.kompas.com/crops/Zx0qzYqqfhmcuusMVprdWCVtb_4=/77x19:928x586/1200x800/data/photo/2023/02/07/63e209234faff.jpg" alt="Product 2">
          <h4>Durian</h4>
          <p>saat musim panen tiba yakni dsekitaran bulan September hingga Februari banyak sekali masyarakat Baduy yang memanen buah durian.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://daaitv.co.id/DAAI-WP/wp-content/uploads/2022/05/Gambar-tas-koja-dari-Bukalapak-1080x675.jpg" alt="Product 3">
          <h4>Tas koja</h4>
          <p>Tas Koja merupakan tas yang dibuat oleh Suku Baduy di Pegunungan Kendeng, Kecamatan Leuwidamar, Kabupaten Lebak, Banten. Tas ini terbuat dari kulit kayu Pohon Teureup atau Terap. Pohon in dipilih karena memiliki ketahanan terhadap rayap.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://apollo-singapore.akamaized.net/v1/files/v6fla8j7pgia1-ID/image;s=780x0;q=60" alt="Product 1">
          <h4>Lomar.ikat kepala baduy</h4>
          <p>ikat kepala atau 'Taluang' atau 'Lomar' yang dikenakan warga Baduy Luar terbuat dari bahan kain tenun yang berwarna biru. Warna biru itu diartikan sebagai warna awal atau permulaan, karena orang Baduy percaya bahwa warna biru adalah warna yang keluar dari daun yang ada di pohon-pohon di sekitar mereka</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://disk.mediaindonesia.com/thumbs/1200x-/news/2021/08/9cd98f03a469f38541c169421343b1d1.jpg" alt="Product 2">
          <h4>Baju khas suku baduy dalam</h4>
          <p>Warna putih pada baju diartikan dengan kehidupan mereka yang suci dan tidak terpengaruh budaya luar. Warna ini hanya dikhususkan bagi Suku Baduy Dalam. </p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://filebroker-cdn.lazada.co.id/kf/Sa3389d2c2c52400bb2738182523b297c5.jpg" alt="Product 3">
          <h4>Baju khas suku baduy luar</h4>
          <p>Pakaian adat Banten khas suku Baduy Luar untuk laki-laki berwarna hitam. Oleh karenanya dikenal juga dengan sebutan baju kampret (kalelawar). Baju kampret biasanya dikenakan laki-laki Baduy bersama ikat kepala berwarna biru tua dengan corak batik.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://www.gotravelly.com/blog/wp-content/uploads/2021/12/batik-lebak.jpeg" alt="Product 1">
          <h4>Bati Lebak</h4>
          <p>Batik Lebak dikenal sebagai salah satu oleh-oleh khas Lebak Banten yang cocok untuk kamu bawa pulang. Batik yang satu ini dikenal memiliki motif yang unik dan khas dari provinsi Banten. Tidak hanya dikenal dengan motif yang unik, motif tersebut juga dibuat karena memiliki makna dan filosofi tersendiri.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://www.gotravelly.com/blog/wp-content/uploads/2021/12/leumeung.jpg" alt="Product 2">
          <h4>leumeung</h4>
          <p>oleh-oleh khas Lebak Banten kali ini memiliki sebutan yang sangat unik yakni leumeung. Leumeung merupakan salah satu jenis makanan yang dibuat dengan menggunakan bahan utama beras ketan. Beberapa bahan tambahan lain yang digunakan adalah santan dan kacang tanah</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://www.gotravelly.com/blog/wp-content/uploads/2021/12/gipang.jpg" alt="Product 3">
          <h4>Gipang</h4>
          <p>Jajanan yang satu ini dibuat dengan menggunakan bahan utama beras ketan dan gula. Saat mencobanya, kamu akan dimanjakan dengan tekstur yang lengket dan sedikit renyah serta perpaduan rasa manis dan gurih. Makanan yang satu ini juga biasa dijual dengan kemasan praktis sehingga sangat cocok dipilih sebagai oleh-oleh..</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://www.gotravelly.com/blog/wp-content/uploads/2021/12/keceprek.jpg" alt="Product 1">
          <h4>Emping melinjo atau keceprek</h4>
          <p>Emping melinjo dan keceprek tentu menjadi pilihan tepat yang bisa kamu bawa pulang saat berburu oleh-oleh khas Lebak Banten. Sesuai dengan namanya, makanan yang satu ini memang menggunakan bahan utama melinjo.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://www.gotravelly.com/blog/wp-content/uploads/2021/12/opak.jpg" alt="Product 2">
          <h4>opak</h4>
          <p>Opak juga dikenal sebagai salah satu oleh-oleh khas Lebak Banten yang banyak diburu oleh wisatawan. Opak khas Lebak Banten dikenal dengan teksturnya yang kering dan juga renyah. Terdapat dua pilihan opak yang bisa kamu coba yakni opak yang menggunakan bahan dasar ketan dan juga opak yang menggunakan bahan dasar singkong.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://i0.wp.com/stiebp.ac.id/wp-content/uploads/2020/01/1578476201_Melirik-Usaha-Kue-Kering-Rengginang-Makin-Renyah-Pasarnya.jpg?fit=1250%2C720&ssl=1" alt="Product 3">
          <h4>Rengginang</h4>
          <p>Rengginang tak hanya ada di Jawa Barat semata. Makanan satu ini juga ada di Banten dan menjadi buah tangan di sana. Di Banten, Rengginang dibuat dari nasi ketayang yang dijemur langsung di bawah sinar matahari yang terik.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://pesonanusantara.co.id/images/upload//5/7/578-1083_1.jpg" alt="Product 1">
          <h4>Ceplis</h4>
          <p> Ini adalah keripik khas Banten yang dibuat dari bahan dasar emping melinjo. Pada keripik ini, melinjo bakal digepengkan dulu hingga berbentuk pipih; lalu dicetak dan dikeringkan di bawah sinar matahari.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//90/MTA-3451743/kawung-lebak_gula-semut-isi-2-pack--250-gr_full03.jpg" alt="Product 1">
          <h4>Gula semut Lebak </h4>
          <p> gula semut karena bentuk gula ini mirip rumah semut yang bersarang di tanah. Bahan dasar untuk membuat gula semut adalah nira dari pohon Kelapa atau pohon aren (enau).</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik-2d4858e08994446b32f65cda9c23cfb4.jpeg" alt="Product 2">
          <h4>Motif batik saren taun</h4>
          <p>Batik motif ini merupakan batik khas Kota Rangkasbitung, Ibu Kota Kabupaten Lebak. Batik motif ini menggambarkan adanya budaya perayaan Seren Taun yang dilakukan setiap tahun. Tak hanya itu, di dalam batik motif ini juga terdapat bentuk Leuit Kaolotan dan ikat padi.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik12-b79744820435ff9953441f6d978b7075.jpeg" alt="Product 3">
          <h4>Motif batik sawarna</h4>
          <p> unsur yang ada di dalam batik motif ini. Di dalamnya terdapat unsur Pantai Tanjung Selayar, pohon kelapa, dan sampan khas masyarakat pesisir laut di Lebak.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik10-012735306c097e212fdf7b0183d87a6b.jpeg" alt="Product 1">
          <h4>Motif Batik Gula Sakojor</h4>
          <p>Dalam motif batik ini, menggambarkan budaya pengolahan serta pengemasan gula aren yang masih mempertahankan metode tradisional, dimana gula aren akan diikat dengan pembungkus daun salak dan tali bambu yang digabungkan menjadi satu ikatan (kojor) yang terdiri dari lima hulu (bungkus).</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik2-ca358ccb2e777164c82ca2de4268803f.jpeg" alt="Product 2">
          <h4>Motif Batik Pare Sapocong</h4>
          <p>Di dalam motif batik ini, terdapat unsur Leuit Kaolotan, pola geometris, dan ikat padi. Pare Sapocong sendiri merupakan teknik mengikat padi yang dikumpulkan dari enam genggam padi diikat menjadi satu. Tradisi ini masih dipertahankan di Kasepuhan Lebak Selatan dan Baduy, tujuannya untuk mempermudah pengeringan, pengangkutan, dan penyimpanan padi.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik9-c69ba13ff75f66bc7a38bc74e580e36a.jpeg" alt="Product 3">
          <h4>Motif Batik Kahuripan Baduy</h4>
          <p>LKahirupan Baduy adalah aktivitas keseharian masyarakat suku baduy. Ornamen utama batik ini terdiri dari : rumah panggung sebagai tempat tinggal suku baduy, dengan mata pencaharian utamanya berladang (huma) yang dilambangkan dengan adanya ornamen lantaian (tempat jemuran padi), dan leuit (tempat penyimpanan padi) serta aktivitasnya.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik7-c417b2aa2b67b5d6314779bc6a46c62c.jpeg" alt="Product 2">
          <h4>Motif Batik Leuit Sajimat</h4>
          <p>Batik motif Leuit Sajimat memiliki unsur Leuit Baduy, angklung buhun, bedug kojor, dan rumah Baduy.
            <br>
            Motif batik ini memiliki filosofi yang melambangkan lumbung kemakmuran hidup dengan ketahanan pangan yang cukup.
          </p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik3-e0697b56209248d424f66c9d20e37892.jpeg" alt="Product 3">
          <h4>Motif Batik Rangkasbitung</h4>
          <p>Motif ini merupakan gambaran sumber daya alam yang melimpah yang dimiliki kabupaten lebak. Ornamen gabungan seluruh sumber kekayaan alam yang dimiliki, pada bagian tengahnya ikatan gula, mayang aren, dan bambu, dan juga dihiasi dengan batu kalimaya.
            <br>
            Filosofinya, melambangkan ketertiban, keteraturan, dan keharmonisan.
          </p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik11-81ae5c64e566d57fa630f902f7795005.jpeg" alt="Product 1">
          <h4>Motif Batik Caruluk Saturuy</h4>
          <p>Di dalam motif batik ini, terdapat unsur pohon aren, bambu, dan batu kalimaya.
            <br>
            Filosofinya, motif batik ini melambangkan kehidupan yang penuh kebersamaan meskipun berbeda-beda suku, budaya dan agama, namun tetap saling memberikan manfaat bagi sesama
          </p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik5-c2ddb809510dbd033880b762e25c65f8.jpeg" alt="Product 2">
          <h4>Motif Batik Lebak Bertauhid</h4>
          <p>Motif batik ini terdiri dari unsur-unsur budaya dalam islam seperti bedug, surau masjid, tenun Baduy, dan batik kembang. Surau dan bedug masih tetap dipertahankan dan masih dapat ditemui di lingkungan masyarakat, sebagai sarana siar islam, kegiatan social (musyawarah), dan pendidikan agama. Sedangkan bedug digunakan sebagai pengingat kita sebagai umat islam juga sebagai media social.
            <br>
            Filosofinya, motif batik ini melambangkan citra kehidupan yang religious dengan penuh keimanan dan ketaqwaan kepada Allah SWT.
          </p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik6-95d296d160cccfed05edc77942635c61.jpeg" alt="Product 3">
          <h4>Motif Batik Angklung buhun</h4>
          <p>Batik motif ini terdiri dari unsur angklung buhun, leuit Baduy, bedug lojor, dan rumah Baduy. Angklung buhun dan dogdoglojor adalah kesenian tradisional pada masyarakat suku baduy maupun dikesepuhan lebak selatan.
            <br>
            Filosofinya, melambangkan kedinamisan dan kegembiraan.
          </p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik8-0b8e930381feb73d9ae838c336fbb94b.jpeg" alt="Product 1">
          <h4>Motif Batik kalimaya</h4>
          <p>Kalimaya merupakan sumber daya alam Kabupaten Lebak yang banyak ditemui di Kecamatan Maja, Curugbitung, Sarija, dan cimarga sebagai bahan baku cincin. Batu kalimaya adalah icon Kabupaten Lebak yang diproses mulai dari menambang batu, diproses gurinda dan penggosokan. Ornamen utama dari motif ini yaitu batu kalimaya, pada sisi-sisinya ditambah motif angklung, dan motif tenun baduy.
            <br>
            Filosofinya, melambangkan kehidupan yang kuat dengan harmonisasi warna kebajikan.
          </p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://cdn.idntimes.com/content-images/post/20210911/batik4-728af3ac6fca189a276b98bf1cc9c27f.jpeg" alt="Product 2">
          <h4>Motif Batik Lebak sadulur</h4>
          <p>Motif batik lebak sadulur dilambangkan oleh dua jenis leuit (lumbung padi) yang berada dikesepuhan lebak selatan dan jenis leuit suku baduy. Dari dua jenis leuit yang berbeda tapi mempunyai fungsi dan manfaat sama yaitu sebagai tempat penyimpanan padi. Ornamen batik sadulur terdiri dari dua buah leuit (lumbung padi), leuit kesepuhan lebak selatan, dan leuit suku baduy dengan ornament tambahan motif tenun baduy dan angklung.
            <br>
            Filosofinya, melambangkan kekeluargaan, kesejahteraan, dan kebersamaan.
          </p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
        <div class="product-item">
          <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2023/01/01/3978169634.jpg" alt="Product 3">
          <h4>Motif Batik Baduy</h4>
          <p>Batik Baduy adalah cerminan dari kesederhanaan, keunikan dan nilai karya seni budaya yang lahir dari kearifan lokal masyarakat yang mendiami gunung Kendeng di pegunungan Halimun Utara, Batik Baduy memiliki corak kreweng terwengkal serta menggunakan warna dasar yang sederhana yaitu biru tua dan hitam.</p>
          <button class="view-button">View Details</button>
          <button class="buy-button">Beli</button>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2023 Marketplace baduy All rights reserved.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>