@extends('layout')

@section('name','about')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-6 mx-auto">
            
            
            
            <form class="bg-white shadow rounded py-3 px-3" action=" {{route('contact')}} " method="post">
        
                @csrf
                <h1 class="display-4">Contact</h1>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control bg-light shadow-sm  @error('name') is-invalid @else border-0 @enderror " name="name" type="text" placeholder="Nombre..." value=" {{old('name')}} ">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
        
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control bg-light shadow-sm  @error('name') is-invalid @else border-0 @enderror" type="email" name="email" placeholder="Email..." value=" {{old("email")}} ">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input class="form-control bg-light shadow-sm  @error('name') is-invalid @else border-0 @enderror" type="text" name="subject" placeholder="Asunto..." value=" {{old("subject")}}" >
                    @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
        
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control bg-light shadow-sm  @error('name') is-invalid @else border-0 @enderror " name="content" placeholder="Mensaje" >{{ old("content")}}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
        
                </div>
                <button class="btn btn-primary btn-lg btn-block">Enviar</button>
        
            </form>
        </div>
        
    </div>

</div>
@endsection