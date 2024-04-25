<?php 

    if(isset($_POST['post']))
    {
        $products = $_POST['product_name'];

        foreach ($products as $key => $value) {
            echo $value . "<br />";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert multiple rows php msyql</title>
</head>

<body>

    <form action="index.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" name="product_name[]" value="Product 1"></td>
                    <td><input type="text" class="form-control" name="product_name[]" value="Product 2"></td>
                    <td><input type="text" class="form-control" name="product_name[]" value="Product 3"></td>
                    <td><input type="text" class="form-control" name="product_name[]" value="Product 4"></td>
                </tr>
            </tbody>
        </table>
        <input type="submit" name="post" value="Submit">
    </form>

</body>

</html>