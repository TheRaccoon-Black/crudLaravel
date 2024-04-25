<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        <a href="{{route('product.create')}}">create a product</a>
    </div>
    <div>
        @if(session()->has('success'))
            {{session('success')}}
        @endif
        @if(session()->has('delete'))
            {{session('delete')}}
        @endif
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <th>{{$product->id}}</th>
            <th>{{$product->name}}</th>
            <th>{{$product->qty}}</th>
            <th>{{$product->price}}</th>
            <th>{{$product->description}}</th>
            <th>
                <a href="{{route('product.edit',['product'=>$product])}}">Edit</a>
            </th>
            <th>
                <form action="{{route('product.destroy',['product'=>$product])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
            </th>
        </tr>

        @endforeach
    </table>
</body>
</html>
