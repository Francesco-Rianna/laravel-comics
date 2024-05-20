@extends('layouts.app')
@section('content')
    <div class="container">
        <button class="ms-btn-bg-main p-1">Current series</button>
        <div class=" d-flex flex-wrap py-2 gap-2" >
            @foreach ($comics as $comic)
                
            
            <div class="ms-card ">
                <img src="{{$comic['thumb']}}" alt="comic-img">
                <h5> {{$comic['title']}} </h5>
                
            </div>

            @endforeach
            
        </div>
    </div>

@endsection