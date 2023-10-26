@extends('master')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th>no</th>
      <th>Judul Buku</th>
      <th>Penulis</th>
      <th>Harga</th>
      <th>Tgl. Terbit</th>
      <!-- <th>Hapus</th>
      <th>Edit</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($data_buku as $buku)
    <tr>
      <td>{{ ++$no }}</td>
      <td>{{ $buku->judul }}</td>
      <td>{{ $buku->penulis }}</td>
      <td>{{ "Rp ".number_format($buku->harga, 2,',', '.') }}</td>
      <td>{{\Carbon\Carbon::parse($buku->tgl_terbit)->format('d/m/Y')}}</td>
      <td>
      <form action="{{ route('destroy', $buku->id) }}" method="post">
        @csrf
        <button onClick="return confirm('Yakin Mau Dihapus?')">Hapus</button>
      </form>
      </td>
      <td>
      <form action="{{ route('edit', $buku->id) }}">
        @csrf
        <button onClick="return confirm('Yakin Mau edit?')">Edit</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<br>
<a href="{{ route('create') }}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Tambah Buku</a>
<br>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Jumlah Buku</th>
      <th>Total Harga Buku</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $hitung }}</td>
      <td>{{ $totalHarga}}</td>
    </tr>
  </tbody>
</table>


@endsection('content')