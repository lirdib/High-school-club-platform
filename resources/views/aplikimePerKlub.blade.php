@extends('layouts.layout')


@section('content')



<div class='container'>
    <form action="/aplikimeklub" enctype="multipart/form-data" method="post">
        @csrf
    <div class="col-8 offset-2">
        <h1>Apliko per ne klubin </h1>
        <div class="form-group row pt-3">

            <label for="emri" class="col-md-4 col-form-label text-md-right">Emri</label>

            <div class="col-md-6">
                <input 
                type="text" 
                class="form-control 
                @error('emri') is-invalid @enderror" 
                name="emri" 
                value="{{ old('emri') }}" required 
                autocomplete="emri" 
                autofocus>

                @error('emri')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <label for="mbiemri" class="col-md-4 col-form-label text-md-right">Mbiemri</label>

            <div class="col-md-6">
                <input 
                type="text" 
                class="form-control 
                @error('mbiemri') is-invalid @enderror" 
                name="mbiemri" 
                value="{{ old('mbiemri') }}" required 
                autocomplete="mbiemri" 
                autofocus>

                @error('mbiemri')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

           
    </div>
</div>
@endsection