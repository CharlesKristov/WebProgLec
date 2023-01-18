@extends('layout.app')
@section('title', 'Upload Payment')

@section('main-content')

  <!-- ======= Header ======= -->
 <section id="payment">
    <div class="container h-100 p-5">
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
            <p>Lakukan pembayaran pendaftaran lomba Technostalgia per tim ke nomor rekening 5271846763 bank BCA atas nama Albertus Ryan Dharmala</p>
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
        <form method="POST" class="file-upload" action="{{route('payment.uploadreceipt')}}" enctype="multipart/form-data">
            @csrf
            <input name="receipt" type="file" id="form3Example1" class="form-control @error('receipt')
                    is-invalid
                    @enderror" required value="{{ old('receipt') }}">
                    @error('receipt')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            <button>Submit</button>
        </form>
    </div>

 </section>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->

@endsection
