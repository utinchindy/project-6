<?php 


namespace App\Http\Controllers;
use App\Models\Produk;

/**
 * 
 */
class ProdukController extends Controller
{
	
	function index()
	{
		$data['list_produk'] = Produk::all();
		return view('admin/produk/index', $data);
	}
	
	function create()
	{
		return view('admin/produk/create');
	}
	
	function store()
	{
		$produk = new Produk;
		$produk->brand = request('brand');
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->stok = request('stok');
		$produk->kategori = request('kategori');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('admin/produk')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(Produk $produk)
	{
		$data['produk'] = $produk;
		return view('admin/produk/show', $data);
	}
	
	function edit(Produk $produk)
	{
		$data['produk'] = $produk;
		return view('admin/produk/edit', $data);
		
	}
	
	function update(Produk $produk)
	{
		$produk->brand = request('brand');
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->stok = request('stok');
		$produk->kategori = request('kategori');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('admin/produk')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(Produk $produk)
	{
		$produk->delete();

		return redirect('admin/produk')->with('danger', 'Data Berhasil di Hapus');
	}
	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		//$data['list_produk'] = Produk::where('nama','like', "%$nama%")->get();
		//$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		

		return view('admin/produk/index', $data);	
	}
}