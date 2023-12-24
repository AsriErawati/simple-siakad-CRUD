@extends('layouts.main')

@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Data Mahasiswa</h2>      
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nrp</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Opsi</th>
      </tr>
    </thead>
      @foreach($Tbl_mahasiswa as $row)

        <tr>
          <td>{{ $row->nrp }}</td>
          <td>{{ $row->nama }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->alamat }}</td>
          <td>
        <a href="/data/edit/{{ $row->nrp }}" class="btn btn-primary">Edit</a>
        |
        <a href="/data/hapus/{{ $row->nrp }}" class="btn btn-danger">Hapus</a>
      </td>
        </tr>
      @endforeach

  </table>
</div>
</body>
</html>
  
@endsection

