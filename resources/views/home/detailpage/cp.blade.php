@extends('layout.app')

@section('title', 'Competitive Programming')  
@section('main-content')
    <section id="hero" style="height: 50vh">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">Technostalgia</h1>
          <p class="mb-4 pb-0">Brings You Back The Nostalgic of Challenging Competition</p>
          @if(!Auth::check())
            <a href="{{Route('registerPage')}}" class="about-btn scrollto w-25">REGISTER</a>
            <a href="#downloadGuidebook" class="guide-btn scrollto w-25">Download Guidebook</a>
          @endif
        </div>
    </section><!-- End Hero Section -->
    <br><br><br><br>
    <div class="container">
        <h1 class = "text-center">Competitive Programming</h1>
            <div class= "container" style ="background-color:white; color:gray">
                <h3>DESKRIPSI</h3>
                <hr>
                <p>Lomba pemrograman menguji kemampuan dan nalar 
                    peserta dalam menyelesaikan program komputer untuk 
                    memecahkan permasalahan yang diberikan. Kriteria penilaian 
                    mencakup kecepatan penulisan program dan ketepatan/efisiensi 
                    dari program yang dibuat untuk setiap kasus permasalahan terkait.</p>
                <p>
                Saat pertandingan, peserta akan diberikan deskripsi-deskripsi sejumlah permasalahan dan dalam kurun waktu 3-5 jam peserta harus menyusun dan mengumpulkan sebanyak mungkin program yang dapat menjawab masing-masing permasalahan tersebut.
                </p>
                <p>
                Setiap program yang dibuat selain dapat menjawab dengan tepat kasus permasalahan yang diberikan, juga harus dapat dijalankan pada setiap kasus dalam waktu yang amat terbatas. Sehingga, selain peserta diadu dalam kecepatan penulisan program, peserta juga dituntut menemukan/menggunakan algoritma (dan struktur data) yang tepat dan efisien. Bahasa pemrograman yang digunakan antara lain: C, C++, dan Java.
                </p>


                <br>
                <h3>BABAK PENYISIHAN</h3>
                <hr>

                <ol type = "a">
                    <li>Bentuk babak penyisihan adalah online test pada laman yang akan diumumkan kemudian.</li>
                    <li>Setiap peserta akan diberikan serangkaian soal yang harus diselesaikan dalam bentuk sebuah program.</li>
                    <li>Lomba akan berlangsung selama 3 jam dan terdiri dari 5-12 soal pemrograman.</li>
                    <li>Peserta akan diberi kesempatan sebelum babak penyisihan, yaitu tanggal <b>5 Mei 2023</b> untuk melakukan pemanasan dengan tujuan membiasakan diri dengan sistem online. Pada tahap ini, peserta akan diberikan beberapa soal untuk diselesaikan dan dikirim (unggah). Penilaian pada tahap pemanasan tidak mempengaruhi penentuan hasil penyisihan maupun pemenang lomba.</li>
                    <li>Pada saat online test, peserta diharapkan telah terhubung ke Internet untuk mengikuti babak penyisihan. Kegagalan koneksi Internet menjadi tanggung jawab peserta sendiri.</li>
                    <li>Peraturan dan prosedur lengkap mengenai babak penyisihan akan diatur dan diberitahukan panitia langsung ke email masing-masing ketua tim.</li>
                    <li>Babak penyisihan akan dilaksanakan pada tanggal <b>5 Mei 2023</b></li>
                    <li>Tim yang masuk final berjumlah 20 tim dengan rincian:
                        <ul>
                            <li>10 tim terbaik dari 10 perguruan tinggi teratas</li>
                            <li>10 tim berdasarkan urutan peringkat scoreboard</li>
                        </ul>
                    </li>
                    <li>Jika ditemukan indikasi kecurangan/plagiarisme, maka tim bersangkutan akan didiskualifikasi dari perlombaan</li>
                    <li>Dilarang melakukan penyerangan kepada sistem dalam bentuk apapun.</li>
                    <li>Setiap submission yang tidak Accepted (AC) mendapatkan penalti 20 menit per submission. Total penalti dihitung ketika submission dinyatakan Accepted (AC).</li>
                    <li>Bahasa pemrograman yang diterima sistem adalah C, C++, Java.</li>
                    <li>Klarifikasi dilakukan mulai pukul 09.00 WIB sampai dengan 10.00 WIB. Klarifikasi di luar waktu tersebut akan diabaikan.</li>
                    <li>Jawaban klarifikasi adalah sebagai berikut:
                        <ul>
                            <li>Ya/Tidak</li>
                            <li>Baca soal lebih teliti</li>
                            <li>Tidak ada komentar</li>
                            <li>Jawaban sesuai konteks pertanyaan (jika diperlukan oleh juri)</li>
                        </ul>
                    </li>
                </ol>
                
                <br>
                <h3>BABAK FINAL</h3>
                <hr>
                <p>Tim yang lolos ke babak final akan diumumkan pada tanggal 13 Oktoer 2023. Babak final dilaksanakan pada tanggal 15-22 Oktober 2023. Pemanasan babak final dilaksanakan pada saat technical meeting peserta pada tanggal 15 Oktober 2023 mulai pukul 09.00 WIB. Ketentuan Babak final adalah sebagai berikut:</p>
                <ol type = "a">
                    <li>Bentuk lomba final adalah live coding online.</li>
                    <li>Lomba akan berlangsung maksimal 5 jam terdiri dari 8 – 18 soal pemrograman.</li>
                    <li>Peraturan dan prosedur detail final akan diatur dan diberitahukan panitia melalui website GEMASTIK XV.</li>
                </ol>

                <br>
                <h3>KRITERIA PENILAIAN</h3>
                <hr>
                <ol type = "a">
                    <li>Program dapat menghasilkan jawaban yang benar dalam batas waktu eksekusi dan memori yang telah ditentukan.</li>
                    <li>Jumlah soal yang berhasil diselesaikan.</li>
                    <li>Waktu submission untuk soal yang berhasil diselesaikan.</li>
                    <li>Tidak melakukan plagiarisme.</li>
                </ol>

            </div>  
        </div>
@endsection
