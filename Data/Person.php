<?php

class Person
{
   var string $name;
   var ?string $address = null; // BOLEH NULL ?
   var string $country = "Indonesia"; //DEFAULT VALUE

   const AUTHOR = "Programmer Ganteng"; //CONSTANT

   function __construct(string $name, string $address) //CONSTRUCTOR
   {
      $this->name = $name;
      $this->address = $address;
   }

   function sayHello(?string $name) //THIS MEMANGGIL OBJEK YANG SAMA
   {
      if(is_null($name)){
         echo "Hi, my name is $this->name" . PHP_EOL;
      }else{
         echo "Hi $name, my name is $this->name" . PHP_EOL;
      }
   }

   function info()
   {
      echo "Author : " . self::AUTHOR . PHP_EOL; //SELF KEY MEMANGGIL CONSTANT DI DALAM CLASS YANG SAMA
   }

   function __destruct() //DESTUCT MENGHAPUS OBJECT KETIKA PROGRAM BERHENTI MEMPROSES
   {
      echo "Object person $this->name is destroyed" . PHP_EOL;
   }
}
