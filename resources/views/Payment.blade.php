<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Payment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
</head>

<body>

  <!-- ======= Header ======= -->
 @extends('usernavbar')
 <section id="payment" class="bg-warning">
    <div class="container">
        <div class="section-header">
          <h2>Payment Method Instruction</h2>
          {{-- <p>Here is our competition timeline</p> --}}
        </div>
      <div class="list-group">
        <div class="steps">
            <p>1. Periode Registrasi</p>
            <button type="button" id="dropDetail1" class="btn dropdown-toggle" data-bs-toggle="dropdown"></button>
        </div>
        <div class="details" id="detail1">
            <li> Early Bird (8 February - 1 Maret 2023): Rp. 50.000 </li>
            <li> Regular (2 Maret - 16 Maret 2023): Rp. 80.000 </li>
        </div>

        <div class="steps">
            <p>2. Pembayaran Biaya Pendaftaran</p>
            <button type="button" id="dropDetail2" class="btn dropdown-toggle" data-bs-toggle="dropdown" onclick="toggleDetail2()"></button>
        </div>
        <div class="details" id="detail2">
            <p>Lakukan pembayaran pendaftaran lomba Technostalgia per tim ke nomor rekening 5273149429 bank BCA atas nama</p>
        </div>

        <div class="steps">
            <p>3. Upload Bukti Pembarayan</p>
            <button type="button" id="dropDetail3" class="btn dropdown-toggle" data-bs-toggle="dropdown" onclick="toggleDetail3()" ></button>
        </div>
        <div class="details" id="detail3">
            <p> Perwakilan tim mengisi data tim dan menggugah file dengan batas maksimum 10 Mb dalam format .JPG, .JPEG, .PNG, atau .PDF yang berisi kartu tanda mahasiswa (KTM) setiap anggota dan bukti pembayaran </p>
        </div>

        <div class="steps">
            <p>4. Verifikasi Pembayaran</p>
            <button type="button" id="dropDetail4" class="btn dropdown-toggle" data-bs-toggle="dropdown" onclick="toggleDetail4()" ></button>
        </div>
        <div class="details" id="detail4">
            <p>Data tim dan bukti pembayaran akan diverifikasi dalam waktu 72 jam setelah tim mengunggah file. Apabila tim belum mendapat notifikasi verifikasi lebih dari 72 jam, tim dapat menghubungi contact person. Tim yang telah mendapat email verifikasi dinyatakan resmi sebagai calon peserta dari lomba Technostalgia </p>
        </div>
        <div class="file-upload">
            <input class="form-control" type="file" id="formFile">
            <button>Submit</button>
        </div>
    </div>

 </section>

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script>
    $(document).ready(function(){
        $('#dropDetail1').click(function() {
            $('#detail1').toggle("slide");
        });
    });
    $(document).ready(function(){
        $('#dropDetail2').click(function() {
            $('#detail2').toggle("slide");
        });
    });
    $(document).ready(function(){
        $('#dropDetail3').click(function() {
            $('#detail3').toggle("slide");
        });
    });
    $(document).ready(function(){
        $('#dropDetail4').click(function() {
            $('#detail4').toggle("slide");
        });
    });
  </script>
</body>

</html>
