<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="updatedname" value="<?php echo $updateProduct["name"];?>">
    <input type="text" name="updatedcategory" value="<?php echo $updateProduct["category_id"];?>">
    <input type="text" name="updatedprice" value="<?php echo $updateProduct["price"];?>">
  </form>

</body>
</html>
