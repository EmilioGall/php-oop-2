<?php

require_once __DIR__ . '/productCategory.php';
require_once __DIR__ . '/animalCategory.php';
require_once __DIR__ . '/product.php';


class SpecificProduct extends Product
{

   private ProductCategory   $product_category;

   public function __construct(string $_name, float $_price, AnimalCategory $_animal_category, ProductCategory $_product_category)
   {

      parent::__construct($_name, $_price, $_animal_category);

      $this->product_category = $_product_category;
   }

   public function getProductCategory()
   {

      return  $this->product_category;
   }
}
