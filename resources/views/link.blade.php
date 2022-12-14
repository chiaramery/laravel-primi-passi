<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Links</title>
</head>

<body>
    <h1>{{ $titoloLinks }}</h1>
    @foreach ($links as $item)
        <a href="/"></a> {{ $item }}
    @endforeach

</body>

</html>
