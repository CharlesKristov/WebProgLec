@extends('layout.app')
@section('title', 'Capture The Flag')  
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
        <h1 class = "text-center">Capture The Flag</h1>
        <div class= "container" style ="background-color:white; color:gray">
        <h3>DESKRIPSI</h3>
        <hr>
        <p>Capture the Flag (CTF) adalah kompetisi keamanan jaringan dan informasi berskala nasional yang diselenggarakan secara online pada tahap penyisihan dan offline pada tahap final. Kompetisi Capture the Flag COMPFEST kali ini memakai konsep Jeopardy CTF untuk babak penyisihan dan final. Konsep tersebut akan menguji kemampuan dan pengetahuan peserta dalam bidang web hacking, cryptography, digital forensic, reverse engineering, dan binary exploitation.</p>
        <p>Tidak hanya itu, Capture the Flag COMPFEST juga membawakan rangkaian acara opsional, yaitu Hacker Class. Hacker Class adalah babak opsional yang dikemas untuk mengenalkan peserta kepada Capture the Flag sekaligus menjadi wadah bagi peserta untuk berlatih mengenai bidang-bidang yang akan dilombakan. Hacker Class sendiri akan diadakan secara online sebelum babak penyisihan dimulai.</p>
        
        <br>
        <h3>KETENTUAN KHUSUS</h3>
        <hr>

        <ol type = "a">
          <li>Setiap peserta mematuhi ketentuan umum kompetisi COMPFEST.</li>
          <li>Peserta membentuk tim terdiri dari minimal 1 (satu) dan paling banyak 3 (tiga) orang peserta.</li>
          <li>Peserta bukan pembuat soal pada kompetisi Capture the Flag.</li>
          <li>Peserta yang dapat mengikuti kompetisi adalah peserta yang
              sudah diverifikasi oleh panitia dan tidak dapat
              digantikan oleh orang lain selama kompetisi berlangsung.</li>
          <li>Peserta tidak dikenakan biaya pendaftaran.</li>
        </ol>

        <br>
        <h3>BABAK PENYISIHAN</h3>
        <hr>

        <ol type = "a">
          <li>Penyisihan akan dilaksanakan secara online pada link yang akan diumumkan kemudian.</li>
          <li>Format penyisihan adalah jeopardy dengan soal sebanyak 20 soal (selama 8 jam).</li>
          <li>Scoreboard akan dibekukan satu jam sebelum kontes penyisihan berakhir.</li>
          <li>Setiap tim wajib mengumpulkan write-up pada tautan yang akan
              diumumkan nanti. Write-up berisi judul soal, flag, serta langkah penyelesaian singkat dan dikumpulkan selambat-lambatnya 3 jam setelah kontes selesai (platform dan soal penyisihan tetap dibuka hingga pengumpulan write-up ditutup).</li>
          <li>Selama kompetisi berlangsung, setiap tim dilarang:
            <ul>
              <li>Bekerja sama dengan tim lain dalam bentuk apapun.</li>
              <li>Menggunakan automated scanner/tools seperti sqlmap, burp
                  scanner, dirb, dan lain-lain.</li>
              <li>Menyebabkan suatu kerugian atau gangguan dalam bentuk
                  apapun terhadap peserta lain maupun panitia.</li>
              <li>Tim yang diindikasikan melakukan pelanggaran atau kecurangan akan diberikan sanksi (diskualifikasi atau pengurangan poin).</li>
              <li>Lima belas tim terbaik yang menyelesaikan sekurang-kurangnya 1 (satu) soal dan mengumpulkan write-up yang valid berhak melanjutkan ke babak final.</li>
              <li>Penyisihan CTF COMPFEST 14 dilakukan secara online dengan format jeopardy. Penyisihan akan berlangsung selama 8 jam.</li>
            </ul>
          </li>
        </ol>

        <br>
        <h3>BABAK FINAL</h3>
        <hr>
        
        <ol type = "a">
          <li>Final akan dilaksanakan secara onsite.</li>
          <li>Tahap final menggunakan format jeopardy dengan soal sebanyak 15 soal.</li>
          <li>Babak final akan dilaksanakan selama 8 jam.</li>
          <li>Scoreboard akan dibekukan satu jam sebelum kontes final berakhir.</li>
          <li>Setiap tim wajib mengumpulkan write-up pada tautan yang akan diumumkan nanti. Write-up berisi judul soal, flag, serta langkah penyelesaian singkat dan dikumpulkan selambat-lambatnya 3 jam setelah kontes selesai (platform dan soal penyisihan tetap dibuka hingga pengumpulan write-up ditutup).</li>
          <li>Tim yang diindikasikan melakukan pelanggaran atau kecurangan akan diberikan sanksi (diskualifikasi atau pengurangan poin).</li>
        </ol>


        </div>
    </div>
   
</body>
@endsection