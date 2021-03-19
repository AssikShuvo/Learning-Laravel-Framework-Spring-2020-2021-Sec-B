<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Existing Product Details</title>
</head>

<body>

    <h2>Product Details</h2>

    <table>

        <tr>
            <td>Product Name: </td>
            <td>{{ $product_list['product_name'] }}</td>
        </tr>

        <tr>
            <td>Category: </td>
            <td>{{ $product_list['category'] }}</td>
        </tr>

        <tr>
            <td>Unit Price: </td>
            <td>{{ $product_list['unit_price'] }}</td>
        </tr>

        <tr>
            <td>Status: </td>
            <td>{{ $product_list['status'] }}</td>
        </tr>

        <tr>
            <td>Last Updated: </td>
            <td>{{ $product_list['last_updated'] }}</td>
        </tr>

        <tr>
            <td>
                <a class="button" href="/system/product_management/existing_products">Back</a>
            </td>
        </tr>

    </table>

    <style>
        .button {
            display: block;
            width: 70px;
            height: 25px;
            background: #4E9CAF;
            padding: 5px;
            text-align: center;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            line-height: 25px;
}
    </style>
       
</body>
</html>