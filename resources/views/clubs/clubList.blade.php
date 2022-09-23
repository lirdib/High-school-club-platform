@extends('layouts.dashboardlayout')


@section('content')


<div>
  <a class="baseAlign buttonStyle" href="/klubet/c/create"> New Club + </a>
  @foreach ($data as $dt)
    <div class="row">
        <div>
          <a href="{{ url('/klubet/' . $dt->id) }}" style="text-decoration: none">
            {{ $dt->emri }}
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