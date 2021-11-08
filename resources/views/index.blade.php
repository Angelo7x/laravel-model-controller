<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-model-controller</title>
</head>
<body>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <h2>Il titolo del film è :{{$movie["title"]}}</h2>
                <h3>Il titolo originale è :{{$movie["original_title"]}}</h3>
                <h3>Lingua : {{$movie["nationality"]}}</h3>
                <h4>La data di uscita è :{{$movie["date"]}}</h4>
                <h5>Il voto è : {{$movie["vote"]}}</h5>
            </li>
        @endforeach
    </ul>

</body>
</html>