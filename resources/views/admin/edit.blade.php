<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    
    <form method="POST" action="{{ route('update-product', $product->id) }}">
        @method('put')
        @csrf
        <input @if($product->show_on_main) checked @endif type="checkbox" name="show_on_main" value="1" id=""> Show on main?
        <br>

        <input type="text" value="{{$product->title}}" name="title" placeholder="title" id="">
        <br>
        <select name="category" id="">
            <option value="0">Select Category</option>
            <option value="სენდვიჩები">სენდვიჩები</option>
            <option value="დესერტები">დესერტები</option>
            <option value="სოუსები">სოუსები</option>

        </select>
        <br>
        <input type="text" value="{{$product->price}}" name="price" placeholder="price" id="">
        <br>
        <input type="number" value="{{$product->number_on_main}}" name="number_on_main" value="0" placeholder="enter order by number on main" id="">
        <br>
        <textarea name="description" placeholder="enter description" id="" cols="30" rows="10">{{$product->title}}</textarea>
        <br>
        <input type="submit" name="submit" value="Update Product" id="">

    </form>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("select").val("{{$product->category}}");
    
    </script>

</body>
</html>