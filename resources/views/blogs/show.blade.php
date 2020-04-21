@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12"><br>
            <br>
            <img src="{{ asset($blog->image) }}" alt="" class="card-img-top">
            <br>
            <br>
            <h3>{{ $blog->title }} </h3>
            <br>
            
            <p class="lead"> {{ $blog->content }}</p>

            <a href="/{{ $blog->id }}/edit" class="btn btn-outline-info" name="edit">  Edit </a>
            <a href="/" class="btn btn-outline-secondary" name="back"> back </a>

            <form action="/blogs/{{ $blog->id}}" method="POST">
                 @csrf
                 @method('DELETE')
                <button type="submit" class="btn btn-outline-danger" name="delete"> Delete </button>
           </form>
        </div>

    </div>
       
@endsection