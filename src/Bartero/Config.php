<?php

namespace Bartero;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Config {
   public static function getLogger() {
      // create a log channel
      $log = new Logger('name');
      $log->pushHandler(new StreamHandler('php://stdout', Logger::INFO));

      return $log;
   }
}
