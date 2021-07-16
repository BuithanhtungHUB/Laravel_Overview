<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
</head>
<body>
<h1>Product</h1>
<form action="/product" method="POST">
    @csrf
    <p>
        <input type="text" name="productDescription" placeholder="Product Description">
    </p>
    <p>
        <input type="number" name="price" placeholder="List Price">
    </p>
    <p>
        <input type="number" name="discountPercent" placeholder="Discount Percent">
    </p>
    <p>
        <button type="submit">Calculate Discount</button>
    </p>
</form>
</body>
</html>
