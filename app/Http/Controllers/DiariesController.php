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

	public function show()
	{
		$diaries = Auth::user()->diaries()->paginate(3);
		return view('diaries.show', compact('diaries'));
	}

	public function create()
	{
		return view('diaries.create');
	}

	public function save(User $user)
	{
		$user->diaries()->create([
		 'user_id' => auth()->user()->id,
		 'diaries_paragraph' => request('diaries_paragraph'),
		 'created_date' =>  request('created_date'),
		]);

		return redirect('/user/' . auth()->user()->id . '/show-diaries');
	}

	public function edit($diary)
	{
		$edit_diary = Diary::findOrFail($diary);
		if(\auth()->user()->id != $edit_diary->user_id)
		{
			return back();
		} else {
			return view('diaries.edit', compact('edit_diary'));
		}
	}

	public function update(Diary $diary)
	{
		$diary->update(request()->all());
		return back();
	}

	public function delete($diary)
	{
		Diary::findOrFail($diary)->delete();
		return back();
	}
}
