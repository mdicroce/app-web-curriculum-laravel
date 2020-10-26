@extends('layout')

@section('title','portfolio')

@section('content')
<div class="container">
    <h1 class="display-4">Portfolio</h1>
    <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum non perspiciatis voluptatibus, iste quidem, </p>
    <ul class="list-group">
        @isset($portfolio)
            @forelse ($portfolio as $portfolioitem)
                <li class="list-group-item border-0 mb-3 shadow-sm"><a class="d-flex justify-content-between align-items-center " href=" {{ route('portfolio.show', $portfolioitem)}} "><span> {{ $portfolioitem->title  }} </span> <span> {{$portfolioitem->created_at->format('d/m/y')}} </span> </a>  </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm"> No hay projectos para mostrar</li>
            @endforelse
        @else
            <li class="list-group-item border-0 mb-3 shadow-sm">No hay projectos para mostrar</li>
        @endisset

    </ul>
    @auth
        <a class="btn btn-primary" href="portfolio/create">Crear nuevo proyecto</a>
    @endauth

</div>

@endsection