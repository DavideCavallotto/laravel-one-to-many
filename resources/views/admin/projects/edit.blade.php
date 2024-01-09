@extends('layouts.app')

@section('content')
    <section>
        <h1>Projects Edit</h1>
    </section>
    <form action="{{route('admin.projects.update', $project)}}" method="POST">
        @csrf
        @method('PUT')
    
      
        
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Modifica titolo per il progetto">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Modifica descrizione"></textarea>
        </div>    
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="Modifica immagine al tuo progetto">
    
        </div>
    
        <div>
            <input type="submit" class="btn btn-primary" value="Modifica">
        </div>
        
    
    </form>
    <div class="text-center">
        <button><a href="{{route('admin.projects.index')}}">Torna al Catalogo</a></button>
    
    </div>
   
@endsection