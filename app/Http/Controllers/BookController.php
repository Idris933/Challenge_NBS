<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\http\Request;

class BookController extends Controller{
  public function home(){
    return view('home');
  }

  public function list(){
    $buku = DB::table('buku')->get();
    return view('list', ['buku' => $buku]);
  }

  public function add(){
    return view('add');
  }

  public function proses(Request $request){
	DB::table('buku')->insert([
    'buku_id' => $request->id,
		'buku_nama' => $request->nama,
		'stok' => $request->stok,
		'harga' => $request->harga,
	]);
  return redirect('/sellbook/list');
  }

  public function edit($id){
	$buku = DB::table('buku')->where('buku_id',$id)->get();
	return view('edit',['buku' => $buku]);
  }

  public function update(Request $request){
	DB::table('buku')->where('buku_id',$request->id)->update([
		'buku_nama' => $request->nama,
		'stok' => $request->stok,
		'harga' => $request->harga,
	]);
	return redirect('/sellbook/list');
  }

  public function delete($id){
    $buku = DB::table('buku')->where('buku_id', $id)->delete();
    return redirect('/sellbook/list');
  }

  public function search(Request $request){
    $cari = $request->cari;

    $buku = DB::table('buku')->where('buku_nama', 'like', "%".$cari."%")->get();

    return view('list', ['buku' => $buku]);
  }
}

?>
