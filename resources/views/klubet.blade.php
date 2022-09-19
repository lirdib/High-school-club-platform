@extends('layouts.layout')

@section('content')
    <div>
        <div class="width-100 d-flex justify-content-center mt-5">
            <h2 class="">Klubet e deges Elektronik:</h2>
            <h3 class="">Viti 2021-2022</h3>
        </div>


        <div class="col-md-12 row">
            @foreach ($data as $dt)
                <div class="col-md-4 mt-2">
                    <a href="{{ url('/klubet/' . $dt->id) }}" style="text-decoration: none">
                        <form action="/klubet/{{ $dt->id }}" method="get">
                            <div class="card">
                                <div class="card-header">
                                  <img src="img/robot2.jpg" />
                                </div>

                                <div class="card-body">
                                    <h4>{{ $dt->emri }}</h1>
                                    <p>
                                      {{ $dt->description }}
                                    </p>
                                    <div class="user">
                                        <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.shutterstock.com%2Fsearch%2Fno%2Bprofile%2Bimage&psig=AOvVaw1yLoeVu8hTcDcyr6wNRjIA&ust=1647454625735000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMCKoPDcyPYCFQAAAAAdAAAAABAD" />
                                        <div class="user-info">
                                          <h5>Klarens</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
      margin: 10px;
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
</style>

@endsection

