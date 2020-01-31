@extends('layouts.master')
@section('content')
<h2>Model: {{ $singleCar->title }}</h2>
<p>Producer: {{ $singleCar->producer }}</p>
<p>Doors: {{ $singleCar->number_of_doors }}</p>
@endsection




