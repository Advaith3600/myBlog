<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Advaith A J</title>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fa.css') }}">
        <noscript>
            <div class="noscript-bg container-fluid w3-red w3-padding text-center">
                Please enable Javascript for the best experience.<br />
                If you dont know how to enable Javascript then view <a href="https://www.google.co.in/#q=how+to+enable+javascript">this</a>
            </div>
        </noscript>
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div class="nav-side">
            <ul>
                <li><a href="{{ url('/contact_us') }}">Contact Us</a></li>
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li><a href="{{ url('home') }}">Profile</a></li>
                    <li><a href="{{ url('chat') }}">Public Chat</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif
            </ul>
        </div>
        <div style="overflow: hidden;">
            <nav class="nav">
                <a href="{{ url('/') }}">
                    <b>Advaith A J</b>
                </a>
                <div class="pull-right">
                    <a href="#" class="toggle-button">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </a>
                    <span>
                        <a href="{{ url('/contact_us') }}">Contact Us</a>
                        @if (Auth::check())
                            <a href="{{ url('home') }}">Profile</a>
                            <a href="{{ url('chat') }}">Public Chat</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    </span>
                </div>
            </nav>
        </div>
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
                        Hey... I am Advaith A J. I am 15 years old boy who has interest in Web page developing
                        <br /><br />
                        I have done many local works on different languages.<br />
                        Done many works on web, you can search my Github account to know. Some are listed in  the website.
                        <br /><br />
                        I use Laravel as framework, Sass as css processor, Vue js and Jquery for Javascript, Bootstrap and W3 CSS for styling and lot more
                        <br /><br />
                        You can contact me through Facebook, Twitter, Whatsapp, Gmail, etc.
                        <div class="w3-margin-top">
                            <a href="http://facebook.com/Aj3600" class="fa fa-facebook" title="Facebook"></a>
                            <a href="http://twitter.com/Advaith3600" class="fa fa-twitter" title="Twitter"></a>
                            <a href="https://www.youtube.com/c/aj3600" class="fa fa-youtube" title="YouTube"></a>
                            <a href="http://github.com/Advaith3600" class="fa fa-github" title="GitHub"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="googleMap" style="width:100%;height:400px;"></div>
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
                            <p>Because this website is under construction. It should be hosted inorder to give information regarding this.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-parallax">
                <div class="w3-display-middle">
                    <h1 class="w3-black w3-padding-24 container-fluid">NEWS / UPDATE</h1>
                </div>
            </div>
            <div class="thrid-parallax-writting" id="app">
                <news></news>
            </div>
            <footer class="w3-center w3-padding-16 w3-opacity w3-hover-opacity-off" style="background-color: green; color: white!important">
                <div class="w3-xlarge ">
                    <a href="http://facebook.com/Aj3600" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
                    <a href="http://twitter.com/Advaith3600" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.youtube.com/c/aj3600" class="w3-hover-text-red"><i class="fa fa-youtube"></i></a>
                    <a href="https://www.github.com/Advaith3600" class="w3-hover-text-black"><i class="fa fa-github"></i></a>
                </div>
                <p>Copyright © 2017 | All rights reserved | Developed by Advaith A J</p>
            </footer>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/pace.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            var myCenter = new google.maps.LatLng(8.4554519, 76.9499618);
            function initialize() {
                var mapProp = {
                    center: myCenter,
                    zoom: 12,
                    scrollwheel: false,
                    draggable: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                var marker = new google.maps.Marker({
                    position: myCenter,
                });
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
            $(document).ready(function(){
                $(window).scroll(function (event) {
                    var sc = $(window).scrollTop();
                    if (sc > 0) {
                        $('nav.nav').addClass('scroll').addClass('w3-animate-top').addClass('w3-card-4');
                    }
                    else {
                        $('nav.nav').removeClass('scroll').removeClass('w3-animate-top').removeClass('w3-card-4');
                    }
                });
                $('a.toggle-button').click(function(e) {
                    e.preventDefault();
                    $('a.toggle-button').toggleClass("change");
                    $('.nav').toggleClass('stop');
                    $('.nav-side').slideToggle('medium');
                });
            })
        </script>
    </body>
</html>
