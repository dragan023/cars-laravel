@extends('layouts.master')
@section('content')
<h2>Cars:</h2>
<ol>
    @foreach ($cars as $car)
        <li><a href="/single/{{ $car->id }}">Model: {{ $car->title }}, Producer: {{ $car->producer }}, Number of doors: {{ $car->number_of_doors }}</a></li>
    @endforeach
</ol>
@endsection


