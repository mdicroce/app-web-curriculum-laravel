@extends('layout')

@section('name','about')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <h1 class="display-4 text-primary">Quién soy</h1>
                <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quo ea nisi nulla repudiandae sint dignissimos! Delectus possimus, maxime asperiores odio pariatur quisquam sint expedita vel, ullam officia earum ut.</p>
                <a href=" {{ route('contact')}} " class="btn-primary btn btn-lg btn-block">Contactame</a>
                <a href=" {{route('portfolio.index')}} " class="btn-outline-primary btn btn-lg btn-block">Portafolio</a>
            </div>
        </div>
    </div>
@endsection