@extends('master')

@section('judul_halaman', 'Halamad Edit Data Buku')

@section('konten')

<h3>Edit Data Buku</h3>

	<a href="/sellbook/list"> Kembali</a>

	<br>

	@foreach($buku as $p)
	<form action="/sellbook/update" method="post">
		{{ csrf_field() }}
		<div class="table-responsive">
			<input type="hidden" name="id" value="{{ $p->buku_id }}"> <br/>
		<table class="table">
			<tr>
				<td widht="100px"> Nama Buku </td>
				<td> <input type="text" required="required" name="nama" value="{{ $p->buku_nama }}"> <br/> </td>
			</tr>
			<tr>
				<td widht="100px"> Stok </td>
				<td> <input type="text" required="required" name="stok" value="{{ $p->stok }}"> <br/> </td>
			</tr>
			<tr>
				<td widht="100px"> Harga Buku </td>
				<td> <input type="number" required="required" name="harga" value="{{ $p->harga }}"> <br/> </td>
			</tr>
			<tr>
				<td widht="100px"> <input type="submit" value="Simpan Data" class="btn btn-success btn-md"> </td>
			</tr>
		</table>
</div>
	</form>
	@endforeach
@endsection
