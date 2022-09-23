@extends('layouts.layout')
@section('content')

{{-- Slideshow and about --}}

<div>
    <div class='flex flex-end'>
        <h1 class="text-center" style="text-decoration:underline;">{{$data->emri}}</h1>
        @if (!Auth::guest())
        <a href="{{ url('/klubet/' . $data->club_id . '/k/create') }}">
            <p>Shtoni nje projekt</p>
        </a>
        @endif
    </div>
    <div class="container mt-5">
        <div class="row">

            <img src="/storage/{{ $data->image }}" class="col-md-7 img-fluid">
            <div class="col-md-4 ml-5 ">
                <h3>About</h3>
                <p class="border" style="">{{$data->description}}</p>
            </div>

        </div>
    </div>

<h1 class="text-center display-3" style="text-decoration:underline; margin-top:200px;">Teachers</h1>
    {{-- Teachers --}}
    <div class="container-fluid">
        <div class="row">
        @foreach($teachers as $teacher)
            <div class="col-4 text-center ">
                <h2>Emri Mbiemri {{$teacher->emri}}</h2>
                <h3>Dega</h3>
            </div>
        @endforeach

        </div>
    </div>
<hr style="margin-top:50px">

{{-- Projects --}}
<h1 class="text-center display-3" style="text-decoration:underline; margin-top:200px;">Projects</h1>

<div class="container-fluid">
    <div class="col-md-12 row">
        @foreach($dataOfProjects as $dp)
        <a href="{{ url('/klubet/'. $data->id . '/projects/' . $dp->idea) }}">
            <div class="card mt-5 mb-5 col-md-4 " style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$dp->projekti}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

<h1>Aplikime per klubim {{$data->emri}}</h1>
<a href="{{ url('/aplikimeklub/' . $data->id) }}">Linku per aplikime</a>
@endsection