@extends('layouts.app')

@section('content')

<h1 class="mt-5 mb-5 text-center">Create a New Exhibit</h1>
<form class="form" action="/new_exhibit/create" method="get">
  @csrf
<div class="container">

  <label for="exhibit_name" class="font-weight-bold ">Exhibit Name</label>
  <input type="text" class="form-control " id="exhibit_name" name="exhibit_name" required>

  <label for="exhibit_year" class="font-weight-bold mt-4">Year Exhibit was created</label>
  <input type="text" class="form-control" id="exhibit_year" name="exhibit_year">

  <label for="exhibit_artist" class="font-weight-bold mt-4">Exhibit Artist</label>
  <input type="text" class="form-control" id="exhibit_artist" name="exhibit_artist" required>

  <label for="exhibit_url" class="font-weight-bold mt-4">Exhibit URL</label>
  <textarea type="text" class="form-control" id="exhibit_url" name="exhibit_url" required></textarea>

  <label for="exhibit_description" class="font-weight-bold mt-4">Exhibit Description</label>
  <textarea type="text" class="form-control" id="exhibit_description" name="exhibit_description"></textarea>

  <button class="btn btn-primary float-right mt-5" type="submit">Submit</button>

</div>

</form>



@endsection
