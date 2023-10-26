@extends('master')

@section('title')
  Daftar
@endsection

@section('content')
<br>
<h1>DETAIL BUKU</h1>
<br>
<table class="table">
  <thead>
    <tr class="table-warning">
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$judul}}</td>
      <td>{{$penulis}}</td>
      <td>{{$penerbit}}</td>
      <td>{{$tahun}}</td>
      <td>{{$stok}}</td>
    </tr>
  </tbody>
</table>
<script src="js/script.js"></script>
@endsection('content')