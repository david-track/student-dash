<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen bg-lime-300">
 
    @foreach ($students as $student)
        <p>{{$student->first_name}}  {{$student->last_name}} {{$student->email}} </p>
        @endforeach
    </div>
    
</body>
</html>