<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Existing Products</title>
</head>
<body>

    @if(session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <table border="2">
        <tr>
            <td>ID</td>
            <td>PRODUCT NAME</td>
            <td>CATEGORY</td>
            <td>UNIT PRICE</td>
            <td>STATUS</td>
            <td>LAST UPDATED</td>
        </tr>


        @for($i=0; $i < count($product_list); $i++)

        <tr>
            <td> {{ $product_list[$i]['id'] }} </td>
            <td> {{ $product_list[$i]['product_name'] }} </td>
            <td> {{ $product_list[$i]['category'] }} </td>
            <td> {{ $product_list[$i]['unit_price'] }} </td>
            <td> {{ $product_list[$i]['status'] }} </td>
            <td> {{ $product_list[$i]['last_updated'] }} </td>

            <td><a href="/system/product_management/existing_products/edit/{{ $product_list[$i]['id'] }}">Edit</a></td>
            <td><a href="/system/product_management/existing_products/delete/{{ $product_list[$i]['id'] }}">Delete</a></td>
            <td><a href="/system/product_management/existing_products/details/{{ $product_list[$i]['id'] }}">Details</a></td>
        </tr>

        @endfor


    </table>

</body>
</html>