<div class="nav-side">
    <ul>
        <li><a href="{{ url('/contact_us') }}">Contact Us</a></li>
        @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @else
            <li><a href="{{ url('home') }}">Profile</a></li>
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
                @if (Auth::guest())
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @else
                    <a href="{{ url('home') }}">Profile</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif
            </span>
        </div>
    </nav>
</div>
<script>
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
