<!DOCTYPE html>
<html>
    <head>
        <title>Advaith A J</title>
        @include('partials._head')
        <link rel="stylesheet" href="{{ asset('css/fa.css') }}">
    </head>
    <body>
        @include('partials._navbar')
        <div class="main-page-div">
            <div class="first-parallax">
                <div style="position: absolute; left: 50%; top: 400px; transform: translate(-50%,0);">
                    <img src="{{ asset('images/2.jpg') }}" alt="Advaith" width="250" height="250" class="img-circle w3-card" draggable="false" style="border: 10px solid #fff;">
                </div>
            </div>
            <div class="first-parallax-writting container">
                <div class="col-sm-6">
                    <h1>ABOUT ME</h1>
                    <div>
                        My name is Advaith A J. I am 15 years old.<br>
                        Have lot of experience on web development.<br>
                        Have done many works.<br><br>
                        Tech I use are -- Laravel, Bootstrap, W3CSS, SASS, Vue js, Jquery, Javascript, Css, etc.
                        <br><br>
                        I live near Sree Pazhanchira Devi Temple, India, Kerala, Trivandrum, Paravankunnu.
                        <div class="w3-margin-top">
                            <a href="http://facebook.com/Advaith3600" class="fa fa-facebook"></a>
                            <a href="http://twitter.com/Advaith3600" class="fa fa-twitter"></a>
                            <a href="https://www.youtube.com/channel/UCetLIJPB6gJI06jpi5XF3fg" class="fa fa-youtube"></a>
                            <a href="#" class="fa fa-pinterest"></a>
                            <a href="http://github.com/Advaith3600" class="fa fa-github"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJSQkxYTy7BTsRcLzVmnsJvPA&key=AIzaSyCsasGKAJpAGW4pTLYxRtKqLboL-fhuypE" allowfullscreen></iframe>
                </div>
            </div>
            <div class="second-parallax">
                <div class="w3-display-middle">
                    <h1 class="w3-black w3-padding-24 container-fluid">MY WORKS</h1>
                </div>
            </div>
            <div class="second-parallax-writting w3-padding-64" style="overflow: hidden;">
                <div class="col-md-4">
                    <div class="w3-card">
                        <img src="{{ asset('images/4.jpg') }}" alt="KESAVAPURAM SREEKRISHNASWAMY TEMPLE" style="width:100%" draggable="false">
                        <div class="container-fluid">
                            <p class="h3">KESAVAPURAM SREEKRISHNASWAMY TEMPLE</p>
                            <p>More details not available</p>
                            <p>Because this website is under construction. It should be hosted inorder to give information regarding that.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-parallax">
                <div class="w3-display-middle">
                    <h1 class="w3-black w3-padding-24 container-fluid">NEWS / UPDATE</h1>
                </div>
            </div>
            <div class="thrid-parallax-writting w3-padding-48 container-fluid">
                <div class="well" style="margin: 0;">

                </div>
            </div>
            <footer class="w3-center w3-padding-16 w3-opacity w3-hover-opacity-off" style="background-color: green; color: white!important">
                <div class="w3-xlarge ">
                    <a href="http://facebook.com/Advaith3600" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
                    <a href="http://twitter.com/Advaith3600" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCetLIJPB6gJI06jpi5XF3fg" class="w3-hover-text-red"><i class="fa fa-youtube"></i></a>
                    <a href="#" class="w3-hover-text-black"><i class="fa fa-pinterest"></i></a>
                    <a href="https://www.github.com/Advaith3600" class="w3-hover-text-black"><i class="fa fa-github"></i></a>
                </div>
                <p>Copyright © 2017 | All rights reserved |Developed by Advaith A J</p>
            </footer>
        </div>
    </body>
</html>
