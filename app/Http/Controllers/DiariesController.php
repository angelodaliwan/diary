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

   public function show(User $user)
   {
		$diaries = $user->diaries()->paginate(3);
	  	return view('diaries.show', compact('user', 'diaries'));
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

	 public function edit(User $user, Diary  $diary)
	 {
		 dd($user->id == $diary->user_id);
		 $edit_diary = $diary->find($user->id);
		return view('diaries.edit', compact('diary', 'user'));
	 }
}
