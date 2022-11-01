@extends('uts.master')
@section('master')
<div class="container-fluid">
    <div class="container">
        <h1 class="text-center mb-5 mt-5">Daftar Harga Barang</h1>
        <div class="row justify-content-between">
            @foreach($barang as $brg => $barang)
            <div class="card mb-5" style="width: 18rem;">
                <img src="assets/{{$barang->fotoBarang}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>{{$barang->namaBarang}}</h4>
                    <h5>Rp {{$barang->harga}}</h5>
                    <a href="{{route('reviewBarang.view', $barang->id)}}" class="btn btn-success"> Detail Barang</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection