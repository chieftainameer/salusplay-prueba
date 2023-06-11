@extends('layouts.main')

@section('content')
    @foreach($categories as $category)
        <h2 class="mt-3">
            <a class="text-decoration-none" href="{{ route('home.categories.show',$category) }}">{{ $category->title }}</a>
        </h2>
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                @foreach($category->recipes()->visible()->orderBy('published_at','desc')->get() as $recipe)
                    <a href="{{ route('home.recipes.show',$recipe) }}">
                        <img src="{{asset('images/' . $recipe->thumbnail)}}" alt="img" draggable="false">
                    </a>
                @endforeach
            </div>
            <i id="right" class="fa-solid fa-angle-right"></i>
        </div>

    @endforeach

@endsection