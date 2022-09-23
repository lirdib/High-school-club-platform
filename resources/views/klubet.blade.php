@extends('layouts.layout')

@section('content')
<div>
  <div class="width-100 d-flex justify-content-center align-items-baseline mt-5">
      <h2 class="">Klubet e degës Elektronikë: </h2>
      <h2 class="">Viti 2021-2022</h2>

  </div>
  @if($authUserRole == '123')
  <a class="baseAlign buttonStyle" href="/klubet/c/create">
      New Club +
  </a>
  @endif

  <div class="col-md-12 row mt-5">

    @foreach ($data as $dt)
        <div class="col-md-3 mt-2">
            <a href="{{ url('/klubet/' . $dt->id) }}" style="text-decoration: none">
                  <div class="card">
                      <div class="card-header">
                        <img src="/storage/{{ $dt->image }}" />
                      </div>

                        <div class="card-body">
                            <h4> {{ $dt->emri }} </h4>
                            <p>
                              {{ $dt->description }}
                            </p>
                        </div>
                  </div>
            </a>
        </div>
    @endforeach
  </div>
</div>



<style>
      .containerC {
      display: flex;
      width: 1040px;
      justify-content: space-evenly;
      flex-wrap: wrap;
    }
    .card {
      margin: auto;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      width: 300px;
    }
    .card-header img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .card-body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      padding: 20px;
      min-height: 250px;
    }

    .tag {
      background: #cccccc;
      border-radius: 50px;
      font-size: 12px;
      margin: 0;
      color: #fff;
      padding: 2px 10px;
      text-transform: uppercase;
      cursor: pointer;
    }
    .tag-teal {
      background-color: #47bcd4;
    }
    .tag-purple {
      background-color: #5e76bf;
    }
    .tag-pink {
      background-color: #cd5b9f;
    }

    .card-body p {
      font-size: 13px;
      margin: 0 0 40px;
    }
    .user {
      display: flex;
      margin-top: auto;
    }

    .user img {
      border-radius: 50%;
      width: 40px;
      height: 40px;
      margin-right: 10px;
    }
    .user-info h5 {
      margin: 0;
    }
    .user-info small {
      color: #545d7a;
    }
    .buttonStyle{
      text-decoration: none;
      background-color: #47bcd4;
      color: #fff;
      padding: 4px;
      border: #545d7a;
      border-radius: 20px;
      margin-left: 6rem;
    }
</style>

@endsection

