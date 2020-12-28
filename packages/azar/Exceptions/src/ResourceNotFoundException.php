<?php

namespace Azar\Exceptions;

use Exception;
use Azar\Jsonable\jsonableTrait;

class ResourceNotFoundException extends Exception
{

    use jsonableTrait;
    //
    private $resourceId;

    private $resourceName;

    function __construct($resourceName,$resourceId)
    {
        $this->resourceId=$resourceId;
        $this->resourceName=$resourceName;
    }



    public function report(){

    }

    public function render(){

        return $this->notFound($this->resourceName." identified with the id = ".$this->resourceId." not found");

    }


}
