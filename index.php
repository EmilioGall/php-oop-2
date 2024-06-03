<?php

require_once __DIR__ . '/models/specificPrduct.php';

/**********  INSTANCES FOR ANIMALS CATEGORY  **********/
$animal_category_small_dogs = new AnimalCategory('dogs', 'small');
$animal_category_big_dogs = new AnimalCategory('dogs', 'big');
$animal_category_small_cats = new AnimalCategory('cats', 'small');
$animal_category_big_cats = new AnimalCategory('cats', 'big');

// var_dump($animal_big_cats);


/**********  INSTANCES FOR PRODUCTS CATEGORY  **********/
$product_category_food = new ProductCategory('food');
$product_category_kennel = new ProductCategory('kennel');
$product_category_toy = new ProductCategory('toy');

// var_dump($product_category_toy);


/**********  INSTANCES FOR PRODUCTS  **********/
$products_array = [];

/* Creation of product_1 array */
$product_1 = new SpecificProduct('Top food for big dogs', 25.5, $animal_category_big_dogs, $product_category_food);

$product_1_array = [];

$product_1_name = $product_1->getName();
$product_1_array['name'] = $product_1_name;

$product_1_name = $product_1->getPrice();
$product_1_array['price'] = $product_1_name;

$product_1_name = $product_1->getAnimalCategory()->getSize() . ' ' . $product_1->getAnimalCategory()->getSpecies();
$product_1_array['animal_category'] = $product_1_name;

$product_1_name = $product_1->getProductCategory()->getType();
$product_1_array['product_category'] = $product_1_name;

// var_dump($product_1_array);
$products_array[] = $product_1_array;

/* Creation of product_2 array */
$product_2 = new SpecificProduct('Best toy for small cats', 12.4, $animal_category_small_cats, $product_category_toy);

$product_2_array = [];

$product_2_name = $product_2->getName();
$product_2_array['name'] = $product_2_name;

$product_2_name = $product_2->getPrice();
$product_2_array['price'] = $product_2_name;

$product_2_name = $product_2->getAnimalCategory()->getSize() . ' ' . $product_2->getAnimalCategory()->getSpecies();
$product_2_array['animal_category'] = $product_2_name;

$product_2_name = $product_2->getProductCategory()->getType();
$product_2_array['product_category'] = $product_2_name;

// var_dump($product_2_array);
$products_array[] = $product_2_array;

/* Creation of product_3 array */
$product_3 = new SpecificProduct('Beautiful kennel for small dogs', 52.6, $animal_category_small_dogs, $product_category_kennel);

$product_3_array = [];

$product_3_name = $product_3->getName();
$product_3_array['name'] = $product_3_name;

$product_3_name = $product_3->getPrice();
$product_3_array['price'] = $product_3_name;

$product_3_name = $product_3->getAnimalCategory()->getSize() . ' ' . $product_3->getAnimalCategory()->getSpecies();
$product_3_array['animal_category'] = $product_3_name;

$product_3_name = $product_3->getProductCategory()->getType();
$product_3_array['product_category'] = $product_3_name;

// var_dump($product_3_array);
$products_array[] = $product_3_array;

/* Creation of product_4 array */
$product_4 = new SpecificProduct('Top food for big cats', 18.4, $animal_category_big_cats, $product_category_food);

$product_4_array = [];

$product_4_name = $product_4->getName();
$product_4_array['name'] = $product_4_name;

$product_4_name = $product_4->getPrice();
$product_4_array['price'] = $product_4_name;

$product_4_name = $product_4->getAnimalCategory()->getSize() . ' ' . $product_4->getAnimalCategory()->getSpecies();
$product_4_array['animal_category'] = $product_4_name;

$product_4_name = $product_4->getProductCategory()->getType();
$product_4_array['product_category'] = $product_4_name;

// var_dump($product_4_array);
$products_array[] = $product_4_array;

/* Creation of product_5 array */
$product_5 = new SpecificProduct('Best toy for big dogs', 12.4, $animal_category_big_dogs, $product_category_toy);

$product_5_array = [];

$product_5_name = $product_5->getName();
$product_5_array['name'] = $product_5_name;

$product_5_name = $product_5->getPrice();
$product_5_array['price'] = $product_5_name;

$product_5_name = $product_5->getAnimalCategory()->getSize() . ' ' . $product_5->getAnimalCategory()->getSpecies();
$product_5_array['animal_category'] = $product_5_name;

$product_5_name = $product_5->getProductCategory()->getType();
$product_5_array['product_category'] = $product_5_name;

// var_dump($product_5_array);
$products_array[] = $product_5_array;

/* Creation of product_6 array */
$product_6 = new SpecificProduct('Beautiful kennel for big dogs', 71.2, $animal_category_big_dogs, $product_category_kennel);

$product_6_array = [];

$product_6_name = $product_6->getName();
$product_6_array['name'] = $product_6_name;

$product_6_name = $product_6->getPrice();
$product_6_array['price'] = $product_6_name;

$product_6_name = $product_6->getAnimalCategory()->getSize() . ' ' . $product_6->getAnimalCategory()->getSpecies();
$product_6_array['animal_category'] = $product_6_name;

$product_6_name = $product_6->getProductCategory()->getType();
$product_6_array['product_category'] = $product_6_name;

// var_dump($product_6_array);
$products_array[] = $product_6_array;


// var_dump($products_array);

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

      <!-- Title -->
      <h1 class="fs-1 text-primary text-center my-4">Products List</h1>
      <!-- /Title -->

      <!-- Cards Section -->
      <section class="row g-4 mb-5">

         <?php foreach ($products_array as $key => $product) { ?>
            <div class="col-4">

               <div class="card">

                  <div class="card-body">

                     <h3 class="card-title"><?php echo $product['name']; ?></h3>

                     <h6 class="card-subtitle mb-2 text-body-secondary"> Price: <?php echo $product['price']; ?>0 €</h6>

                     <div class="mb-4">

                        <p class="card-text my-1">Animal Category: <?php echo $product['animal_category']; ?></p>

                        <p class="card-text my-1">Product Category: <?php echo $product['product_category']; ?></p>

                     </div>

                     <div class="d-flex justify-content-between">

                        <button type="button" class="btn btn-primary">Add to Cart</button>

                        <button type="button" class="btn btn-outline-info">Add to Favorites</button>

                     </div>

                  </div>
               </div>

            </div>
         <?php } ?>

      </section>
      <!-- /Cards Section -->

   </div>

</body>

</html>