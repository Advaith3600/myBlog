<!DOCTYPE html>
<html>
    <head>
        <title>Advaith A J</title>
        @include('partials._head')
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
                    <div style="margin-bottom: 40px;">
                        My name is Advaith A J. I am 15 years old.<br>
                        Have lot of experience on web development.<br>
                        Have done many works.<br><br>
                        Tech I use are -- Laravel, Bootstrap, W3CSS, SASS, Vue js, Jquery, Javascript, Css, etc.
                        <br><br>
                        I live near Sree Pazhanchira Devi Temple, India, Kerala, Trivandrum, Paravankunnu.
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
        </div>
    </body>
</html>
