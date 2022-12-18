<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
   <!-- Template Main CSS File -->
   <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Hackathon</title>
</head>
<body>
    @extends('navbar')
    @extends('navbar')
    <section id="hero" style="height: 50vh">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
          <h1 class="mb-4 pb-0">Technostalgia</h1>
          <p class="mb-4 pb-0">Brings You Back The Nostalgic of Challenging Competition</p>
          <a href="{{Route('register')}}" class="about-btn scrollto">REGISTER</a>
        </div>
      </section><!-- End Hero Section -->
    <br><br><br><br>
    <div class="container">
        <h1 class = "text-center">Hackathon</h1>
        <div class= "container" style ="background-color:white; color:gray">
        <h3>DESKRIPSI</h3>
        <hr>
        <p>Hackathon merupakan kompetisi coding selama 36 jam, di mana setiap tim bersaing untuk membuat aplikasi atau situs web inovatif yang dapat memecahkan permasalahan di kehidupan nyata. Peserta berkesempatan untuk berinteraksi dengan para mentor dalam sesi mentoring bisnis, teknologi, dan desain.
        Dalam lomba ini, Anda berkesempatan melakukan mentoring bisnis, desain, dan teknologi langsung dari orang-orang yang berpengalaman di bidang IT serta memberikan masukan tentang proyek yang dikerjakan. Dengan menyelesaikan case study yang diberikan, Anda dapat menambah value CV juga.</p>
        </p>

        <br>
        <h3>PERSYARATAN PARTISIPASI</h3>
        <hr>
        <ul>
          <li>Peserta hanya dapat bergabung dalam 1 tim, baik secara individu maupun tim (setiap tim dapat beranggotakan maksimal 4 orang).</li>
          <li>Peserta adalah warga negara Indonesia berusia 18 hingga 25 tahun untuk memenuhi syarat.</li>
          <li>Untuk Informasi lebih lanjut, peserta dapat melihat buku panduan Hackathon 5.0 di situs web kami.</li>
        </ul>

        <br>
        <h3>RULES</h3>
        <hr>
        <ol type ="a">
          <li>Tim yang terpilih untuk mengikuti Hackathon akan dihubungi melalui e-mail dan dipublikasikan.</li>
          <li>Aplikasi wajib dikembangkan sepenuhnya selama Hackathon berlangsung. Setiap tim wajib untuk mengimplementasikan Rule of Game yang telah dipersiapkan oleh Penyelenggara. Rule of Game tersebut akan diinformasikan pada hari H acara berlangsung.</li>
          <li>Code setiap tim wajib dimasukkan pada repository Hackathon melalui Github.</li>
          <li>Selama Hackathon & Demo Day berlangsung, Peserta diwajibkan membawa semua perangkat pribadi yang dibutuhkan. Penyelenggara tidak menyediakan alat dan peralatan dalam bentuk apapun.</li>
          <li>Peserta diberi kebebasan dalam mengembangkan aplikasi dengan menggunakan platform apapun, baik infrastruktur, mobile maupun web.</li>
          <li>Peserta diperbolehkan menggunakan sumber data terbuka gratis seperti Google Maps, Facebook Connect, feed Twitter, dan lainya.</li>
          <li>Aplikasi yang dibuat harus informatif, user-friendly, tidak mengandung kekerasan, SARA, atau menyinggung kelompok, komunitas, dan tidak memiliki afiliasi dengan partai politik atau tokoh tertentu.</li>
          <li>Peserta tidak diperkenankan untuk membuat konten yang mengundang kebencian, kekerasan, pelecehan, rasisme, intoleransi seksual, agama, politik, atau konten yang eksploitatif dengan memanfaatkan atau mengorbankan pihak lain. Penyelenggara juga tidak mengizinkan konten apapun yang melanggar hukum di Indonesia.</li>
          <li>Penyelenggara tidak bertanggung jawab atas isi atau konten yang dibuat oleh Peserta.</li>
          <li>Dengan mendaftarkan diri ke Hackathon, setiap Peserta menjamin bahwa:
            <ul>
              <li>Hasil kerja dan pengembangan aplikasi yang diajukan adalah karya asli Peserta.</li>
              <li>Hasil kerja dan pengembangan aplikasi belum pernah menang maupun diikutsertakan dalam perlombaan sejenis dan/ataupun perlombaan lainnya.</li>
              <li>Hasil kerja dan pengembangan aplikasi tidak melanggar hak kekayaan intelektual atau hak lain dari pihak ketiga.</li>
            </ul>
          </li>
          <li>Peserta memperbolehkan penyelenggara untuk merekam dan mengambil gambar selama Hackathon dan Demo Day untuk keperluan publikasi dan kegiatan promosi di media manapun.</li>
          <li>Penyelenggara memiliki hak untuk mendiskualifikasi Peserta yang terlibat dalam kekerasan atau perilaku tidak sportif dan perlakuan yang tidak menyenangkan. Penyelenggara juga memiliki hak untuk mendiskualifikasi Peserta yang melanggar Syarat dan Ketentuan.</li>
          <li>Keputusan dewan juri bersifat mutlak dan tidak dapat diganggu gugat dalam segala aspek. Peserta wajib mematuhi dan terikat oleh keputusan dewan juri.</li>
          <li>Dengan mengikuti Hackathon, Peserta setuju bila ide, konsep, maupun code aplikasi yang diajukan, dipromosikan di berbagai media cetak, elektronik, maupun publikasi bentuk lain oleh penyelenggara.</li>
          <li>Kompetisi ini tidak dipungut biaya. Peserta diharapkan berhati-hati terhadap upaya penipuan dengan meminta biaya dalam bentuk apapun terkait dengan kompetisi ini.</li>
        </ol>

        </div>
    </div>
    @extends('footer')
     <!-- Vendor JS Files -->
   <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script>

   <!-- Template Main JS File -->
   <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>