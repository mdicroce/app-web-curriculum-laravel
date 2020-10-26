@extends('layout')

@section('title','project - content')

@section('content')
<div class="containter">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-6 mx-auto">
        <div class="bg-white p-5 shadow rounded">
            <h1>Portfolio</h1>
            
        </form>
        <h2> {{$project['title']}} </h2>
        <p class="text-secondary"> {{$project['description']}}</p>
        <p class="text-black-50"> Creado : {{$project['created_at']}} </p>
        @auth
        <div class="d-flex justify-content-between align-items-center">
    
            <a href="{{ route('portfolio.index') }}">Regresar</a>
            <div class="btn-group">
                <a class="btn btn-primary" href=" {{route('portfolio.edit', $project)}}">Edit</a>
                <a class="btn btn-danger"onclick="document.getElementById('delete-project').submit()" href="#">Eliminar</a>
                <form class="d-none" action=" {{route('portfolio.destroy',$project)}} " method="POST">
                @csrf @method('DELETE')
            
    
            </div>
        </div>
            
        @endauth
    
        </div>
        </div>
    </div>

</div>

@endsection