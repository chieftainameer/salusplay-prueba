@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h2>{{ $category->title }}</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach($category->recipes as $recipe)
            <div class="col-sm-12 col-md-6 col-lg-3 mt-5">
                <div class="card" style="width: 15rem;">
                    <img src="{{asset('images/' . $recipe->thumbnail)}}" class="card-img-top" alt="recipe thumbnail">
                    <div class="card-body">
                        <p class="card-subtitle">{{ $recipe->ingredients }}</p>
                        <p class="card-text">{!! \Illuminate\Support\Str::limit($recipe->procedure,50,'...') !!}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('home.recipes.show',$recipe) }}" class="card-link">See Recipe</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection