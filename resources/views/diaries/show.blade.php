@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div>
            <h1>{{$users->name}}</h1>
          </div>
        </div>
        <div class="col-sm-4">
          @foreach($users->diaries as $user)
            <table class="table">
                <thead>
                  <tr>
                    <th>
                      <td>
                        {{$user->diaries_paragraph}}
                      </td>
                    </th>
                  </tr>
                </thead>
            </table>
          @endforeach
        </div>
      </div>
    </div>

@endsection
