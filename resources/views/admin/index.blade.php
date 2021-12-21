<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('add-product') }}" >Add Product </a>

    <h2>Products</h2>
    <table>
        <tr>
          <th>id</th>
          <th>title</th>
          <th>price</th>
          <th>category</th>
          <th>show on main</th>
          <th>number on main</th>
          <th>edit</th>
          <th>delete</th>
        </tr>
        @foreach($products as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->title}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->category}}</td>
          <td>{{$product->show_on_main}}</td>
          <td>{{$product->number_on_main}}</td>
          <td><a href="{{route('edit-product', $product->id) }}" </a>Edit</td>
          <td>
                <form method="POST" action="{{route('delete-product', $product->id)}}">
                    @method('delete')
                    @csrf
                    <input type="submit" name="submit" value="delete" id="">
                </form>
          </td>
        </tr>
        @endforeach
        
      </table>
</body>
</html>