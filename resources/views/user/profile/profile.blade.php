@extends('layouts.app')

@section('content')
    <a class="btn-link" href="{{route('profile.edit',['id'=>auth()->id()])}}">Edit</a>
    {{auth()->user()->name}}
@endsection