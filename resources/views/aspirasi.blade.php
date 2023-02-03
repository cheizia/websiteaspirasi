@extends('layouts.main')

@section('container')
<div class="container">
  
  <h1 class="text-dark mt-2" style="color: red">Aspirasi Masyarakat</h1>
  
  <table class="table table-bordered mt-4">
    <thead class="table-warning">
        <tr>
            <th>Id Pelaporan</th>
            <th>NIK</th>
            <th>Id Kategori</th>
            <th>Lokasi</th>
            <th>Keterangan</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody>
      @foreach($aspirasis as $aspirasi)
        <tr>
          <td>{{ $aspirasi->id_pelaporan }}</td>
          <td>{{ $aspirasi->nik }}</td>
          <td>{{ $aspirasi->id_kategori }}</td>
          <td>{{ $aspirasi->lokasi }}</td>
          <td>{{ $aspirasi->ket }}</td>
          <td>{{ $aspirasi->status }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection