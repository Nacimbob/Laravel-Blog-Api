<?php

namespace Azar\Exceptions;

use Exception;
use Azar\Jsonable\jsonableTrait;

class UnknownException extends Exception
{

    use jsonableTrait;

    public function report(){

    }

    public function render(){
        return $this->invalid("An unknown error occurred while processing your request");
    }

}
