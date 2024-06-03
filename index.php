<?php

require_once __DIR__ . '/models/specificPrduct.php';

/**********  INSTANCES FOR ANIMALS CATEGORY  **********/
$animal_category_small_dogs = new AnimalCategory('dogs', 'small');
$animal_category_big_dogs = new AnimalCategory('dogs', 'big');
$animal_category_small_cats = new AnimalCategory('cats', 'small');
$animal_category_big_cats = new AnimalCategory('cats', 'big');

var_dump($animal_big_cats);

/**********  INSTANCES FOR PRODUCTS CATEGORY  **********/
$product_category_food = new ProductCategory('food');
$product_category_kennel = new ProductCategory('kennel');
$product_category_toy = new ProductCategory('toy');




?>


<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Link Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
   <!-- /Link Bootstrap -->

   <title>PHP - OOP - Products</title>

</head>

<body>

   <div class="container-md">

      <h1>Connected</h1>




   </div>

</body>

</html>