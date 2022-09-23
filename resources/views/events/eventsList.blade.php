@extends('layouts.dashboardlayout')


@section('content')


<div>
  <a href="/e/create" class="shtoniBTNAlign buttonStyle">New Event +</a>
  @foreach ($data as $dt)
    <div class="row">
        <div>
          <a style="text-decoration: none">
            {{ $dt->titull }}
          </a>
        </div>
        <div>
          <a href="#" style="text-decoration: none">
            Edit
          </a>
        </div>
        <div>
          <a href="#" style="text-decoration: none">
            Delete
          </a>
        </div>
    </div>
    @endforeach

</div>


<style>
  .row {
    margin-top: 20px;
    display: flex;
    border: 2px;
    border-color: black;
    justify-content: space-around;
  }

</style>
@endsection