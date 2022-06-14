    @extends('layouts.default')

    @section('pageTitle', 'Lista case')

    @section('mainContent')
    <h1 class="text-center">
        Lista delle case
         <i class="fa-solid fa-home"></i>
    </h1>
    <div class="container">
        <div class="row">
            @foreach($homes as $home)
                <div class="col">
                    <a href="{{route('detail', $home->id )}}" class="btn btn-primary">{{$home->title}}</a>
                </div>
            @endforeach
        </div>
    </div>
    @endsection
