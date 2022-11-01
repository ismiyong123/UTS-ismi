@extends('tugas2.master')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">FORM</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <form>
        <x-table isi1="Name" isi2="Position" />
        <x-table isi1="Office" isi2="Age" />
        <x-table isi1="Start date" isi2="Salary" />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection