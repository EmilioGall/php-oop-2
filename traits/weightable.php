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
   public function setAnimalWeight(int $_animalWeight): void
   {

      if ($_animalWeight < 0) {

         throw new Exception("Weight can not be less than 0");
         
      } else {
         
         $this->animalWeight = $_animalWeight;
      }
   }

   public function getAnimalWeightInKg(): float
   {

      return $this->animalWeight / 1000;
   }
}
