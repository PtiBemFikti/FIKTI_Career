@extends('layout.main')

@section('container')

<main id="main" class="main-page">
  <!-- ======= Speaker Details Sectionn ======= -->
  <section id="speakers-details">
    <div class="container">
      <div class="section-header">
        <h2>Workshop</h2>
        <p>“The Secret Recipe to Make an Outstanding Curriculum Vitae”</p>
      </div>

      <div class="row mt-3">
        <div class="col-md-4">
          <img src="assets/img/event/Artboard 3.jpg" alt="Speaker 1" class="img-fluid">
        </div>

        <div class="col-md-8 my-auto">
          <div class="details">
            <h2></h2>

            <p>Workshop ini memberikan pelatihan dan pembekalan kepada peserta mengenai pembuatan Curriculum Vitae (CV) yang diperlukan dalam melamar pekerjaan. CV adalah sebuah dokumen yang berisikan tentang riwayat diri atau riwayat hidup seperti data diri, pengalaman profesional atau kerja, prestasi akademik atau non-akademik, hobi, keterampilan, dan lain sebagainya dari seorang individu.</p> <p>Pada Workshop  akan ada sesi Live CV Review untuk peserta yang beruntung, dimana pembicara akan memilih beberapa CV yang telah dikirimkan oleh peserta saat mendaftar untuk diulas mengenai kelebihan dan kekurangan dari CV tersebut.</p>
            <p>Jadi, tunggu apa lagi. Yuk, segera daftar karena kuota terbatas lho!</</p>

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
                  <div class="icon-box ">
                    <i class="bi bi-check-circle"></i>
                    <p>Live CV Review</p>
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

                    <a href="/registration-workshop" class="btn btn-dark" style="width: auto; padding: 8px 15px;">Regist Now !</a>
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
            <i class="bi bi-calendar-event"></i> 
            {{-- <lord-icon src="https://cdn.lordicon.com/kbtmbyzy.json" trigger="loop" colors="primary:#f6f5f6,secondary:#fd5286" style="width:65px;height:65px">
            </lord-icon> --}}
            <h4 class="card-title mt-2">Waktu dan Tanggal</h4>
            <p>08.30 - 11.40 WIB & 15 Mei 2023</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <i class="bi bi-broadcast"></i> 
            {{-- <lord-icon src="https://cdn.lordicon.com/tclnsjgx.json" trigger="loop" colors="primary:#f6f5f6,secondary:#fd5286" style="width:65px;height:65px">
            </lord-icon> --}}
            <h4 class="card-title mt-2">Tempat</h4>
            <p>Zoom Clouds Meetings</p>
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
        <div class="container">
          <img src="/assets/img/speakers/Emeralda Aryuni SIP, BIS, M.S.M.png" width="500" class="img-fluid">

          <p class="text-title">Emeralda Aryuni SIP, BIS, M.S.M</p>
          <p class="text-body">Recruitment Partner Evermos</p>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="section-header">
        <h2>Master Of Ceremony</h2>
      </div>

      <div class="row text-center mt-1">
        <div class="container">
          <img src="/assets/img/speakers/MC Vira Rahma.png" width="400" class="img-fluid">
          <p class="text-title">Vira Rahma</p>
          <p class="text-body">Mahasiswa Universitas Gunadarma</p>
        </div>
      </div>
    </div>

  </section>

</main><!-- End #main -->
@endSection