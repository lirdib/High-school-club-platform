@extends('layouts.layout')
@section('content')

{{-- Slideshow and about --}}

<div>
    <div class='flex flex-end'>
        <h1 class="text-center" style="text-decoration:underline;">{{$data->emri}}</h1>
        <a href="/k/create">
            <p>Shtoni nje projekt</p>
        </a>
    </div>
    <div class="container mt-5">
        <div class="row">    
        
            <img src="https://www.nicepng.com/png/detail/335-3359813_different-school-clubs.png" class="col-md-7 img-fluid">
            <div class="col-md-4 ml-5 ">
                <h3>About</h3>
                <p class="border" style="">{{$data->description}}</p>       
            </div>

        </div>
        <h1 class="text-center display-3" style="text-decoration:underline; margin-top:200px;">Teachers</h1>
    </div>

    {{-- Teachers --}}
    <div class="container-fluid">
        <div class="row">
        @foreach($teachers as $teacher)
            <div class="col-4 text-center ">
                <img class="m-5 img-fluid max-width:100% height:auto border border-3" src="https://www.w3schools.com/images/w3schools_green.jpg" alt="">
                <h2>Emri Mbiemri {{$teacher->emri}}</h2>
                <h3>Dega</h3>
            </div>
        @endforeach
       
        </div>
    </div>
    
    <hr style="margin-top:50px">
    {{-- Projects --}}
    <div class="container-fluid">
        <div class="col-md-12 row">
            @for($i =0; $i<=4; $i++)
                <div class="col-md-4 mt-2">
                    <h1 class="p-5 border border-3" >projekti 1</h1>
                </div>
            @endfor
        </div>
    </div>
</div>
@endsection