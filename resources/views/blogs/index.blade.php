@extends('layouts.app')

@section('content')

 
<div class="row">


@foreach($blogs as $blog) 
    <div class="col-md-6">
    <br>
    <br>
    <br>

        <div class="card">
            <div class="card-header">
             <a href="/blogs/{{ $blog->id }}" >  {{ $blog->title}} </a>
            </div>
        
            <div class="card-body">
                <a href="/blogs/{{ $blog->id }}">
                    <img src="{{ asset($blog->image) }}" alt="" class="card-img-top">
                </a>
            <br>
            <br>
            <br>
            
            <p class="lead">
            Posted
            {{ $blog->created_at->diffForHumans() }}

            </p>

            <a href="/blogs/{{ $blog->id }}" class="btn btn-outline-primary"> View Post </a>
            </div>
        </div>
     </div>
@endforeach
</div>



  


@endsection