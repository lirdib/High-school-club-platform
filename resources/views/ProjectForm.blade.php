@extends('Dashboard')
@section('content')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

   <div style="background-color:#c2cfd1" class="mb-4">
     <h1 >Shtoni kerkesen per projektin tuaj</h1>
    <form action="{{ route('dashboard.project_form.create') }}" method="POST" class="border-3 m-4 mb-4" style="border: 3px solid black; background-color:white;">
    @csrf
      <div class="form-group ">
        <label for="exampleInputEmail1" >Emri i nxenesit</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Emri" name="emriNxensit">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Emri i projektit</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="emriIprojektit">
      </div>
      <div class="form-group input-group mb-3">
        <label for="exampleInputPassword1">Pershkrimi i proejktit</label>
        <textarea rows = "1" cols = "150" name = "pershkrimi_i_projektik">
                Pershrkrimi i projektit
        </textarea>
      </div>

      <label for="cars">Zgjidhni klubin</label>
        <select id="cars" name="klubet" class="form-select" aria-label="Default select example">
            @foreach ($data as $dt)
            <option name="{{$dt->emri}}">{{$dt->emri}}</option>
            @endforeach
        </select>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
@endsection