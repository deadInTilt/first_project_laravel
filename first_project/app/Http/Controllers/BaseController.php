<?php

namespace App\Http\Controllers;
use App\Services\Post\Service;

class BaseController
{
   public $service;

   public function __construct(Service $service)
   {
      $this->service = $service;
   }
}