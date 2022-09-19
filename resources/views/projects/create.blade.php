@extends('layouts.layout')


@section('content')
<div class='container'>
    <form action="/k" enctype="multipart/form-data" method="post">
        @csrf
    <div class="col-8 offset-2">
        <h1>Shtoni një projekt</h1>
        <div class="form-group row pt-3">

            <label for="dega" class="col-md-4 col-form-label text-md-right">Dega</label>

            <div class="col-md-6">
                <input 
                type="text" 
                class="form-control 
                @error('dega') is-invalid @enderror" 
                name="dega" 
                value="{{ old('dega') }}" required 
                autocomplete="dega" 
                autofocus>

                @error('dega')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <label for="anetaret" class="col-md-4 col-form-label text-md-right">Anetaret</label>

            <div class="col-md-6">
                <input 
                type="text" 
                class="form-control 
                @error('anetaret') is-invalid @enderror" 
                name="anetaret" 
                value="{{ old('anetaret') }}" required 
                autocomplete="anetaret" 
                autofocus>

                @error('anetaret')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <label for="projekti" class="col-md-4 col-form-label text-md-right">Projekti</label>

            <div class="col-md-6">
                <input 
                type="text" 
                class="form-control 
                @error('projekti') is-invalid @enderror" 
                name="projekti" 
                value="{{ old('projekti') }}" required 
                autocomplete="projekti" 
                autofocus>

                @error('projekti')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <label for="supervizori" class="col-md-4 col-form-label text-md-right">Supervizori</label>

            <div class="col-md-6">
                <input 
                type="text" 
                class="form-control 
                @error('supervizori') is-invalid @enderror" 
                name="supervizori" 
                value="{{ old('supervizori') }}" required 
                autocomplete="supervizori" 
                autofocus>

                @error('supervizori')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <button class="btn btn-primary">Add New Post</button>
        </div>
    </div>
</div>
@endsection