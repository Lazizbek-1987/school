@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="text-center text-primary">Yangiliklar bilan tanishing.</h1>
            @foreach($news as $news)
                <div class="row mb-5 justify-content-around">
                    <h3 class="text-center text-warning">{{ $news->title }}</h3>
                    <div class="col-4">
                        <img class="img-fluid" src="{{ asset('storage/'.$news->image) }}" alt="">
                    </div>
                    <div class="col-7">
                        <p class="text-secondary">{{ $news->description }}</p>
                    </div>
                </div>
                <hr class="m-3">
            @endforeach
        </div>
    </div>
@endsection
