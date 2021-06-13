<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
</head>

<body>
    <style>
        table,
        td,
        th {
            border: blue 1px solid;
        }
    </style>
    <h1>Bill</h1>
    <br>
    <table>
        <th colspan="6">Bill</th>
        <tr>
            <td>Sl. No.</td>
            <td>Item Name</td>
            <td>Item Brand</td>
            <td>Item Price</td>
            <td>Item Code</td>
            <td>Item Quantity</td>
        </tr>
        <tr>
            <td><?php echo $_POST['slno']; ?></td>
            <td><?php echo $_POST['item']; ?></td>
            <td><?php echo $_POST['brand']; ?></td>
            <td><?php echo $_POST['price']; ?></td>
            <td><?php echo $_POST['code']; ?></td>
            <td><?php echo $_POST['qty']; ?></td>

        </tr>
        <tr>
            <td colspan="3" style="text-align: center;">Total : Rs. <?php echo $_POST['price'] * $_POST['qty']; ?></td>
        </tr>
    </table>

</body>

</html>