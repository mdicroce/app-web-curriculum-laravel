@extends('layout')

@section('title','Edit Project')

@section('content')
    <div class="container">
        <div class="row">
            <div class="bg-white p-5 shadow rounded col-12 col-md-10 col-lg-6 mx-auto"> 
                <h1>Edit project</h1>   
                    @include('partials.validation-errors')
                    <form bg-white py-3 px-3 shadow rounded method="post" action="{{ route('portfolio.update', $project) }}">
                        @method('PATCH')
                        @include('partials._form',['btnText'=> 'Update'])
                        <a href=" {{route('portfolio.index')}} " class="btn btn-link btn-block">Regresar</a>
                    </form>
            </div>
        </div>            
    </div>
@endsection