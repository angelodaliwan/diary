<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use App\User;

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
      return view('diaries.show', compact('users'));
   }

	 public function create(User $user)
	 {
		 return view('diaries.create', compact('user'));
	 }

	 public function save(User $user)
	 {
		//  dd(request('diary_paragraph'));
		//  dd($user, request()->all());
		 $user->diaries()->create([
			 'user_id' => $user->id,
			 'diaries_paragraph' => request('diaries_paragraph'),
			 'created_date' =>  request('created_date'),
		 ]);

		 return back();
	 }
}
