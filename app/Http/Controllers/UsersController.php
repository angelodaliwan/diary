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
    	// dd(request()->all());
		$auth = User::findOrFail($user);
 		$this->validate(request(), [
			 'email' =>  'unique:users,email,'. $auth->id,
			 'password' => 'nullable|min:8',
			 'image' => 'mimes:jpeg,jpg,png|dimensions:min_width=100,min_height=200',
		]);

		Storage::disk('local')->delete($auth->image_path);
		if(request('image') != null) {
			$upload_image =  request()->file('image')->store('upload_image');
			$auth->image_path = $upload_image; 	
		} else {
			$auth->image_path = "";
		}

		$auth->name = request('name');
		$auth->email = request('email');
		$auth->background_color = request('background_color');
		$auth->password = bcrypt(request('password'));
		$auth->save();

		return back();
    }
}
