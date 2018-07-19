<?php
/**
 *
 *
 */

class Computer {

   /**
    *id for this computer model
    * @var String $computerModel
    */
   private $computerModel;

   /**
    *id for this computer mac address
    * @var Integer $computerMacAddress
    */
   private $computerMacAddress;

   /**
    *accessor method for computer model
    * @return string value of computer model
    */
   public function getComputerMOdel() : String {
      return($this->computerModel);
   }

   /**
    * mutator method for computer model
    *
    * @param String $newComputerModel new value of computer model
    * @throws \RangeException if $newComputerModel is not unique
    * @throws \TypeError if $newComputerModel is not a string
    **/
   public function setComputerModel( $newComputerModel) : void {
      try {
         $string = self::validateString($newComputerModel);
      } catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
         $exceptionType = get_class($exception);
         throw(new $exceptionType($exception->getMessage(), 0, $exception));
      }

      // convert and store the computer model
      $this->computerModel = $string;
   }
}