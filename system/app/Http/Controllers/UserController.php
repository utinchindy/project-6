<?php 


namespace App\Http\Controllers;
use App\Models\User;

/**
 * 
 */
class UserController extends Controller
{
	
	function index()
	{
		$data['list_user'] = User::all();
		return view('admin/user/index', $data);
	}
	
	function create()
	{
		return view('admin/user/create');
	}
	
	function store()
	{
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		return redirect('admin/user')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(User $user)
	{
		$data['user'] = $user;
		return view('admin/user/show', $data);
	}
	
	function edit(User $user)
	{
		$data['user'] = $user;
		return view('admin/user/edit', $data);
		
	}
	
	function update(User $user)
	{
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		if(request('password')) $user->password = bcrypt(request('password'));
		$user->save();

		return redirect('admin/user')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(User $user)
	{
		$user->delete();

		return redirect('admin/user')->with('danger', 'Data Berhasil di Hapus');
	}
}