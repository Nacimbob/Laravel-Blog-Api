<?php

namespace Modules\Blog\Http\Services;

use Modules\Blog\Http\Repositories\BloggerRepositoryInterface;
use Azar\Exceptions\ResourceNotFoundException;
use Azar\Exceptions\UnknownException;
use Azar\Exceptions\AbortTrait;

class BlogService implements BlogServiceInterface {

    use AbortTrait;

    private $bloggerRepo;

    function __construct(BloggerRepositoryInterface $blogger)
    {
        $this->bloggerRepo=$blogger;
    }

    public function create(array $parameters){
       return $this->bloggerRepo->create($parameters);
    }

    public function update($blogger_id,array $parameters){
        $blogger= $this->existsOrFail($blogger_id);

        if($blogger=$this->bloggerRepo->update($blogger,$parameters)){
           return $blogger;
        }

        $this->abort();
    }

    public function delete($blogger_id){
       $blogger= $this->existsOrFail($blogger_id);

       return $this->bloggerRepo->delete($blogger);
    }

    public function read($blogger_id){
        return  $this->existsOrFail($blogger_id);
    }

    public function existsOrFail($blogger_id){
        if (!$blogger=$this->bloggerRepo->findById($blogger_id)) {
            throw new ResourceNotFoundException('Blogger',$blogger_id);
        }
        return $blogger;
    }

    public function exists($blogger_id){
        if($blogger=$this->bloggerRepo->findById($blogger_id)) {
           return $blogger;
        }
        return false;
    }



}
