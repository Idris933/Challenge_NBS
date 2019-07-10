@extends('master')

@section('judul_halaman', 'Halaman List Buku')

@section('konten')

<h3>Data Buku</h3>
<a href="/sellbook/add"> + Tambah Buku Baru</a> |
<hr>
<p>Cari Buku</p>
<form  action="/sellbook/search" method="GET">
  <input type="text" name="cari" placeholder="nama buku..." value="{{ old('cari') }}">
  <input type="submit" value="Cari" class="btn btn-primary btn-md">
</form>
<br>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <tr>
      <th width="50px" bgcolor="FF9966" align="center">ID</th>
      <th width="200px" bgcolor="FF9966">Nama Buku</th>
      <th width="100px" bgcolor="FF9966" align="center">Stok</th>
      <th width="100px" bgcolor="FF9966" align="center">Harga Buku</th>
      <th width="150px" bgcolor="FF9966" align="center">Action</th>
    </tr>
    @foreach($buku as $p)
    <tr>
      <td align="center">{{ $p->buku_id}}</td>
      <td>{{ $p->buku_nama}}</td>
      <td align="center">{{ $p->stok}}</td>
      <td align="center">{{ $p->harga}}</td>
      <td align="center">
        <a href="/sellbook/edit/{{ $p->buku_id }}" class="btn btn-warning btn-md">Edit</a>
        <a href="/sellbook/delete/{{ $p->buku_id }}" class="btn btn-danger btn-md">Hapus</a>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection
