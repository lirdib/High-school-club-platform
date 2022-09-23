@extends('layouts.layout')
@section('content')
    <h1 class="text-center">club name</h1>
    @foreach($i=0;$i<=3;$i++)
        
            <h2 class="text-center mt-5">Projekti {{$i}}</h2>
            <h1 class="border border-primary">Slide show</h1>
            
    @endfor

@endsection