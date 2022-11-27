<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<form class="container">
  <div class="mt-2 mb-1">

    <input placeholder="name" type="text" name="name" class="form-control">

  </div>
  <div class="mb-1">

    <input placeholder="category" type="text" name="category" class="form-control">
  </div>

  <div class="mb-1">

    <input placeholder="price" type="text" name="price" class="form-control">
  </div>


    <div class="text-center">

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<br>
<table class="container table table-success table-striped">
  <tbody><tr>
    <th>id</th>
    <th>name</th>
    <th>category</th>
    <th>price</th>
    <th>Operation</th>
  </tr>
    <tr>
    <td>17</td>
    <td>trousera</td>
    <td>clotha</td>
    <td>350</td>
    <td>
        <div class="text-center">

            <a class="btn btn-danger" href="http://ecommerce.test/?id=17">Remove</a>
            <a class="btn btn-success" href="http://ecommerce.test/?id=17&amp;update=1">Modify</a>
        </div>

    </td>
  </tr>
    <tr>
    <td>19</td>
    <td>megz</td>
    <td>megz</td>
    <td>megz</td>
    <td>
        <div class="text-center">

            <a class="btn btn-danger" href="http://ecommerce.test/?id=19">Remove</a>
            <a class="btn btn-success" href="http://ecommerce.test/?id=19&amp;update=1">Modify</a>
        </div>

    </td>
  </tr>


</tbody></table>
<br>




</body>
</html>
