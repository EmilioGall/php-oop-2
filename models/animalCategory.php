<?php

require_once __DIR__ . '/../traits/weightable.php';

class AnimalCategory
{
   use Weightable;

   private string $species;
   private string $size;

   public function __construct(string $_species, string $_size)
   {

      $this->species = $_species;
      $this->size    = $_size;
   }

   public function getSpecies()
   {

      return  $this->species;
   }

   public function getSize()
   {

      return  $this->size;
   }
}
