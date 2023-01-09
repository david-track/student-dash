<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Log In</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen bg-lime-300">
        {{-- Header --}}
        <div class="h-20 bg-lime-50">
            <header>
                <nav></nav>
            </header>
        </div>
        {{-- Main --}}
        <div class="min-h-full mx-96 my-32 bg-lime-50">
            <main>
                @foreach ($students as $student)
                <p>{{$student->first_name}}  {{$student->last_name}} {{$student->email}} </p>
                @endforeach
            </main>
        </div>
        {{-- Footer  --}}
        <div class="h-14 bg-lime-50">
            <footer>

            </footer>
        </div>
    </div>
</body>

</html>
