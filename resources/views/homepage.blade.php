<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booldoctors</title>
</head>
<body>
    <div>
        @foreach ($doctors as $doctor)
            <h1>{{$doctor->name}} {{$doctor->surname}}</h1>            
        @endforeach
        
    </div>
</body>
</html>