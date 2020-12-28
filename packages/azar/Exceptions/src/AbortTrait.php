<?php

namespace Azar\Exceptions;

Trait AbortTrait {
      public function abort(){
        throw new UnknownException;
      }
}
