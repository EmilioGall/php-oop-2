<?php

require_once __DIR__ . '/animalCategory.php';


class Product
{

   private string           $name;
   private float              $price;
   private AnimalCategory   $animal_category;

   public function __construct(string $_name, float $_price, AnimalCategory $_animal_category)
   {

      $this->name             = $_name;
      $this->price            = $_price;
      $this->animal_category  = $_animal_category;
   }

   public function getName()
   {

      return  $this->name;
   }

   public function getPrice()
   {

      return  $this->price;
   }

   public function getAnimalCategory()
   {

      return  $this->animal_category;
   }

}
