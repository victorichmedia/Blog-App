@extends('layouts.app')

@section('content')
<form action="/blogs/{{ $blog->id}}" method="POST">
 @csrf
 @method('PUT')
    <div class="form-group">
        <label for="title"> Title </label>
        <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
    </div>

    <div class="form-group">
        <label for="content"> Content </label>
        <textarea name="content"  cols="30" rows="10" class="form-control"> {{ $blog->title }} </textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary"> Edit Blog Post </button>
    </div>
</form>
 
@endsection