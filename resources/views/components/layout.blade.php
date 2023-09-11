<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500&family=Orbitron:wght@500&display=swap" rel="stylesheet">
    
    <title>Document</title>
    

    @vite('resources/css/app.css')
</head>
<body>

    <x-navbar/>
    
    {{$slot}}

    @vite('resources/js/app.js')
</body>
</html>