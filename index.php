<?php
$koneksi = mysqli_connect("localhost", "root", "", "anangsetia", 3307);

 if (isset($_POST['simpan'])) {
  $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
  $pesan = mysqli_real_escape_string($koneksi, $_POST['pesan']);
  $simpan = mysqli_query($koneksi, "INSERT INTO dukungan (nama, pesan) VALUES('$nama', '$pesan')");

    // if($simpan) {
    //   echo "<script>window.alert('Dukungan Berhasil disimpan')
    //   window.localtion='index.php'</script>";
    // }else{
    //   echo "<script>window.alert('Dukungan Gagal disimpan')
    // window.localtion='index.php'</script>";
    // }
   
  }

 ?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Anang Setia Sumarsono</title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="images/profile.png" type="image/x-icon">

  <link href="css/aos.css?ver=1.1.0" rel="stylesheet" />
  <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/flipdown/flipdown.css">
  <link href="css/main.css?ver=1.1.0" rel="stylesheet" />
  <noscript>
    <style type="text/css">
      [data-aos] {
        opacity: 1 !important;
        transform: translate(0) scale(1) !important;
      }
    </style>
  </noscript>
</head>

<body id="top">
  <header>
    <div class="profile-page sidebar-collapse">
      <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand" href="#" rel="tooltip">Anang Setia</a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
              aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span
                class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <nav class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link smooth-scroll" href="#pengalaman">Pengalaman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link smooth-scroll" href="#tugas">Penugasan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link smooth-scroll" href="#dukungan">Dukungan</a>
              </li>
            </ul>
          </nav>
        </div>
      </nav>
    </div>
  </header>
  <div class="page-content">
    <div>
      <!-- Hero Item -->
      <div class="profile-page">
        <div class="wrapper">
          <div class="page-header page-header-small" filter-color="green">
            <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');">
            </div>
            <div class="container">
              <div class="content-center">
                <div class="cc-profile-image">
                  <a href="#"><img src="images/profile.png" alt="Image" /></a>
                </div>
                <p class="category text-white text-uppercase mb-0">Dukung Pilihan Kita</p>
                <div class="h2 title mt-0">Anang Setia Sumarsono, M.Si</div>
                <p class="category text-white text-uppercase">
                  Caleg DPR RI PDI Perjuangan <br />
                  Dapil Jabar I (Kota Bandung & Cimahi)
                </p>
                <p class="category text-white text-uppercase">"Pilih Yang SETIA"</p>
                <a class="btn btn-primary smooth-scroll" href="#about" data-aos="zoom-in"
                  data-aos-anchor="data-aos-anchor">Selengkapnya</a>
              </div>
            </div>
            <div class="section">
              <div class="container">
                <div class="button-container">
                  <a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.facebook.com/anang.setia.92"
                    rel="tooltip" target="_blank" title="Follow me on Facebook">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a class="btn btn-default btn-round btn-lg btn-icon"
                    href="https://www.instagram.com/anang_setia_sumarsono/" rel="tooltip" target="_blank"
                    title="Follow me on Instagram">
                    <i class="fa fa-instagram"></i>
                  </a>
                  <a class="btn btn-default btn-round btn-lg btn-icon"
                    href="https://www.tiktok.com/@pdip.anang.setia?_t=8iaSOztnnCK&_r=1" rel="tooltip" target="_blank"
                    title="Follow me on Tiktok">
                    <i class="fa fa-brands fa-tiktok"></i>
                  </a>
                  <a class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Play and Pause Music"
                    onclick="toggleAudio()">
                    <!-- <audio controls autoplay id="myAudio" style="display: none;">
                      <source src="./audio/mars-pdip.mp3" type="audio/mp3">
                      Your browser does not support the audio element.
                    </audio> -->
                    <i class="fa fa-play "></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Tentang -->
      <div class="section" id="about">
        <div class="container">
          <div class="card" id="card-about" data-aos="fade-up" data-aos-offset="10">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-12">
                <div class="card-body tentang">
                  <p class="text-white">Kenali Calon Pilihan Kita</p>
                  <div class="h4 mt-0 title text-white">Anang Setia Sumarsono, M.Si</div>
                  <p class="text-white">Caleg DPR RI PDI Perjuangan <br />
                    Dapil Jabar I (Kota Bandung & Cimahi)</p>
                  <div class="h4 mt-0 title text-white">Gerak Cepat Indonesia Unggul</div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 text-center">
                <img src="./images/profile-full.jpg" alt="Profile Anang" class="p-4"
                  style="height: 400px; margin: 1rem 0;">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Countdown -->
      <div class="section text-center d-flex flex-column justify-content-center">
        <div class="h4 text-center mb-4 title">Ikut Ramaikan Pesta Demokrasi <br> 14 Februari 2024</div>
        <div id="flipdown" class="flipdown"></div>
      </div>
      <!-- Youtube -->
      <div class="section" id="profile">
        <div class="container">
          <div class="h4 text-center mb-4 title text-uppercase">Indonesia Unggul</div>
          <center>
            <iframe src="https://www.youtube.com/embed/vLB_KGfc5No?si=UY45IfRYe_sIXXjj" title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen style="border-radius: 20px;"></iframe>
          </center>
        </div>
      </div>
      <!-- Visi Misi -->
      <div class="section" id="visi">
        <div class="container">
          <div class="h4 text-center mb-4 title text-uppercase">Visi & Misi</div>
          <div class="row justify-content-around mt-3">
            <div class="card card-visi col-lg-5 col-md-12" data-aos="fade-up" data-aos-offset="10"
              style="height: 100%;">
              <div class="card-body">
                <div class="h4 mt-0 title text-center">Visi</div>
                <hr>
                <p class="text-center font-weight-bold">
                  “Menuju Indonesia Unggul: Gerak Cepat Mewujudkan Negara Maritim yang Adil dan Lestari”.
                </p>
              </div>
            </div>
            <div class="card card-visi col-lg-5 col-md-12" data-aos="fade-up" data-aos-offset="10">
              <div class="card-body">
                <div class="h4 mt-0 title text-center">Misi</div>
                <hr>
                <p class="text-justify">
                  <ol>
                    <li>Mempercepat pembangunan manusia Indonesia unggul yang berkualitas, produktif, dan
                      berkepribadian.</li>
                    <li>Mempercepat penguasaan sains dan teknologi melalui percepatan Riset dan Inovasi (R & I)
                      berdikari</li>
                    <li>Mempercepat pembangunan ekonomi berdikari berbasis pengetahuan dan nilai tambah</li>
                    <li>Mempercepat pemerataan pembangunan ekonomi</li>
                    <li>Mempercepat pembangunan sistem digital nasional</li>
                    <li>Mempercepat perwujudan lingkunganhidup yang berkelanjutan melalui ekonomi hijau dan biru</li>
                    <li>Mempercepat pelaksanaan demokrasi substantif, penghormatan hak asasi manusia (HAM), supremasi
                      Hukum yang berkeadilan, dan keamanan yang profesional</li>
                    <li>Mempercepat peningkatan peran Indonesia dalam mewujudkan tata dunia baru yang lebih berkeadilan
                      melalui politik luar negeri bebas aktif dan memperkuat pertahanan negara.</li>
                  </ol>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pendidikan -->
      <div class="section" id="pendidikan">
        <div class="h4 text-center mb-4 title text-uppercase">Pendidikan</div>
        <div class="container cc-education">
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                  <p>2007 - 2009</p>
                  <div class="h5">Gelar Magister</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body edu">
                  <div class="h5">Magister Ilmu Komunikasi</div>
                  <p class="category">Universitas Indonesia</p>
                  <p>Selama periode 2007 hingga 2009, beliau mengejar gelar Magister Ilmu Komunikasi di Universitas
                    Indonesia, memperdalam pemahaman tentang aspek-aspek kritis dalam bidang komunikasi.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                  <p>2002 - 2007</p>
                  <div class="h5">Gelar Sarjana</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body edu">
                  <div class="h5">Sarjana Sastra Inggris</div>
                  <p class="category">Universitas Negeri Jakarta</p>
                  <p>
                    Dalam rentang waktu 2002 hingga 2007, beliau menyelesaikan program Sarjana Sastra Inggris di
                    Universitas Negeri Jakarta, memperoleh pemahaman yang mendalam tentang studi sastra Inggris</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                  <p>1999 - 2002</p>
                  <div class="h5">Sekolah Menengah Atas</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body edu">
                  <div class="h5">Sekolah Menengah Atas</div>
                  <p class="category">Sekolah Taruna Nusantara</p>
                  <p>Pada periode 1999 hingga 2002, beliau menyelesaikan pendidikan Sekolah Menengah Atas di Sekolah
                    Taruna Nusantara, mendapatkan dasar pendidikan yang kokoh untuk perjalanan akademis saya
                    selanjutnya.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pengalaman Kerja -->
      <div class="section" id="pengalaman">
        <div>
          <div class="h4 text-center mb-4 title text-uppercase">Pengalaman Kerja</div>
          <div class="container timeline">
            <div class="timeline">
              <ul class="timeline-mobile">
                <li>
                  <div class="timeline-content">
                    <h3 class="date">Tahun 2019 - Sekarang</h3>
                    <h1>Tenaga Ahli AKD Komisi VI</h1>
                    <p class="font-weight-bold">DPR RI</p>
                    <p>Mendukung Kinerja Pimpinan Komisi VI DPR RI </p>
                  </div>
                </li>
                <li>
                  <div class="timeline-content">
                    <h3 class="date">Tahun 2019 - Sekarang</h3>
                    <h1>Direktur</h1>
                    <p class="font-weight-bold">PT. VISI INTERNASIONAL PERSADA</p>
                    <p>Pimpinan perusahaan bidang pengadaan barang dan jasa di Kementerian Pertahanan, TNI, POLRI, BUMN
                      dan BUMD.</p>
                  </div>
                </li>
                <li>
                  <div class="timeline-content">
                    <h3 class="date">Tahun 2021 - September 2023</h3>
                    <h1>Direktur Utama</h1>
                    <p class="font-weight-bold">PT. ARMORY REBORN INDONESIA </p>
                    <p>Pimpinan Perusahaan bidang media pertahanan, keamanan dan geopolitik nasional dan internasional.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Pilih yang SETIA -->
      <div class="section">
        <div class="h4 text-center mb-4 title">Pilih Pemimpin Yang</div>
        <div class="row justify-content-center">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h1 class="flip">S</h1>
              </div>
              <div class="flip-card-back">
                <p>Setia</p>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h1 class="flip">E</h1>
              </div>
              <div class="flip-card-back">
                <p>Empati</p>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h1 class="flip">T</h1>
              </div>
              <div class="flip-card-back">
                <p>Taat</p>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h1 class="flip">I</h1>
              </div>
              <div class="flip-card-back">
                <p>Iman</p>
              </div>
            </div>
          </div>
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h1 class="flip">A</h1>
              </div>
              <div class="flip-card-back">
                <p>Amanah</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Penugasan Partai -->
      <div class="carousel-inner section" id="tugas">
        <div class="h4 text-center mb-4 title text-uppercase">Penugasan Partai</div>
        <div class="row justify-content-center row-partai">
          <div class="card partai item">
            <img class="card-img-top" src="./images/partai/1.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text font-weight-bold text-center pt-2">Caleg DPR RI PDI Perjuangan No Urut 2 Dapil Jabar I
                (Kota Bandung & Kota Cimahi)</p>
            </div>
          </div>
          <div class="card partai item ">
            <img class="card-img-top" src="./images/partai/2.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text font-weight-bold text-center pt-2">Kepala Biro Analisis & Evaluasi Badan Kebudayaan
                Nasional Pusat (BKNP) PDI Perjuangan</p>
            </div>
          </div>
          <div class="card partai item">
            <img class="card-img-top" src="./images/partai/3.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text font-weight-bold text-center pt-2">Koordinator bidang Pengamanan Kegiatan Peringatan
                Bulan Bung Karno di GBK 2023</p>
            </div>
          </div>
          <div class="card partai item">
            <img class="card-img-top" src="./images/partai/4.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text font-weight-bold text-center pt-2">Koordinator Acara 50 tahun PDI Perjuangan di
                Kemayoran 2023</p>
            </div>
          </div>
          <div class="card partai item">
            <img class="card-img-top" src="./images/partai/5.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text font-weight-bold text-center pt-2">Koordinator Peduli Korban Gempa Cianjur BKNP PDI
                Perjuangan 2022</p>
            </div>
          </div>
          <div class="card partai item">
            <img class="card-img-top" src="./images/partai/6.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text font-weight-bold text-center pt-2">Direktur Festival Desa II BKNP PDI Perjuangan 2022
              </p>
            </div>
          </div>
          <div class="card partai item">
            <img class="card-img-top" src="./images/partai/7.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text font-weight-bold text-center pt-2">Direktur Festival Desa I BKNP PDI Perjuangan 2021
              </p>
            </div>
          </div>
          <div class="card partai item">
            <img class="card-img-top" src="./images/partai/8.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text font-weight-bold text-center pt-2">Koordinator Peresmian Rumah Budaya PDI Perjuangan
                2020</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Dukungan -->
      <div class="section" id="dukungan">
        <div>
          <div class="row justify-content-center" style="gap: 10rem">
            <div>
              <div class="text-center">
                <a class="btn btn-default btn-round btn-lg btn-icon" href="#">
                  <i class="fa fa-solid fa-user-group"></i>
                </a>
              </div>
              <div class="text-center">
                <div class="h4 dukungan m-0 text-center title value" akhi="55372">0</div>
                <p>Dukungan</p>
              </div>
            </div>
            <div>
              <div class="text-center">
                <a class="btn btn-default btn-round btn-lg btn-icon" href="#">
                  <i class="fa fa-regular fa-face-smile"></i>
                </a>
              </div>
              <div class="text-center">
                <div class="h4 dukungan m-0 text-center title value" akhi="7593">0</div>
                <p>Relawan</p>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="container cc-reference">
          <div class="h4 mb-4 text-center title">Dukungan</div>
          <p class="text-center">Berikan Dukungan anda Kepada Anang Setia Sumarsono sebagai Calon DPR RI Tahun 2024 <br>
            Dapil Jawa Barat I Kota Bandung dan Kota Cimahi melalui kolom komentar dibawah</p>
          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100" style="margin: 0 auto;">
            <div class="my-2 p-3 pt-2">
              <form action="#" method="POST">
                <div class="form-group my-2">
                  <label for="name" class="form-label fw-bolder">Nama</label>
                  <input class="form-control" type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group my-2">
                  <label for="message" class="form-label fw-bolder">Dukungan</label>
                  <textarea class="form-control" style="resize: none;" id="pesan" name="pesan" rows="4"
                    required></textarea>
                </div>
                <button class="btn btn-primary mt-2" type="submit" name="simpan">KIRIMKAN DUKUNGAN</button>
              </form>
            </div>
          </div>
          <hr>

          <div class="section" id="komentar">
            <div class="h4 mb-4 text-center title">Dukungan</div>
            <div class="text-center">
              <img src="/images/profile.png" alt="">
            </div>
            <div class="row justify-content-center">
              <div class="scrollable-container mt-3" style="max-height: 300px; overflow-y: auto;">
                <?php
            $data_dukungan = mysqli_query($koneksi, "SELECT * FROM dukungan ORDER BY id ASC");
            while ($tampil_dukungan = mysqli_fetch_array($data_dukungan)) {
            ?>
                <div class="rounded p-2 text-center m-2 card-komen">
                  <h5 class="mb-0 font-weight-bold"><?php echo $tampil_dukungan['nama']; ?></h5>
                  <p><?php echo $tampil_dukungan['pesan']; ?></p>
                </div>
                <?php
            }
            ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <footer class="footer">
    <div class="container text-center">
      <a class="cc-facebook btn btn-link" href="https://www.facebook.com/anang.setia.92">
        <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
      </a>
      <a class="cc-instagram btn btn-link" href="https://www.instagram.com/anang_setia_sumarsono/">
        <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
      </a>
    </div>
    <div class="h4 title text-center">Anang Setia Sumarsono</div>
    <div class="text-center text-muted">
      <p>
        &copy; 2023 All rights reserved.<br />
      </p>
    </div>
  </footer>

  <script>
    const counters = document.querySelectorAll('.value');
    const speed = 300;

    counters.forEach(counter => {
      const animate = () => {
        const value = +counter.getAttribute('akhi');
        const data = +counter.innerText;

        const time = value / speed;
        if (data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 1);
        } else {
          counter.innerText = value;
        }

      }

      animate();
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://kit.fontawesome.com/9b616d1e46.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
  <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
  <script src="js/core/popper.min.js?ver=1.1.0"></script>
  <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
  <script src="js/now-ui-kit.js?ver=1.1.0"></script>
  <script src="js/aos.js?ver=1.1.0"></script>
  <script type="text/javascript" src="js/flipdown/flipdown.js"></script>
  <script src="scripts/main.js?ver=1.1.0"></script>
</body>

</html>