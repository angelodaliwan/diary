<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiariesController extends Controller
{
	public function __construct()
	{
		// $this->middleware('auth');
	}

   public function index(){
   		return view('diaries.index');
   }

   public function show(Diary $diary)
   {
   		dd($diary);
   }	
}
