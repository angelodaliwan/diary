<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use App\User;
use Illuminate\Support\Facades\Auth;

class DiariesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

   public function index(){
   		return view('diaries.index');
   }

   public function show($user)
   {
      $users = User::findOrFail($user)->first();
			$diaries = $users->diaries()->paginate(3);
      return view('diaries.show', compact('users', 'diaries'));
   }

	 public function create(User $user)
	 {

		 return view('diaries.create', compact('user'));
	 }

	 public function save(User $user)
	 {

		 $user->diaries()->create([
			 'user_id' => $user->id,
			 'diaries_paragraph' => request('diaries_paragraph'),
			 'created_date' =>  request('created_date'),
		 ]);

		 return back();
	 }
}
