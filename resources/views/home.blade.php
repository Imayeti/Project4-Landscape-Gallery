@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gallery</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <h1 class="text-center">  Lanscapes</h1>
                  @foreach($landscapes as $landscape)
                  <!-- <ul>
                    <li>{{$landscape->artist}}</li>
                    <li><img src="{{$landscape->url}}"></li>
                  </ul> -->


                  <div class="card mt-5" >
                    <img class="card-img-top" src="{{$landscape->url}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $landscape->exhibit_name }}<span class="ml-5"></span>{{ $landscape->year}}</h5>
                      <p class="card-text">{{ $landscape->artist}}</p>
                      <p class="card-text">{{ $landscape->description }}</p>
                    </div>
                  </div>




                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
