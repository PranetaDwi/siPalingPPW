@extends('master')

@section('content')
<h4 style="margin:50px">Tambah Buku</h4>
<form method="post" action="{{ route('store') }}" style="margin:50px">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="judul">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Penulis</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="penulis">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="harga">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal Terbit</label>
        <div class="col-sm-10">
        <input type="text"  class="form-control" name="tgl_terbit">
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a class="btn btn-primary" href="/buku" role="button">Batal</a>
    </div>
</form>
@endsection('content')