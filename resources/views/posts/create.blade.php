@extends('master')

@section('content')

Create a POst
<hr>
<form method="POST" action="/posts">

    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title"  name="title"  required>
    </div>

    <div class="form-group">
        <label for="body">Body</label>

        <textarea id="body" class="form-control" name="body"></textarea>
    </div>


    <button type="submit" class="btn btn-primary">Publish</button>


    @include('layouts.errors')

</form>

@endsection