<?php
namespace Bartero;

use Bartero\Config;

class HelloWorld {
   private $logger;
   public function __construct() {
      $this->logger = Config::getLogger();
   }

   public function sayHello() {
      $this->logger->info("Hello Guys for the 0.2 time!");
      $this->logger->warn("Hello Oleńka!");
   }
}
