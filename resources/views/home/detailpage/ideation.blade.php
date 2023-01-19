@extends('layout.app')
@section('title', 'Hackathon')  
@section('main-content')
<body>
    <section id="hero" style="height: 50vh">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
          <h1 class="mb-4 pb-0">Technostalgia</h1>
          <p class="mb-4 pb-0">Brings You Back The Nostalgic of Challenging Competition</p>
          @if(!Auth::check())
            <a href="{{Route('registerPage')}}" class="about-btn scrollto">REGISTER</a>\
         @endif
        </div>
      </section><!-- End Hero Section -->
    <br><br><br><br>
    <div class="container">
        <h1 class = "text-center">Game Ideation</h1>
        <div class= "container" style ="background-color:white; color:gray">

        <h3>DESKRIPSI</h3>
        <hr>
        <p>Game Ideation adalah kompetisi di bidang game development yang diselenggarakan oleh mahasiswa Fakultas Ilmu Komputer Universitas Indonesia. Indie Game Ignite ditujukan kepada seluruh game developer di Indonesia, dari tingkat pelajar hingga profesional. Indie Game Ignite tidak membatasi tema dan game engine sehingga para peserta dapat membuat game dengan sekreatif mungkin. Indie Game Ignite adalah kompetisi yang memberikan kesempatan bagi game developer untuk mengembangkan diri dan menghasilkan karya terbaik mereka melalui game. Kompetisi ini mencari game indie terbaik untuk kemudian diperkenalkan kepada masyarakat. Tahun ini, Indie Game Ignite kembali mengadakan mentoring dan juga seminar yang diselenggarakan bersamaan dengan tahap final dan membawakan topik-topik seputar game development dan dunia game indie yang bertujuan untuk memperluas wawasan para peserta dan juga masyarakat umum.</p>

        <br>
        <h3>EXECUTIVE SUMMARY AND VIDEO TRAILER</h3>
        <hr>
        <ol type = "1">
            <li>Executive Summary bisa berisikan apapun yang dikiranya bisa menjelaskan detail-detail yang akan ada didalam game, misalnya seperti karakter, latar, plot cerita, desain, gameplay, dan lain lain semacamnya. Setiap peserta juga harus menulis budget dan waktu development dari game yang ingin dilombakan.</li>
            <li>Batas pengumpulan Executive Summary (ES) adalah 24 Mei 2023 pukul 23.59 WIB. Apabila ada tim yang mengumpulkan Executive Summary melebihi waktu tersebut, maka tim yang bersangkutan dianggap mengundurkan diri.</li>
            <li>Executive summary dikumpulkan dengan cara mengunggah tautan (link) yang menuju ke file ES tersebut (disarankan di-upload ke google drive). Tautan (link) ES diletakkan pada slot pengumpulan yang tersedia di dashboard masing-masing tim pada website.</li>
        </ol>

        <br>
        <h3>BABAK FINAL</h3>
        <hr>
        <ol type = "a">
            <li>Final Stage akan berlangsung pada tanggal 24-25 Juni 2023.</li>
            <li>Final Stage terdiri dari 3 (tiga) rangkaian acara, yaitu <b>mentoring, seminar dan presentasi final</b>.</li>
            <li> Mentoring diadakan bagi para finalis untuk bertukar wawasan dengan para mento.r</li>
            <li>Seminar diadakan bagi para finalis dan masyarakat umum untuk.</li>
            <li>Tim yang lolos ke Final Stage tetapi tidak menghadiri Final Stage.</li>
            <li>Jumlah minimal anggota tim yang menghadiri Final Stage adalah 1(satu) orang.</li>
            <li>Pada acara Presentasi Final, para finalis akan mempresentasikan dan melakukan demonstrasi game mereka di hadapan para juri selama maksimal 15 (lima belas) menit.</li>
            <li>Final Stage tahun ini akan diadakan secara offline. Ketentuan lainnya akan diumumkan lebih lanjut melalui email kepada para finalis.</li>
        </ol>



        </div>
    </div>

</body>
@endsection