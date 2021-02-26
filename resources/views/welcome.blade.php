<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tracking Covid-19</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/owl.carousel/frontend/assets/owl.carousel.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"
        rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto">T'Covid-19</h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block navbar-fixed">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">Data</a></li>
                    <li><a href="#services">Kontak</a></li>
                    <li><a href="#departments">Panduan</a></li>
                    <li><a href="#doctors">Angggota</a></li>
                    <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
                    <!-- <li><a href="#contact">Contact</a></li> -->

                </ul>
            </nav><!-- .nav-menu -->

            <!-- <a href="#appointment" class="appointment-btn scrollto">Make an Appointment</a> -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Tracking Covid-19</h1>
            <h2>Data Perkembangan Dan Informasi Corona</h2>
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Counts Section ======= -->
        <section class="counts">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="icofont-plus-circle"></i>
                            {{-- @foreach ($data2 as $datacorona2) --}}
                            <span data-toggle="counter-up">{{ $positif }}</span>
                            <p> <b>Positif</b> </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="icofont-ello"></i>
                            <span data-toggle="counter-up">{{ $sembuh }}</span>
                            <p> <b>Sembuh</b> </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-odnoklassniki"></i>
                            <span data-toggle="counter-up">{{ $meninggal }}</span>
                            <p> <b>Meninggal</b> </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-globe-alt"></i>
                            <span data-toggle="counter-up"><?php echo $posglobal['value']; ?></span>
                            <p> <b>Poeple</b> </p>
                        </div>
                    </div><br><br><br>
                    <div class="col text-center">
                        <h6>
                            <p style="font-weight: bold">Update terakhir : {{ $tanggal }}</p>
                        </h6>
                    </div>
                </div>
        </section><!-- End Counts Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>INGAT PESAN IBU!</h3>
                            <p>
                                Selalu ingat pesan ibu dimana dan kapan pun! dan terapkan 3M
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        {{-- <i class="bx bx-receipt"></i> --}}
                                        <h4>Memakai Masker</h4>
                                        <p>Selalu gunakan masker dimana pun dan kapan pun</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        {{-- <i class="bx bx-receipt"></i> --}}
                                        <h4>Mencuci Tangan</h4>
                                        <p>Selalu Mencuci Tangan saat sudah memegang apapun dan saat sudah keluar rumah
                                            ataupun dalam rumah</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        {{-- <i class="bx bx-receipt"></i> --}}
                                        <h4>Menjaga Jarak</h4>
                                        <p>Selalu menjaga jarak maksimal 1-2 meter jangan sampai berkerumun </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <!-- <section id="about" class="about">
      <div class="container-fluid">

        <div class="row text-center">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
            <a href="#" ></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section>End About Section -->
        <section id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="card-header text-center">
                                DATA KASUS COVID INDONESIA
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Provinsi</th>
                                            <th>Positif</th>
                                            <th>Sembuh</th>
                                            <th>Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no=1; @endphp
                                        @foreach ($data as $datacorona)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $datacorona['attributes']['Provinsi'] }}</td>
                                                <td>{{ $datacorona['attributes']['Kasus_Posi'] }}</td>
                                                <td>{{ $datacorona['attributes']['Kasus_Semb'] }}</td>
                                                <td>{{ $datacorona['attributes']['Kasus_Meni'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Coronavirus Hotline Indonesia</h2>
                    <p>Layanan darurat via telepon yang disediakan oleh Kemkes dan juga </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-ui-call"></i></div>
                            <h4><a href="">Kementrian Kesehatan</a></h4>
                            <p>021-5210-411</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-ui-call"></i></div>
                            <h4><a href="">Kementrian Kesehatan</a></h4>
                            <p>0812-1212-3119</p>
                        </div>
                    </div>

                    <div>
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-ui-call"></i></div>
                            <h4><a href="">Pemprov Dki Jakarta </a></h4>
                            <p>0813-8837-6955</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-ui-call"></i></div>
                            <h4><a href=""></a>Pemprov Jawa Tengah</h4>
                            <p>024-358-0713</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-7 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-ui-call"></i></div>
                            <h4><a href=""></a>Pemprov Jawa Barat</h4>
                            <p>0811-209-3306</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-ui-call"></i></div>
                            <h4><a href=""></a>Pemprov Jawa Timur</h4>
                            <p>031-843-0313</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Appointment Section ======= -->
        <!-- <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="department" id="department" class="form-control">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="doctor" id="doctor" class="form-control">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section>End Appointment Section -->

        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container">

                <div class="section-title">
                    <h2>Panduan</h2>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Jaga kebersihan
                                    tangan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-2">Jangan menyentuh wajah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-3">Terapkan etika batuk dan bersin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-4">Pakai Masker</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-5">Jaga Jarak</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Jaga kebersihan tangan</h3>
                                        <p class="font-italic">Bersihkan tangan dengan cairan pencuci tangan atau hand
                                            sanitizer, apabila permukaan tangan tidak terlihat kotor. Namun, apabila
                                            tangan kotor maka bersihkan menggunakan sabun dan air mengalir.
                                            Cara mencucinya pun harus sesuai dengan standar yang ada, yakni meliputi
                                            bagian dalam, punggung, sela-sela, dan ujung-ujung jari.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('frontend/assets/img/cucit.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Jangan menyentuh wajah</h3>
                                        <p class="font-italic">Dalam kondisi tangan yang belum bersih, sebisa mungkin
                                            hindari menyentuh area wajah, khususnya mata, hidung, dan mulut.
                                            Mengapa? Tangan kita bisa jadi terdapat virus yang didapatkan dari aktivitas
                                            yang kita lakukan, jika tangan kotor ini digunakan untuk menyentuh wajah,
                                            khususnya di bagian yang sudah disebutkan sebelumnya, maka virus dapat
                                            dengan mudah masuk ke dalam tubuh.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('frontend/assets/img/wajah.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Terapkan Etika Batuk Dan Bersin</h3>
                                        <p class="font-italic">Ketika kita batuk atau bersin, tubuh akan mengeluarkan
                                            virus dari dalam tubuh. Jika virus itu mengenai dan terpapar ke orang lain,
                                            maka orang lain bisa terinfeksi virus yang berasal dari tubuh kita. Terlepas
                                            apakah kita memiliki virus corona atau tidak, etika batuk dan bersin harus
                                            tetap diterapkan. Caranya, tutup mulut dan hidung menggunakan lengan atas
                                            bagian dalam. Bagian ini dinilai aman menutup mulut dan hidung dengan
                                            optimal, selain itu bagian lengan atas dalam ini tidak digunakan untuk
                                            beraktivitas menyentuh wajah.
                                            Sehingga relatif aman. Selain dengan lengan, bisa juga menutup mulut dan
                                            hidung menggunakan kain tisu yang setelahnya harus langsung dibuang ke
                                            tempat sampah.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('frontend/assets/img/bb.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pakai Masker</h3>
                                        <p class="font-italic">Bagi Anda yang memiliki gejala gangguan pernapasan,
                                            kenakanlah masker medis ke mana pun saat Anda keluar rumah atau berinteraksi
                                            dengan orang lain. Setelah digunakan (masker medis hanya bisa digunakan 1
                                            kali dan harus segera diganti), jangan lupa buang masker di tempat sampah
                                            yang tertutup dan cuci tangan setelah itu. Namun, bagi Anda yang tidak
                                            memiliki gejala apapun, cukup gunakan masker non-medis, karena masker medis
                                            jumlahnya lebih terbatas dan diprioritaskan untuk mereka yang membutuhkan.
                                            5. Jaga jarak Untuk menghindari terjadinya paparan virus dari orang ke orang
                                            lain, kita harus senantiasa menjaga jarak dengan orang lain minimal 1 meter.
                                            Terlebih, jika orang tersebut menunjukkan gejala gangguan pernapasan. Jaga
                                            jarak juga dikenal dengan istilah physical distancing.
                                            Kita dilarang untuk mendatangi kerumunan, meminimalisir kontak fisik dengan
                                            orang lain, dan tidak mengadakan acara yang mengundang banyak orang.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('frontend/assets/img/masker.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Jaga jarak</h3>
                                        <p class="font-italic">Untuk menghindari terjadinya paparan virus dari orang ke
                                            orang lain, kita harus senantiasa menjaga jarak dengan orang lain minimal 1
                                            meter. Terlebih, jika orang tersebut menunjukkan gejala gangguan pernapasan.
                                            Jaga jarak juga dikenal dengan istilah physical distancing. Kita dilarang
                                            untuk mendatangi kerumunan, meminimalisir kontak fisik dengan orang lain,
                                            dan tidak mengadakan acara yang mengundang banyak orang.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('frontend/assets/img/jaga.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->

        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors">
            <div class="container">

                <div class="section-title">
                    <h2>Anggota Team Kelompok</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('frontend/assets/img/fadlan.jpeg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Moch. Fadlan Adhila</h4>
                                <span>Ketua Kelompok</span>
                                {{-- <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('frontend/assets/img/hadi.jpeg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Hadi Hardiansyah</h4>
                                <span>Anggota</span>
                                {{-- <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('frontend/assets/img/lukman1.jpeg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Lukman Suryana</h4>
                                <span>Anggota</span>
                                {{-- <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('frontend/assets/img/raiza.jpeg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Raiza</h4>
                                <span>Anggota</span>
                                {{-- <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Doctors Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <!-- <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>End Frequently Asked Questions Section -->

        <!-- ======= Gallery Section ======= -->
        {{-- <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend/assets/img/gallery/doc1.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ asset('frontend/assets/img/gallery/doc1.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend/assets/img/gallery/gallery-2.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ asset('frontend/assets/img/gallery/gallery-2.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend/assets/img/gallery/gallery-3.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ asset('frontend/assets/img/gallery/gallery-3.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend/assets/img/gallery/gallery-4.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ asset('frontend/assets/img/gallery/gallery-4.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend/assets/img/gallery/gallery-5.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ asset('frontend/assets/img/gallery/gallery-5.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend/assets/img/gallery/gallery-6.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ asset('frontend/assets/img/gallery/gallery-6.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend/assets/img/gallery/gallery-7.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ asset('frontend/assets/img/gallery/gallery-7.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend/assets/img/gallery/gallery-8.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ asset('frontend/assets/img/gallery/gallery-8.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section --> --}}

        <!-- ======= Contact Section ======= -->
        <!-- <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Kementrian Kesehatan</h3>
                        <p>
                            KEMENTERIAN KESEHATAN RI<br>
                            Biro Komunikasi dan Pelayanan Masyarakat <br>
                            Jl. H.R. Rasuna Said Blok X.5 Kav. 4-9, Kota Jakarta Selatan, Dki Kota Jakarta<br>
                            United States <br><br>
                            <strong>Phone:</strong> 021-5201590 <br>

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            {{-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div> --}}
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
