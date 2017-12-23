<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="{{ asset('favicon.ico') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
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
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/pace.js') }}"></script>
