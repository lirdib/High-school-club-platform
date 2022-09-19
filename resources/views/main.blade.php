@extends('layouts.layout')

@section('content')


<div>

    <div class="w-100 mt-5">
        <div class="d-flex justify-content-center">
            <h2 class="">Klubet</h2>
        </div>
    </div>

    <div>

        <div class="row justify-content-around shadow-clubs">

            <div class="col-4">
                <div class="w-100 d-flex justify-content-center mt-5">
                    <div class="w-100">
                        <h1 id="" style="font-size: 24px; text-align:center"> Informacion </h1>
                        <h2 id="" style="font-size: 16px; text-align:center">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Eget nunc lobortis mattis aliquam faucibus purus in. Magna eget est lorem ipsum dolor
                            sit amet consectetur adipiscing. Suscipit tellus mauris a diam maecenas sed enim ut sem. Feugiat in ante metus
                            dictum at tempor commodo ullamcorper a. Purus sit amet luctus venenatis lectus magna fringilla. Scelerisque varius
                            morbi enim nunc. Nunc consequat interdum varius sit amet. A condimentum vitae sapien pellentesque habitant morbi
                            tristique senectus et. Posuere morbi leo urna molestie at. Est pellentesque elit ullamcorper dignissim cras
                            tincidunt lobortis feugiat vivamus. Aliquet nec ullamcorper sit amet. Vivamus arcu felis bibendum ut tristique.
                            Lectus sit amet est placerat in egestas erat imperdiet. Ut diam quam nulla porttitor massa id neque aliquam
                            vestibulum. Neque ornare aenean euismod elementum nisi quis. Neque convallis a cras semper auctor neque vitae tempus
                            quam. Enim praesent elementum facilisis leo vel. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada
                            nunc.
                        </h2>
                    </div>
                </div>
            </div>

            <div class="col-6 mt-5" >
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="img/robot1.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="img/robot2.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="img/robot1.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div class="dots">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>

            </div>

    </div>

</div>


<style>
    * {box-sizing:border-box}
    /* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    }
    /* Hide the images by default */
    .mySlides {
    display: none;
    }
    /* Next & previous buttons */
    .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    }
    /* Position the "next button" to the right */
    .next {
    right: 0;
    border-radius: 3px 0 0 3px;
    }
    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
    }
    /* Caption text */
    .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 40px;
    width: 100%;
    text-align: center;
    }
    /* Number text (1/3 etc) */
    .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    }
    /* The dots/bullets/indicators */
    .dots{
        position:absolute;
        
        bottom: 55px;
        margin-left:42%;
        
    }
    .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }
    .active, .dot:hover {
    background-color: #717171;
    }
    /* Fading animation */
    .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation: fade 1.5s 1 forwards
    }
    @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
    }
    @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
    }
</style>

<script type="text/javascript">
    var counter = 1;
    
    var slideIndex = 1;
    var myInterval;
    showSlides(slideIndex);
    // Next/previous controls
    function plusSlides(n) {
    clearTimeout(myInterval);
    showSlides(slideIndex += n);
    }
    // Thumbnail image controls
    function currentSlide(n) {
    clearTimeout(myInterval);
    showSlides(slideIndex = n);
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        
        myInterval = setTimeout(function() {
            plusSlides(1);
        }, 5000);
    }
</script>

@endsection
