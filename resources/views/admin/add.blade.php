<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>
    
    <form method="POST" action="{{ route('store-product') }}">
        @csrf
        <input type="checkbox" name="show_on_main" value="1" id=""> Show on main?
        <br>

        <input type="text" name="title" placeholder="title" id="">
        <br>
        <select name="category" id="">
            <option value="0">Select Category</option>
            <option value="სენდვიჩები">სენდვიჩები</option>
            <option value="დესერტები">დესერტები</option>
            <option value="სოუსები">სოუსები</option>

        </select>
        <br>
        <input type="text" name="price" placeholder="price" id="">
        <br>
        <input type="number" name="number_on_main" value="0" placeholder="enter order by number on main" id="">
        <br>
        <textarea name="description" placeholder="enter description" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="submit" value="Add Product" id="">

    </form>

</body>
</html>