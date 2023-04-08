<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh"><!-- content 2 (DETIK) -->
    <title>Registered Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: "nulshock";
            src: url('nulshock\ bd.ttf') format('truetype');
        }


        /* * {
            background: #000 !important;
            color: #0f0 !important;
            outline: solid #f00 1px !important;
        } */

        @media screen {}

        body {
            margin: 0px;
            padding: 0px;
            text-align: center;
            font-family: "nulshock", sans-serif;
            background: url(/assets/img/new-bg2.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-color: black;
        }

        h1 {
            font-size: 50px;
            display: block;
            position: absolute;
            top: 25%;
            width: 100%;
            text-align: center;
            font-size: 18px;
        }

        p {
            font-size: 30px;
            display: block;
            top: 70%;
            width: 100%;
            text-align: center;
            font-size: 18px;
            color: #31548a;
        }

        a {
            color: #31548a;
            text-align: center;
        }

        .barcode {
            padding-top: 300px;
        }


        @media (max-width: 850px) {
            .barcode {
                width: 200px;
                margin-left: auto;
                margin-right: auto;
                display: block;
                height: auto;
                margin-top: 200px;

            }
        }

        .desc {
            font-size: xx-large;
            color: #31548a;
            position: absolute;
            top: 14%;
            width: 100%;
            text-align: center;
        }

        .tombol {
            padding-top: 150px;
        }

        .info {
            color: #31548a;
            top: 28%;
        }

        .responsive {
            width: 15%;
            margin-top: 8%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: auto;
        }

        .alert {
            width: 1000px;
            height: 70px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }

    </style>
</head>


<body>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h5><strong>Data berhasil ditambahkan</strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <h2 style="margin-top: 25px;">Registrasi Sukses</h2><br>

    <p>Terima kasih telah mendaftar di acara <b>FIKTI Career 2022</b> "Knowing Yourself to Start a Brilliant Career".</p>

    <p>Silahkan bergabung di grup whatsapp untuk info lebih lanjut.</p>

    <img src="/assets/img/barcode_ws.jpg" alt="Nature" class="responsive" width="300" height="300">

    <p><b><a style="color: green;" href="https://chat.whatsapp.com/Jensb4g5Ya61LruxItJiII">Klik link ini untuk join grup</a></b></p>

    <div class="tombol">
        <a href="/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Kembali ke home</a>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>