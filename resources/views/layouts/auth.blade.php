<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | PBS</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="font-sans">
    <div class="flex items-center min-h-screen bg-gray-100">
        <div class="flex-1 h-full max-w-4xl mx-auto md:bg-white overflow-hidden rounded-lg md:shadow-xl">
            {{$slot}}
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
