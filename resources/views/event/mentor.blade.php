@extends('layout.main')

@section('container')


<main id="main" class="main-page">


  <!-- ======= Speaker Details Sectionn ======= -->
  <section id="speakers-details">
    <div class="container">
      <div class="section-header">
        <h2>Mentoring 1 on 1</h2>
        <p>“Prepare Your Career and Achieve Your Dream Job”</p>
      </div>
      <div class="row mt-3">
        <div class="col-md-4">
          <img src="assets/img/event/Artboard 4.jpg" alt="Speaker 1" class="img-fluid">
        </div>
        <div class="col-md-8 my-auto">
          <div class="details">
            <h2></h2>

            <p>Mentoring 1 on 1 ini akan mengangkat topik yang berkaitan dengan hal-hal pekerjaan khususnya bagian lowongan pekerjaan dan melamar pekerjaan. Job fair hadir dengan maksud untuk menjelaskan dan menggali informasi lebih dalam lagi terkait aplikasi lowongan pekerjaan, lowongan-lowongan pekerjaan yang tersedia di perusahaan terkait, dan proses wawancara dalam melamar pekerjaan kepada para peserta sehingga mereka bisa mengetahui lowongan pekerjaan yang tersedia dan juga dapat mengimplementasikan materi yang dibahas seputar hal tersebut di kehidupannya masing-masing.</p>
            <!-- <p>CP : 082298944933 (Aldi Taher) </p> -->

            <div class="speakers mt-3">

              <div class="row" id="benefits">
                <div class="col-md-5">
                  <h3>Benefits</h3>
                  <div class="icon-box ">
                    <i class="bi bi-check-circle"></i>
                    <p>E-Certificate</p>
                    <!-- <br> -->
                  </div>
                  <div class="icon-box ">
                    <i class="bi bi-check-circle"></i>
                    <p>Important Knowledge</p>
                    <!-- <br> -->
                  </div>
                  <div class="icon-box ">
                    <i class="bi bi-check-circle"></i>
                    <p>Doorprize</p>
                  </div>
                  <div class="icon-box ">
                    <i class="bi bi-check-circle"></i>
                    <p>Free online course by Dicoding</p>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="regist">

                    <h3>Register Form</h3>
                    <p>
                      Contact Person:<br>
                    <p></p>
                    <i class="bi bi-whatsapp" style="font-size: 18px;"></i>&nbsp; 0812 9408 4692 (M Yoga via WhatsApp)<br>
                    <i class="bi bi-line" style="font-size: 18px;"></i>&nbsp; muhammadyoga47 (M Yoga via LINE)</p><br>

                    <a href="/registration-mentoring" class="btn btn-dark" style="width: auto; padding: 8px 15px;">Regist Now !</a>
                    {{-- <a class="btn btn-dark" style="width: auto; padding: 8px 15px;pointer-events: none;cursor: default;">Pendaftaran Sudah Ditutup</a> --}}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </section>

  <section id="benefit">
    <div class="container">
      <!-- <div class="section-header">
          <h2>Benefits</h2>
        </div> -->
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <!-- <i class="bi bi-calendar-event"></i> -->
            <lord-icon src="https://cdn.lordicon.com/kbtmbyzy.json" trigger="loop" colors="primary:#f6f5f6,secondary:#fd5286" style="width:65px;height:65px">
            </lord-icon>
            <h4 class="card-title mt-2">Waktu dan Tanggal</h4>
            <p>13.00 - 16.40 WIB & 15 Mei 2023</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <!-- <i class="bi bi-broadcast"></i> -->
            <lord-icon src="https://cdn.lordicon.com/tclnsjgx.json" trigger="loop" colors="primary:#f6f5f6,secondary:#fd5286" style="width:65px;height:65px">
            </lord-icon>
            <h4 class="card-title mt-2">Tempat</h4>
            <p>Zoom Clouds Meetings & Live Streaming Youtube</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <!-- <i class="bi bi-ticket-detailed"></i> -->
            <img src="../../assets/img/icon/759-ticket-coupon-outline.svg" width="65">
            <h4 class="card-title mt-2">Harga Tiket</h4>
            <p>Free</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section id="benefits" class="mt-5"> -->
  <section id="speakers" class="mt-5">
    <div class="container">
      <div class="section-header">
        <h2>Speakers</h2>
      </div>

      <div class="row text-center mt-1">

        <!-- speaker 1 -->
        <div class="col-md-4 col-lg-4 col-12">
         <img src="/assets/img/speakers/Artboard 32 copy 3 (1) copy.png" width="500" class="img-fluid">

          <p class="text-title">Muhammad Yoga R, M.M.</p>
          <p class="text-body">Biro Pengembangan Teknologi Informasi</p>
        </div>

        <!-- speaker 2 -->
        <div class="col-md-4 col-lg-4 col-12">
          <img src="/assets/img/speakers/Faiza Umul Hussaini.png" width="500" class="img-fluid">

          <p class="text-title">Muhammad Yoga R, S.Psi.,</p>
          <p class="text-body">Biro Pengembangan Teknologi Informasi</p>
        </div>

        <!-- speaker 3 -->
        <div class="col-md-4 col-lg-4 col-12">
          <img src="/assets/img/speakers/Artboard 20a.png" width="500" class="img-fluid">

          <p class=" text-title">Muhammad Yoga R ST.,</p>
          <p class="text-body">Biro Pengembangan Teknologi Informasi</p>
        </div>
      </div>

      <div class="container">
        <div class="section-header">
          <h2>MC & Moderator</h2>
        </div>

        <div class="row text-center mt-1">
          <div class="col-md-6">
            <img src="/assets/img/speakers/Hans Evan Tatipata.png" width="400" class="img-fluid">

            <p class="text-title">Muhammad Yoga R</p>
            <p class="text-body">Mahasiswa Universitas Gunadarma</p>
          </div>
          <div class="col-md-6">
            <img src="/assets/img/speakers/Artboard 7 copy.png" width="400" class="img-fluid">

            <p class="text-title">Muhammad Yoga R</p>
            <p class="text-body">Mahasiswa Universitas Gunadarma</p>
          </div>
        </div>
      </div>

  </section>

</main><!-- End #main -->

@endSection