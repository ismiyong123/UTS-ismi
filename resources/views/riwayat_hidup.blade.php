<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center align-items-center">
                    <center>
                        <h1>Daftar Riwayat Hidup</h1>
                        <img src="{{ $img }}" class="rounded" style="height: 220px;width: 170px;" alt=" kosong ">
                    </center>

                    <h2>Biodata</h2>
                    <x-tabel header="nama" badan="{{$nama}}" />
                    <x-tabel header="alamat" badan="{{$alamat}}" />
                    <x-tabel header="Tempat Tanggal Lahir" badan="{{$TTL}}" />
                    <x-tabel header="No HP" badan="{{$no}}" />
                    <x-tabel header="Jenis Kelamin" badan="{{$jenis}}" />
                    <x-tabel header="Agama" badan="{{$agama}}" />
                    
                </div>
                <div class="row">
                    <div class="col">
                        <h2>Riwayat Pendidikan</h2>
                        @foreach ($riwayat_pendidikan as $data)
                        <li>{{ $data}}</li>
                        @endforeach
                    </div>
                    <div class="col">
                        <h2>Pengalaman Berorganisasi</h2>
                        @foreach ($pengalaman_berorganisasi as $data)
                        <li>{{ $data}}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>