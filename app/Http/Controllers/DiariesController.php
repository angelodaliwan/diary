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

	 public function create()
	 {
		 return view('diaries.create');
	 }
}
