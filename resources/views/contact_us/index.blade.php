<!DOCTYPE html>
<html>
    <head>
        <title>Advaith A J - Contact Us</title>
        @include('partials._head')
    </head>
    <body style="background: url(images/6.jpg) center; background-repeat: no-repeat; background-size: auto 100%; background-attachment: fixed;">
        @include('partials._navbar')
        <div style="margin-top: 100px;">
            <div class="container-fluid">
                <div class="w3-padding-32 w3-padding w3-white img-rounded w3-card" style="overflow: hidden;">
                    <div class="col-sm-5">
                        <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJSQkxYTy7BTsRcLzVmnsJvPA&key=AIzaSyCsasGKAJpAGW4pTLYxRtKqLboL-fhuypE" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-7">
                        <form method="POST" style="overflow: hidden;">
                            {{ csrf_field() }}
                            <div class="w3-half w3-margin-bottom">
                                <input class="w3-input w3-border w3-hover-light-grey" type="text" placeholder="Name" name="name">
                            </div>
                            <div class="w3-half w3-margin-bottom">
                                <input class="w3-input w3-border w3-hover-light-grey" type="email" placeholder="Email" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}">
                            </div>
                            <div class="w3-col">
                                <textarea class="w3-input w3-border w3-hover-light-grey" type="text" placeholder="Comment" name="comment" rows="5" cols="40"></textarea>
                            </div>
                            <button class="w3-btn w3-black w3-section w3-right" style="vertical-align:middle" type="submit" value="SEND MESSAGE"><span>SEND MESSAGE</span></button>
                        </form>
                        @if(count($errors) > 0)
                            <div class="w3-panel w3-red w3-display-container w3-round" style="overflow: hidden;">
                                <span onclick="this.parentElement.style.display='none'" class="w3-button w3-red w3-large w3-display-topright">&times;</span>
                                <h3>Error!</h3>
                                <p>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </p>
                            </div>
                        @endif
                        @if(Session::has('success'))
                            <div class="w3-panel w3-green w3-display-container w3-round" style="overflow: hidden;">
                                <span onclick="this.parentElement.style.display='none'" class="w3-button w3-green w3-large w3-display-topright">&times;</span>
                                <h3>Success!</h3>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
