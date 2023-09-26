<?php

namespace App\Enums;

enum BookStatus: int
{
  case AVAILABLE = 1;
  case UNAVAILABLE = 2;

  public function name(): string
  {
    return match($this) {
      self::AVAILABLE => 'available',
      self::UNAVAILABLE => 'unavailable'
    };
  }
}
