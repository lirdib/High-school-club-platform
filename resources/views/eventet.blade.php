@extends('layouts.layout')

@section('content')
  <div>
    <div class=" justify-content-center">
      <h1 class="text-center" style="text-decoration: underline;"> Eventet </h1>
    </div>

    @if($authUserRole == '123')
    <a href="/e/create" class="shtoniBTNAlign buttonStyle">New Event +</a>
    @endif
    <h2 class="p-5 border text-center"> Recent events </h2>
    <hr class="mt-5">

    <div class="col-md-12 row">

        @foreach ($eData as $dt)
          <div class="col-md-4 mt-2 d-flex justify-content-center">
            <div class="card">
              <div class="card-header">
                <img src="/storage/{{ $dt->image }}"/>
              </div>
              <div class="card-body">
                <h4>
                  {{ $dt->titull }}
                </h4>
                <p>
                  {{ $dt->description }}
                </p>
              </div>
              </div>
            </div>
        @endforeach

    </div>

<h1 class="text-center mt-5 mb-5">Upcoming event</h1>
<div class="card" style="margin-left:800px; margin-top:50px;">
  <div class="card-body"style="width:400px;">
    This is some text within a card body.
  </div>
</div>

<style>
.shtoniBTNAlign {
  justify-self: flex-end;
}
.card {
  margin: 10px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  width: 300px;
  margin-top: 2rem;
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
