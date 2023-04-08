<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration {{ $title }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/LOGO.png" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <!-- <script src="https://kit.fontawesome.com/45640e32ea.js" crossorigin="anonymous"></script> -->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
        <style>
            #judul {
                margin-left: 135px; 
                margin-bottom: 10px ; 
                border:3px; 
                color:#d5bd1e; "
            }
        </style>
    </head>
<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100" style="background: #31548a;">
              
                    <form action="/dashboard/{{ $active }}" method="post" class="login100-form validate-form "  name="fikti-career" >
                    
                        @csrf
                        <img src="images/LOGO.png" style="width: 170px;display: block;margin-left: auto; margin-right: auto; margin-top:1px">
                        </span>
                        <h4 id="judul">{{ $title }}</h4>
                      
                        <!-- nama -->
                        <div class="wrap-input100 validate-input" data-validate="Masukkan nama">
                            <label for="nama" style="color:aliceblue">Nama Lengkap</label>
                            <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" placeholder="Masukan Nama" value="{{ old('nama') }}" autofocus required >
    
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
    
                        <!-- pekerjaan -->
                        <div class="wrap-input100 validate-input" data-validate="Masukkan Pekerjaan">
                            <label for="pekerjaan" style="color:aliceblue">Pekerjaan</label>
                            <input class="form-control @error('pekerjaan') is-invalid @enderror" type="text" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" value="{{ old('pekerjaan') }}" required>
                            {{-- <span class="focus-input100" data-placeholder="&#xf128;"></span> --}}
                            @error('pekerjaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
    
                        <!-- asal kota -->
                        <div class="wrap-input100 validate-input" data-validate="Masukkan Asal Kota">
                            <label for="kota" style="color:aliceblue">Pekerjaan</label>
                            <input class="form-control @error('kota') is-invalid @enderror" type="text" name="kota" id="kota" placeholder="Asal Kota" value="{{ old('kota') }}" required>
                            {{-- <span class="focus-input100" data-placeholder="&#xf1ab;"></span> --}}
                            @error('kota')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
    
                        <!-- email -->
                        <div class="wrap-input100 validate-input" data-validate="Masukkan Email">
                            <label for="email" style="color:aliceblue">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                            {{-- <span class="focus-input100" data-placeholder="&#xf15a;"></span> --}}
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
    
                        <!-- notelp -->
                        <div class="wrap-input100 validate-input" data-validate="Masukkan Nomor Telepon">
                            <label for="phone" style="color:aliceblue">NoTelp (08381221234)</label>
                            <input class="form-control @error('phone') is-invalid @enderror" type="number" name="phone" id="phone" placeholder="Nomor Telepon" value="{{ old('phone') }}" required>
                            {{-- <span class="focus-input100" data-placeholder="&#xf2b4;"></span> --}}
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
    
                        <!-- alasan -->
                        <div class="wrap-input100 validate-input" data-validate="Masukkan Alasan Mengikuti">
                            <label for="alasan" style="color:aliceblue">Alasan</label>
                            <input class="form-control @error('pekerjaan') is-invalid @enderror" type="text" name="alasan" id="alasan" placeholder="Alasan Mengikuti" value="{{ old('alasan') }}" required>
                            {{-- <span class="focus-input100" data-placeholder="&#xf25d;"></span> --}}
                            @error('alasan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4" style="display: flex">
                            <input type="checkbox" required>
                            <h6 class="ml-2 text-white" id="kategori" name="kategori">Apakah anda yakin mengikuti {{ $title }}</h6>
                            
                        </div>
                     
    
                        <!-- register -->
                        <div class="container-login100-form-btn">
                            <a href="/{{ $active }}" class="login100-form-btn"  style="background: #ffcd41; color:#31548a;">Kembali</a>
                            <button type="submit" name="submit" class="login100-form-btn" style="  background: #ffcd41; color:#31548a;">
                               Register
                            </button>
                        </div>
                    
                  
                    </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="/assets/main.js"></script>
    <script src="/js/connect-form.js"></script>
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</body>

</html>