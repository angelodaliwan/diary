<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class UsersController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function index()
    {
    	$user = auth()->user();
    	return view('auth.users.edit', compact('user'));
    }
    public function update(Request $request, $user)
    {
		$auth = User::findOrFail($user);

		$this->validate(request(), [
			 'email' =>  'unique:users,email,'. $auth->id,
			 'password' => 'nullable|min:8',
		]);

		$path = request()->file('image')->store('upload_image');

		$auth->name = request('name');
		$auth->email = request('email');
		$auth->image_path = $path;
		$auth->password = bcrypt(request('password'));
		$auth->save();

		return back();
    }
}
