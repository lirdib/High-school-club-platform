<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Harry fultz</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    {{-- End CSS --}}
</head>

<div class="gridContainer">

    <div class="myHeader headerDIV" style="background:#003a65;">
        <div class="image-center">
            <img src="https://www.harryfultz.edu.al/wp-content/uploads/2021/07/logo.svg" style="width:250px">
        </div>

        <div class="page">
            <nav class="page__menu page__custom-settings menu">
              <ul class="menu__list r-list">
                <li class="menu__group"><a href="/" class="menu__link r-link text-underlined">Home</a></li>
                <li class="menu__group"><a href="{{ url('klubet') }}" class="menu__link r-link text-underlined">Klubet</a></li>
                <li class="menu__group"><a href="{{ url('eventet') }}" class="menu__link r-link text-underlined">Eventet</a></li>
                <li class="menu__group"><a href="{{ url('kontakt') }}" class="menu__link r-link text-underlined">Kontakt</a></li>
                <li class="menu__group"><a href="{{ url('feedback') }}" class="menu__link r-link text-underlined">Feedback</a></li>
              </ul>
            </nav>
        </div>

        <div class="linktr">
            <a href="{{ route('login') }}" target="_blank" class="linktr__goal r-link">
                Logohu
            </a>
        </div>
    </div>


    <div class="myFooter" class="background:#003a65 !important">
        <div class="row">
            <div class="col-2">
                <div class="row ml-3">
                    <div class="col-12 text-light mb-3">
                        <h3 style = " text-decoration: underline;">Menu</h3>
                    </div>
                    
                    <div class="col-12 text-light mb-3">
                        <h6>Home-Page</h6>
                    </div>
    
                    <div class="col-12 text-light mb-3">
                        Klubet
                    </div>
    
                    <div class="col-12 text-light mb-3">
                        Eventet
                    </div>
    
                    <div class="col-12 text-light mb-3">
                        Regjistrimet
                    </div>
                    
                </div>
            </div>
            <div class="col-10 ">
                <div  class="col-md-7 row mt-5 text-center ">
                    <img src="https://www.harryfultz.edu.al/wp-content/uploads/2021/07/logo.svg" style="width:250px; margin-left:350px;" class="mb-2">
                    <p style="font-size: 20px" class="text-light">
                        Instituti “Harry Fultz”, përmes qëllimeve dhe pritshmërive akademike, ofron të gjitha mundësitë që ju të
                        bëheni pjesë e një mjedisi akademik: një sistemi të konsoliduar, një gërshetim të përgatitjes akademike
                        dhe teknike, një lidhje e ngushtë e teorisë me praktikën dhe gjithçka tjetër e drejtuar nga një staf i
                        specializuar pedagogjik brenda dhe jashtë vendit, i përkushtuar dhe i gatshëm për një punë krijuese
                        metodologjike bashkëkohore.
                    </p> 
                </div>
            </div>
        </div>

    
    <footer class="fixed_footer" class="background:#003a65 !important" >
    <div class="row">
        
        <div class="col-2">
            <div class="row ml-3">
                <div class="col-12 text-light mb-3">
                    <h3 style = " text-decoration: underline;">Menu</h3>
                </div>
                
                <div class="col-12 text-light mb-3">
                    <h6><a href="/">Home-Page</a></h6>
                </div>
                <div class="col-12 text-light mb-3">
                    <a href="{{ url('klubet') }}">Klubet</a>
                </div>

                <div class="col-12 text-light mb-3">
                <a href="{{ url('eventet') }}">Eventet</a>
                </div>
                <div class="col-12 text-light mb-3">
                    Regjistrimet
                    <h4>© Copyright 2021, Harry Fultz Institute | All Right Reserved.</h4>
                </div>

                
                
            </div>
        </div>
        <div class="col-10" >
            <div  class="col-md-10 row mt-5 ml-5 text-center ">
                    <img src="https://www.harryfultz.edu.al/wp-content/uploads/2021/07/logo.svg" style="width:250px; margin-left:500px;" class="mb-3">
                        <p style="font-size: 20px" class="text-light">
                            Instituti “Harry Fultz”, përmes qëllimeve dhe pritshmërive akademike, ofron të gjitha mundësitë që ju të
                            bëheni pjesë e një mjedisi akademik: një sistemi të konsoliduar, një gërshetim të përgatitjes akademike
                            dhe teknike, një lidhje e ngushtë e teorisë me praktikën dhe gjithçka tjetër e drejtuar nga një staf i
                            specializuar pedagogjik brenda dhe jashtë vendit, i përkushtuar dhe i gatshëm për një punë krijuese
                            metodologjike bashkëkohore.
                        </p> 
                        
                    </div>
        </div>
        
    </div>
    
    
    </div>

    <body>
        @yield('content')
    </body>


</div>

<style>
    body{
        grid-area: mainContent;
        justify-content: center;
        align-content: center;
    }

    .gridContainer{
        height: 100vh;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto 1fr auto;
        grid-template-areas: 
            'header'
            'mainContent'
            'footer'; 
    }

    .myHeader{
        grid-area: header;
    }

    .row{
        display: flex;
        flex-wrap: wrap;
        margin-right: 15px;
    }
    .myFooter{
        grid-area: footer;
        background-color: #003a65;
    }

</style>