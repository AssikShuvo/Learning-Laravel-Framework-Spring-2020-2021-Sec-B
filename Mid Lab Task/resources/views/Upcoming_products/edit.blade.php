<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>

    <h3>Edit Product</h3>

    <form method="post">
    @csrf
            <fieldset>
                <legend>Edit Product</legend>
                    <table>

                        <tr>
                            <td>Product Name</td>
                            <td><input type="text" name="product_name" value="{{ $product_list['product_name'] }}"></td>
                        </tr>

                        <tr>
                            <td>Category</td>
                            <td>
                                <select name="category">
                                    <option value="Grocery" @if( $product_list["category"] == "Grocery" ) selected @endif>Grocery</option>
                                    <option value="Medical" @if( $product_list["category"] == "Medical" ) selected @endif>Medical</option>
                                    <option value="Stationary" @if( $product_list["category"] == "Stationary" ) selected @endif>Stationary</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Unit Price</td>
                            <td><input type="text" name="unit_price" value="{{ $product_list['unit_price'] }}"></td>
                        </tr>

                        <tr>
                            <td>Status</td>
                            <td>
                                <select name="status">
                                    <option value="Existing" @if( $product_list["status"] == "Existing" ) selected @endif>Existing</option>
                                    <option value="Upcoming" @if( $product_list["status"] == "Upcoming" ) selected @endif>Upcoming</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Last Updated</td>
                            <td><input type="date" name="last_updated" value="<?php echo date('Y-m-d'); ?>"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Update Product"></td>                            
                        </tr>

                        <tr>
                            <td></td>
                            <td><a href="/system/product_management/upcoming_products">Back</a></td>
                        </tr>

                    </table>
            </fieldset>
        </form>

        @foreach($errors->all() as $err)
            {{ $err }} <br>
        @endforeach

</body>
</html>