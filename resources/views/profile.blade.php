<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Qrcode Generate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <p>Hello, my name is {{ ucfirst($profile->name) . ' ' . ucfirst($profile->last_name) }}</p>
        <h1>My history</h1>
        <p>{{ $profile->about_me }}</p>
        <a class="btn btn-outline-secondary" href="{{ $profile->linkedin }}" target="_blank">LinkedIn</a>
        <a class="btn btn-outline-secondary" href="{{ $profile->github }}" target="_blank">Github</a>
        <a class="btn btn-outline-secondary" href="{{ $profile->resume }}" target="_blank">Resume</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
