@extends('layouts.app')
@section('content')
<h1>liste articles</h1>
    @foreach ($posts as $post)
    <h3><a href="#"> {{ $post }}</a></h3>
    @endforeach
@endsection
