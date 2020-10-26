@extends('layout')

@section('title','Create Project')

@section('content')
    <div class="container">
        <div class="row">
            <div class=" col-12 col-md-10 col-lg-6 mx-auto">
                @include('partials.validation-errors')
                <form class="bg-white py-3 px-3 shadow rounded" method="post" action="{{ route('portfolio.store') }}">
                    <h1>Create new project</h1>
                    
                    @include('partials._form', ['btnText'=> 'Save'])
                    <a href=" {{route('portfolio.index')}} " class="btn btn-link btn-block">Regresar</a>
                    
                </form>
                
            </div>
        </div>
    </div>
@endsection