<?php

class ProductCategory
{

   private string $type;

   public function __construct(string $_type)
   {

      $this->type = $_type;
   }

   public function getType()
   {

      return  $this->type;
   }
}
