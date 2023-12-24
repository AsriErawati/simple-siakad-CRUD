@extends('layouts.main')

@section('container')

<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Mahasiswa</title>
</head>
<body>
  <h3>Edit Data Mahasiswa</h3>
 
  <a href="/data" class="btn btn-primary"> Kembali</a>
  
  <br/>
  <br/>
 @foreach($Tbl_mahasiswa as $row)
<table border="0" width="1000px">
<form action="/data/update" method="post">
	{{ csrf_field() }}
  <input type="hidden" name="nrp" value="{{ $row->nrp }}"> <br/>
	<tr>
		<td>
  <div class="form-group">
    <label for="nrp">Nrp:</label>
      <input type="text" class="form-control" id="nrp" name="nrp" required="required" value="{{ $row->nrp }}">
  </div>
</td>
<td width="100px">&nbsp;</td>
<td>
  <div class="form-group">
    <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" name="nama" required="required" value="{{ $row->nama }}">
  </div>
</td>
</tr>
<tr>
	<td> &nbsp; </td>
	<td></td>
</tr>
	<tr>
		<td>
  <div class="form-group">
  	
    <label for="email">email:</label>
      <input type="email" class="form-control" id="email" name="email" required="required" value="{{ $row->email }}">

  </div>
</td>
</td>
<td width="100px">&nbsp;</td>
<td>
  <div class="form-group">
    <label for="alamat">Alamat:</label>
      <input type="text" class="form-control" id="alamat" name="alamat" required="required" value="{{ $row->alamat }}">
  </div>
</td>
</tr>
<tr>
	<td> &nbsp; </td>
	<td></td>
</tr>
<tr>
	<td> &nbsp;</td>
	<td> &nbsp; </td>
	<td><button type="submit" class="btn btn-primary" value="edit">Edit</button></td>
</tr>
</form>

</table>
@endforeach
@endsection
