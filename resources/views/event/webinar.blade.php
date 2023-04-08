@extends('layout.main')

@section('container')

<main id="main" class="main-page">


  <!-- ======= Speaker Details Sectionn ======= -->
  <section id="speakers-details">
    <div class="container">
      <div class="section-header">
        <h2>Webinar</h2>
        <p>“Upgrade Your Personal Branding for Your Future Career”</p>
      </div>

      <div class="row mt-3">
        <div class="col-md-4">
          <img src="assets/img/event/Artboard 2.jpg" alt="Speaker 1" class="img-fluid">
        </div>

        <div class="col-md-8 my-auto">
          <div class="details">
            <h2></h2>

            <p>Webinar FIKTI Career (FICAR) akan mengangkat topik mengenai personal branding. Personal branding adalah proses membangun persona publik diri untuk target audiens. Dalam prosesnya, personal branding memiliki peran yang sangat penting dalam menggapai karir di masa depan. Dengan memiliki personal branding yang efektif dapat membuat seseorang menjadi ahli dalam bidang tertentu, membangun reputasi yang kuat dalam industri tertentu, serta dapat meningkatkan reputasi dan nama baik di pasaran.

            </p>

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

                    <a href="/registration-webinar" class="btn btn-dark" style="width: auto; padding: 8px 15px;">Regist Now !</a>
                    <!-- <a class="btn btn-dark" style="width: auto; padding: 8px 15px;pointer-events: none;cursor: default;">Pendaftaran Sudah Ditutup</a> -->

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
            <i class="bi bi-calendar-event"></i> 
            {{-- <lord-icon src="https://cdn.lordicon.com/kbtmbyzy.json" trigger="loop" colors="primary:#f6f5f6,secondary:#fd5286" style="width:65px;height:65px">
            </lord-icon> --}}
            <h4 class="card-title mt-2">Waktu dan Tanggal</h4>
            <p>08.30 - 12.00 WIB & 14 Juni 2023</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <i class="bi bi-broadcast"></i> 
            {{-- <lord-icon src="https://cdn.lordicon.com/tclnsjgx.json" trigger="loop" colors="primary:#f6f5f6,secondary:#fd5286" style="width:65px;height:65px">
            </lord-icon> --}}
            <h4 class="card-title mt-2">Tempat</h4>
            <p>Zoom Clouds Meetings & Live Streaming Youtube</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <!-- <i class="bi bi-ticket-detailed"></i> -->
            <img src="/assets/img/icon/759-ticket-coupon-outline.svg" width="65">
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
        <div class="col-md-4 col-lg-4 col-12">
          <img src="/assets/img/speakers/Guntur.png" width="500" class="img-fluid">

          <p class="text-title">Guntur Eka Saputra, ST., MMSI</p>
          <p class="text-body">Dosen Universitas Gunadarma</p>
        </div>
        <div class="col-md-4 col-lg-4 col-12">
          <img src="/assets/img/speakers/Artboard 6.png" width="500" class="img-fluid">

          <p class="text-title">Sasti Hapsari Nurdiana Sosromidjojo, S.Sos</p>
          <p class="text-body">ICF - Certified Public Speaking Coach</p>
        </div>
        <div class="col-md-4 col-lg-4 col-12 ">
          <img src="/assets/img/speakers/vina baru.png" width="500" class="img-fluid">

          <p class="text-title">Vina A. Muliana Omar, SP., M.IKom</p>
          <p class="text-body">BUMN Career Profesional dan Content Creator</p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="section-header">
        <h2>MC & Moderator</h2>
      </div>

      <div class="row text-center mt-1">
        <div class="col-md-6">
          <img src="/assets/img/speakers/MC Zitta Syabillah.png" width="400" class="img-fluid">

          <p class="text-title">Zitta Syabillah</p>
          <p class="text-body">Mahasiswa Universitas Gunadarma</p>
        </div>
        <div class="col-md-6">
          <img src="/assets/img/speakers/Moderator_SHofar Ali Aziz.png" width="360" class="img-fluid">

          <p class="text-title">Shofar Ali Aziz</p>
          <p class="text-body">Mahasiswa Universitas Gunadarma</p>
        </div>
      </div>
    </div>

  </section>

</main><!-- End #main -->

@endSection