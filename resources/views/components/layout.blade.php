<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>
<body>

    <div>
        <nav>
            <div>
                <a src="{{ Vite::asset('resources/images/logo.svg') }}" alt=""></a>
            </div>

            <div>
                Links
            </div>

            <div>
                Post a job
            </div>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </div>

</body>
</html>
