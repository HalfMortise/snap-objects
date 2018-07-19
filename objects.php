<?php
/**
 *
 *
 */

class Computer {

   /**
    *id for this computer mac address
    * @var Integer $computerMacAddress
    */
   private $computerMacAddress;

   /**
    *id for this computer model
    * @var String $computerModel
    */
   private $computerModel;

   /**
    *Constructor follows, per style guide, in alphabetical order (primary key, foreign key, then alphabetical order)
    */
      public function __construct(int $newComputerMacAddress, string $newComputerModel) {
      $this->setComputerMacAddress($newComputerMacAddress);
         $this->setComputerModel($newComputerModel);
      }

   /**
    *accessor method for computer model
    * @return string value of computer model
    */
   public function getComputerModel() : String {
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

   /**
    *accessor method for computer mac address
    * @return integer value of computer mac address
    */
   public function getComputerMacAddress() : Int {
      return($this->computerMacAddress);
   }

   /**
    * mutator method for computer mac address
    *
    * @param String $newComputerMacAddress new value of computer mac address
    * @throws \RangeException if $newComputerMacAddress is not unique
    * @throws \TypeError if $newComputerMacAddress is not an integer
    **/
   public function setComputerMacAddress( $newComputerMacAddress) : void {
      try {
         $int = self::validateInt($newComputerMacAddress);
      } catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
         $exceptionType = get_class($exception);
         throw(new $exceptionType($exception->getMessage(), 0, $exception));
      }

      // convert and store the computer mac address
      $this->computerMacAddress = $int;
   }
}