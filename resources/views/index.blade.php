<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
</head>
<body>
    <center>
    @foreach($products as $category => $categoryProducts)
    <h2>კატეგორია: {{ $category }} <br></h2>
    <ul style="list-style-type:none;">
        @foreach($categoryProducts as $item)
       <a href={{route('product-details', $item->id)}}> <h3><li>{{$item->title}} - {{$item->price}}₾</li></h3></a>
        @endforeach
    </ul>
    @endforeach
    </center>
</body>
</html>