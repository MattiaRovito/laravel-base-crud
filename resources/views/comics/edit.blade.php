@extends('layouts.app')

@section('title', 'Creazioni')

@section('content')


<div class="container">
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="titolo" value="{{$comic->title}}">
          </div>
        <div class="mb-3">
          <label for="immagine" class="form-label">Immagine</label>
          <input type="text" name="thumb" class="form-control" id="immagine" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="serie" class="form-label">Serie</label>
            <input type="text" name="series" class="form-control" id="serie" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select name="type" id="tipo" class="form-control">
                <option value="genere" value="{{$comic->type == ‘lunga’ ? ‘selected’ : ‘ ‘ }}">genere 1</option>
                <option value="genere" value="{{$comic->type == ‘lunga’ ? ‘selected’ : ‘ ‘ }}" >genere 2</option>
                <option value="genere" value="{{$comic->type == ‘lunga’ ? ‘selected’ : ‘ ‘ }}">genere 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prezzo" class="form-label">Prezzo</label>
            <input type="text" name="price" class="form-control" id="prezzo" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrizione</label>
            <textarea name="description" id="descrizione" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>



@endsection