@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">
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
                <a href="" class="btn btn-success">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
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