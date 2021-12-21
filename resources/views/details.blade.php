<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <h2>{{$product->title}}</h2>    
    <h3>კატეგორია: {{$product->category}}</h3>    
    <b><h1>{{$product->price}}₾</h1></b>
    <p>{{$product->description}}</p>
    </center>
</body>
</html>