<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Generator</title>
</head>

<body>
    <h1>Please select item</h1>
    <form action="qqq12.php" method="post">
        <select name="item" id="">
            <option value="pen">Pen</option>
            <option value="pencil">Pencil</option>
            <option value="book">Book</option>
            <option value="eraser">Eraser</option>
            <option value="ruler">Ruler</option>
        </select>
        <table>
            <style>
                table,
                td,
                th {
                    border: black 2px solid;
                }

                table {
                    margin-top: 30px;
                }
            </style>
            <th>Description</th>
            <th>Value</th>

            <tr>
                <td>Sl. No.</td>
                <td><input type="number" name="slno" id=""></td>
            </tr>
            <tr>
                <td>Item Brand</td>
                <td><input type="text" name="brand" id=""></td>
            </tr>
            <tr>
                <td>Item Price</td>
                <td><input type="number" name="price" id=""></td>
            </tr>
            <tr>
                <td>Item Code</td>
                <td><input type="number" name="code" id=""></td>
            </tr>
            <tr>
                <td>Item Quantity</td>
                <td><input type="number" name="qty" id=""></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Generate Bill">

        <input type="reset" value="Reset">

    </form>
</body>

</html>