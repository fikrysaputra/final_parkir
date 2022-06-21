<!DOCTYPE html>

<head>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
    .bd-placeholder-img {
    font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            </style>
</head>

<body>
@extends('layouts.navigator')
@section('content')
<main
        <div id="home">        
        <main>
        <div class="container">
            <header class="pb-3 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Tel_U Parking</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill=#FF0000 ></path></svg>
                <span class="fs-4">Tel-U Parking</span>
            </a>
            </header>
            <marquee>Selamat Datang {{ Auth::user()->name }} !</marquee>
        <div style="background-image: url('https://asset.kompas.com/crops/LFi1xGB3HIIaIAltqu-kRN0IHcI=/196x0:1036x560/750x500/data/photo/2020/09/07/5f55ae3c33eab.jpg');" class="p-5 mb-4">
            <div class="container-fluid">
                <h1 class="fw-bold">Tel-U Parking</h1>
                <p class="col-md-8 fs-4">Simpan Tempat Parkirmu agar tidak lupa !</p>
            </div>
            </div>

            <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div style="background-image: url('https://akcdn.detik.net.id/visual/2021/04/27/telkom-1_169.png?w=650');" class="h-100 p-5 text-dark bg-dark rounded-3">
                <h2>Indikator Parkir</h2>
                <p style="color:white;">Yu lihat apakah tempat parkirnya penuh atau engga ya</p>
                <a class="btn btn-light" type="button" href="/indikator">Parkir</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-danger text-white border rounded-3"><img src="images/screenshotsatu.png" alt="IMG" style="width:500px;height:155px;">
                <h2>Maps</h2>
                <p>Takut nyasar ? Takut Lupa ? Gak tahu tempat parkir di mana aja ? pakek nih map</p>
                <a class="btn btn-primary text-light" type="button" href="\katakanpeta">Maps</a>
                </div>
            </div>
            </div>
        </div>
    </main>
@endsection
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
	    var botmanWidget = {
	        aboutText: 'Tel-U Parking',
	        introMessage: "Halo {{ Auth::user()->name }} ! aku Botman yang akan menemani kamu chatan seputar Telkom University :) Mau nanya apa nich ?"
	    };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

    </html>