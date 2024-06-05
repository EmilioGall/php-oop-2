<?php

trait Weightable
{

   private int $animalWeight;

   /**
    * Get the value of animalWeight
    */
   public function getAnimalWeight(): int
   {
      return $this->animalWeight;
   }

   /**
    * Set the value of animalWeight
    *
    */
   public function setAnimalWeight(int $animalWeight): void
   {

      $this->animalWeight = $animalWeight;
   }

   public function getWeightInKg(): float
   {

      return $this->animalWeight / 1000;
   }
}
