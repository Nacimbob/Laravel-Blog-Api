<?php

namespace Azar\Exceptions;

use Exception;
use Azar\Jsonable\jsonableTrait;

class UnauthorizedException extends Exception
{

    use jsonableTrait;

    public function report(){

    }

    public function render(){
        return $this->unauthorized("you are not authorized");
    }

}
