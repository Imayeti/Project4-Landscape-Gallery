@extends('layouts.app')

@section('content')
<div class="container">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <h1 class="text-center mt-3 ">  Landscapes</h1>
                  <hr>
                  @foreach($landscapes as $landscape)
                  <!-- <ul>
                    <li>{{$landscape->artist}}</li>
                    <li><img src="{{$landscape->url}}"></li>
                  </ul> -->


                  <div class="card mt-5" >
                    <img class="card-img-top" src="{{$landscape->url}}" alt="Card image cap">
                    <div class="card-body">

                      <h4 class="card-title">{{ $landscape->exhibit_name }}<span class="ml-5"></span>{{ $landscape->year}}</h4>
                      <p class="card-text">{{ $landscape->artist}}</p>
                      <p class="card-text">{{ $landscape->description }}</p>
                      <form class="" action="/new_exhibit/{{$landscape->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm bg-transparent float-right" type="submit" name="submit" value="delete"><i class="far fa-trash-alt mr-4"></i></button>
                      </form>
                      <a  href="/new_exhibit/{{$landscape->id}}/edit">EDIT</a>
                    </div>
                  </div>




                  @endforeach

</div>
@endsection
