<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use App\User;

class DiariesController extends Controller
{
	public function __construct()
	{
		// $this->middleware('auth');
	}

   public function index(){
   		return view('diaries.index');
   }

   public function show($user)
   {
      $user = User::findOrFail($user)->first();
      foreach($user->diaries as $diary)
      {
         dd($diary->diaries_paragraph);
      }
      return view('diaries.show', compact('user'));
   }	
}
