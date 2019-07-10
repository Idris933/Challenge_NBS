@extends('master')

@section('judul_halaman', 'Halaman Tambah Buku')

@section('konten')

	<a href="/sellbook/list"> Kembali</a>

	<br>

	<form action="/sellbook/proses" method="post">
		{{ csrf_field() }}
		<div class="table-responsive">
		<table class="table">
    <tr>
    	<td width="100px"> ID </td>
			<td><input type="number" name="id" required="required"><br></td>
    </tr>
		<tr>
			<td width="100px"> Nama Buku </td>
			<td><input type="text" name="nama" required="required"> <br/></td>
		</tr>
		<tr>
			<td width="100px"> Stok </td>
			<td><input type="text" name="stok" required="required"> <br/></td>
		</tr>
		<tr>
			<td width="100px"> Harga Buku </td>
			<td><input type="text" name="harga" required="required"> <br/></td>
		</tr>
		<tr>
			<td align="center" colspan="1"><input type="submit" value="Simpan Data" class="btn btn-success btn-md"></td>
		</tr>

		</form>
	</table>
</div>
@endsection
