<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Harry fultz</title>
  <link rel="stylesheet" href="{{asset('css/rrobotika.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    @foreach($data as $dt)
        <h1>{{$dt['emri ']}}</h1>
    @endforeach

  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
        <ul class="links">
          <li><a href="">Home</a></li>
          <li><a href="{{url('klubet')}}">Klubet</a></li>
          <li>
            <a href="#" class="desktop-link">Shkolla</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Shkolla</label>
            <ul>
              <li><a href="#">Drop Menu 1</a></li>
              <li><a href="#">Drop Menu 2</a></li>
              <li><a href="#">Drop Menu 3</a></li>
              <li><a href="#">Drop Menu 4</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Kontakt</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Kontakt</label>
            <ul>
              <li><a href="#">Drop Menu 1</a></li>
              <li><a href="#">Drop Menu 2</a></li>
              <li><a href="#">Drop Menu 3</a></li>
              <li>
                <a href="#" class="desktop-link">More Items</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">More Items</label>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Feedback</a></li>
        </ul>
      </div>
      <a href="{{ route('login') }}" >
          <input type="submit" value="Logohu" id="btn" / >
      </a>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
  <h1 id="rrobotikaheader">Rrobotika</h1>
  <img src="img/robot1.jpg" id= "robot1">
  <h1 id="rrethRrobotikeHeader">Rreth klubit </h1>
  <p id="rrethRrobotikesPermbajtja">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
  <h1 id="Mesuesit">Mesuesit</h1>

  <div id=fotoMesuesve>
      <img class="fotoMesues" src="img/robot2.jpg">
      <div id="fotoMeShkrim1">
        <h1>Emri Mbiemri</h1>
        <h2>Dega</h2>
      </div >
       <img class="fotoMesues" src="img/robot2.jpg">
       <div id="fotoMeShkrim2">
        <h1>Emri Mbiemri</h1>
        <h2>Dega</h2>
      </div>

      <img class="fotoMesues" src="img/robot2.jpg">
      <div id="fotoMeShkrim3">
        <h1>Emri Mbiemri</h1>
        <h2>Dega</h2>

      </div>
  </div>
 <hr>

 <h1 id="projektHeader">Projektet:</h1>
 <div id="listimiProjekteve">
    <h1 class="projekti">Projekt 1</h1>
    <h1 class="projekti">Projekt 2</h1>
    <h1 class="projekti">Projekt 3</h1>
 </div>
</body>
</html>
