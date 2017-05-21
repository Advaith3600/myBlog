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
                        Hey... I am Advaith A J. I am 15 years old boy who has intrest in Web page developing
                        <br /><br />
                        I have done many local works on different languages.<br />
                        Done many works on web, you can search my Github account to know. Some are listed in  the website.
                        <br /><br />
                        I use Laravel as framework, Sass as css processor, Vue js and Jquery for Javascript, Bootstrap and W3 CSS for styling and lot more
                        <br /><br />
                        You can contact me through Facebook, Twitter, Whatsapp, Gmail, etc.
                        <div class="w3-margin-top">
                            <a href="http://facebook.com/Advaith3600" class="fa fa-facebook" title="Facebook"></a>
                            <a href="http://twitter.com/Advaith3600" class="fa fa-twitter" title="Twitter"></a>
                            <a href="https://www.youtube.com/channel/UCetLIJPB6gJI06jpi5XF3fg" class="fa fa-youtube" title="YouTube"></a>
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
            <div class="thrid-parallax-writting">
                <div class="news-show">
                    <div class="w3-padding-32" style="overflow: hidden; padding-bottom: 0!important; padding-left: 40px; padding-right: 40px;">
                        <?php $c = count($news); $i = 1; ?>
                        @foreach ($news as $new)
                            <div class="mySlides fade in">
                                <div class="col-sm-7">
                                    <?php
                                        echo "<div class='numbertext'>" . $i . " / " . $c . "</div>";
                                        $i++;
                                    ?>
                                    @if ($new->type == 'image')
                                        <div style="height: 500px;">
                                            <img src="{{ $new->attachment }}" style="width: 100%; height: 500px;">
                                        </div>
                                    @else
                                        <div style="height: 500px;">
                                            <iframe src="{{ $new->attachment }}" style="width: 100%; height: 500px;" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-sm-5 textheight">
                                    <div class="text-center w3-text-white w3-padding-16">
                                        <div>
                                            {{ $new->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <div class="col-sm-12 w3-padding-16" style="text-align:center">
                            <?php
                                $count = count($news) + 1;
                                for ($i=1; $i < $count; $i++) {
                                    echo "<span class='dot' onclick='currentSlide(" . $i . ")''></span>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="w3-center w3-padding-16 w3-opacity w3-hover-opacity-off" style="background-color: green; color: white!important">
                <div class="w3-xlarge ">
                    <a href="http://facebook.com/Advaith3600" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
                    <a href="http://twitter.com/Advaith3600" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCetLIJPB6gJI06jpi5XF3fg" class="w3-hover-text-red"><i class="fa fa-youtube"></i></a>
                    <a href="https://www.github.com/Advaith3600" class="w3-hover-text-black"><i class="fa fa-github"></i></a>
                </div>
                <p>Copyright © 2017 | All rights reserved |Developed by Advaith A J</p>
            </footer>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }
            function currentSlide(n) {
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
                setTimeout(showSlides, 2000);
            }
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
        </script>
    </body>
</html>
