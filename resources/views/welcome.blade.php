<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAWUNGDRI</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-dark" style="background-image: url('images/lawungdri.jpg');"">
    <div id=" hero">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="">
                <img src="/images/dunia.png" alt="">
                <h1 class="display-4 text-white text-center">LAWUNGDRI LAUNDRY</h1>
                <p class="mb-5 text-white">BERSIH SEPERTI BARU</p>
                <a href="/home" type="button" class="btn btn-primary">CLICK UNTUK LANJUTKAN</a>
            </div>
        </div>
    </div>
    </div>
    <div id="layanan">
        <div class="container bg-transparent">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-white">LAYANAN</h1>
                </div>
                @foreach ($layanan as $item)
                    <div class="col-lg-3 col-6">
                        <div class="card shadow my-4">
                            <div class="card-body">
                                <h2 class="mb-4">{{ $item->nama }}</h2>
                                <p>Durasi : {{ $item->durasi }} jam</p>
                                <p>Harga : Rp. {{ number_format($item->harga) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="footer" class="bg-dark">
        <p class="text-center text-white">L A W U N G D R I </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
