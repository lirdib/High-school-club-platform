@extends('layouts.layout')


@section('content')
<div class='container'>
    <form action="/e" enctype="multipart/form-data" method="post">
        @csrf
    <div class="col-8 offset-2">
        <h1>Krijoni një event</h1>
        <div class="form-group row pt-3">

            <label for="titull" class="col-md-4 col-form-label text-md-right mb-4">Titull</label>

            <div class="col-md-6">
                <input
                id="titull"
                type="text" 
                class="form-control 
                @error('titull') is-invalid @enderror" 
                name="titull" 
                value="{{ old('titull') }}" required 
                autocomplete="titull" 
                autofocus>

                @error('titull')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <label for="description" class="col-md-4 col-form-label text-md-right mb-4">Description</label>

            <div class="col-md-6">
                <textarea
                id="description"
                class="form-control"
                name="description" 
                style="height:200px"
                autofocus
                >
                </textarea>

            </div>

            <label for="image" class="col-md-4 col-form-label text-md-right">Imazh</label>

            <div class="col-md-6">
                  <input
                  id="image"
                  type="file" 
                  class="form-control-file"
                  id="image"
                  name="image">
                  @error('image')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="row">
            <button class="btn btn-primary">Add new event</button>
        </div>
    </div>
</div>
@endsection