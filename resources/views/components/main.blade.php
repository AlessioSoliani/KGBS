<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://api.fontshare.com/v2/css?f[]=rowan@400&f[]=quilon@500&display=swap" rel="stylesheet">
    <title>KGBS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bgrPrimario" >


<x-nav/>



    {{$slot}}
    
</body>
</html>