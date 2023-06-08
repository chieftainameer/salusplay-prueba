@extends('layouts.intranet')

@section('content')
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <a href="{{ route('categories') }}" class="btn btn-primary">Go to categories</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Recipes</h5>
                    <a href="{{ route('recipes') }}" class="btn btn-primary">Go to recipes</a>
                </div>
            </div>
        </div>
    </div>
@endsection