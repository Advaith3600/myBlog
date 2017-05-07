<!DOCTYPE html>
<html>
    <head>
        <title>Profile of {{ Auth::user()->name }}</title>
        @include('partials._head')
    </head>
    <body>
        @include('partials._navbar')
        <div class="home-div" style="overflow: hidden; margin-bottom: 10px;">
            <div style="position: relative;">
                <div class="home-profile_bg" style="background: url({{ Auth::user()->profile_bg }});"></div>
                <img src="{{ Auth::user()->profile }}" alt="Profile Picture" class="profile w3-card img-rounded" width="200" height="200" draggable="false" id="profile-picture">
            </div>
            <div class="container-fluid" style="margin-top: 150px;">
                <form method="post" class="col-sm-8 col-sm-offset-2">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name..." value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email..." value="{{ Auth::user()->email }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="password..." name="password">
                        <p class="help-block w3-text-red"><small><b>Note:</b> If dont want to change password, leave the two fields empty.</small></p>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Retype your password:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="confirm password...">
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio:</label>
                        <textarea class="form-control" id="bio" name="bio" placeholder="Bio..." rows="10">{{ Auth::user()->bio }}</textarea>
                    </div>
                    <input type="submit" value="Update Profile" class="btn btn-success">
                </form>
                @if (count($errors) > 0)
                    <div id="id01" class="w3-modal" style="display: block;">
                        <div class="w3-modal-content">
                            <header class="w3-container w3-red">
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <h2>Error!</h2>
                            </header>
                            <div class="w3-container w3-padding">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
                @if (Session::has('success'))
                    <div id="id01" class="w3-modal" style="display: block;">
                        <div class="w3-modal-content">
                            <header class="w3-container w3-teal">
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <h2>Success!</h2>
                            </header>
                            <div class="w3-container w3-padding">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
