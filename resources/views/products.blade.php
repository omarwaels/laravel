<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>


<form action="" method="get">
    <label for="name">name</label>
    <input type="text" name="name" >
    <label for="category">category</label>
    <input type="text" name="category" >
    <label for="price">price</label>
    <input type="text" name="price" >
    <br>
    <input type="submit">

</form>
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>category</th>
    <th>price</th>
    <th>Operatin</th>
  </tr>
  @foreach($products as $product)
  <tr>
    <td>{{$product['id']}}</td>
    <td>{{$product['name']}}</td>
    <td>{{$product['category_id']}}</td>
    <td>{{$product['price']}}</td>
    <td>

        <a href="http://ecommerce.test/?id=<?php echo $product['id'];?>">Remove</a>
        <a href="http://ecommerce.test/?id=<?php echo $product['id'];?>&update=1">Modify</a>

    </td>
  </tr>
  @endforeach


</table>
<br>
@if(isset($updateProduct))
<form action="http://ecommerce.test" method="get">
<input type="text" name="updatedname" value="<?php echo $updateProduct["name"];?>">
  <input type="text" name="updatedcategory" value="<?php echo $updateProduct["category_id"];?>">
  <input type="text" name="updatedprice" value="<?php echo $updateProduct["price"];?>">
  <input type="hidden" name="update" value="0">
  <input type="hidden" name="id" value="<?php echo $updateProduct["id"];?>">
  <br>
  <button type="submit">Save</button>
  </form>
@endif

</body>
</html>
