<?php
namespace Bartero;

use Bartero\Config;

class HelloWorld {
   private $logger;
   public HelloWorld() {
      $this->logger = Config::getLogger();
   }

   public function sayHello() {
      $this->logger->info("Hello Guys!");
   }
}
