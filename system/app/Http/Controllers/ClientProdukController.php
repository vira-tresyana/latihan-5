<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\ClientProduk;

class ClientProdukController extends Controller{
	

	function index(){
		$data['list_produk'] = Produk::all();
		return view('client/index', $data);

	}


	function create(Produk $produk){
		$data['produk'] = $produk;
		return view('client/beli', $data);
		

	}

	function store(Produk $produk){
		$data['produk'] = $produk;

		$beli = new ClientProduk;
		$beli->nama = request('nama');
		$beli->harga = request('harga');
		$beli->total = request('total');
		$beli->save();

		return redirect('produk')->with('success', 'Barang Berhasil di Masukkan ke Keranjang');
		

	}

	function show(ClientProduk $produk)
	{
		$data['list_keranjang'] = ClientProduk::all();
		return view('client/keranjang', $data);
	}

	function edit(ClientProduk $produk)
	{
		$data['keranjang'] = $produk;
		return view('client/edit', $data);
	}

	function update(ClientProduk $produk)
	{
	
		$produk->total = request('total');
		$produk->save();

		return redirect('keranjang')->with('success','Barang Berhasil di Ubah pada Keranjang');
	}

	function destroy(ClientProduk $produk)
	{
		$produk->delete();

		return redirect('keranjang')->with('danger', 'Barang Berhasil di Hapus dari Keranjang');
	}

}
