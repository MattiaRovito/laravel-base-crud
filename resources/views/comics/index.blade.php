@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">
  
    <p>
      @if (session('modifica'))
      <div class="alert alert-success">
      {{ session('modifica') }}
    </div>
    @endif
    @if (session('deleted'))
    <div class="alert alert-danger">
      {{ session('deleted') }}
    </div>
    @endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comics as $comic)
                
           
          <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>
                <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Show</a>

                <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-success">Edit</a>
                
                <form action="{{ route ('comics.destroy',  $comic->id) }} " method="post"  class="d-inline-block">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>
            
          </tr>
          

          
          @endforeach
        </tbody>
      </table>

      <div>
        {{$comics->links()}}
      </div>
</div>



@endsection