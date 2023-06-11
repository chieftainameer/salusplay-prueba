@extends('layouts.main')

@section('content')
    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header">
                <h2 class="float-left">
                    <i class="fas fa-file"><!----></i> Title: {{$recipe->title}}
                </h2>
            </div>
            <div class="card-body">

                <dl class="row">
                    <dt class="col-sm-3">Title</dt>
                    <dd class="col-sm-9">
                        {{ $recipe->title }}
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="col-sm-3">Category</dt>
                    <dd class="col-sm-9">
                        <a href="{{ route('home.categories.show',$recipe->category) }}"></a>{{ $recipe->category->title }}
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="col-sm-3">Thumbnail</dt>
                    <dd class="col-sm-9">
                        <img src="{{ asset('images/' . $recipe->thumbnail)}}" alt="{{ $recipe->title }}"
                             class="img-thumbnail" width="300">
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="col-sm-3">Preparation Time</dt>
                    <dd class="col-sm-9">{{ (float)$recipe->preparation_time/60 }} mins</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Rations</dt>
                    <dd class="col-sm-9">{{ $recipe->num_of_rationes }}</dd>
                </dl>

                <dl class="row">
                    <dt class="col-sm-3">Ingredients</dt>
                    <dd class="col-sm-9">{{ $recipe->ingredients }}</dd>
                </dl>
                <dl class="row">
                    <dt class="col-sm-3">Procedure</dt>
                    <dd class="col-sm-9">{!! $recipe->procedure !!}</dd>
                </dl>


            </div>
        </div>
    </div>
@endsection