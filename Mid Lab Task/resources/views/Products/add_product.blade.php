<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>

    <h3>Add Product</h3>

    <form method="post">
    @csrf
            <fieldset>
                <legend>Add Product</legend>
                    <table>

                        <tr>
                            <td>Product Name</td>
                            <td><input type="text" name="product_name"></td>
                        </tr>

                        <tr>
                            <td>Category</td>
                            <td>
                                <select name="category">
                                    <option></option>
                                    <option value="Grocery">Grocery</option>
                                    <option value="Medical">Medical</option>
                                    <option value="Stationary">Stationary</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Unit Price</td>
                            <td><input type="text" name="unit_price"></td>
                        </tr>

                        <tr>
                            <td>Status</td>
                            <td>
                                <select name="status">
                                    <option></option>
                                    <option value="Existing">Existing</option>
                                    <option value="Upcoming">Upcoming</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Added</td>
                            <td><input type="text" name="last_updated" id="datePickerId" onfocus="(this.type='date')" onfocusout="(this.type='text')"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Add"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><a href="/system/product_management">Back</a></td>
                        </tr>

                    </table>
            </fieldset>
        </form>

        @foreach($errors->all() as $err)
            {{ $err }} <br>
        @endforeach

        <script>

            datePickerId.min = new Date().toISOString().split("T")[0];

        </script>

</body>
</html>