<?php

namespace Modules\Blog\Http\Repositories;
use Modules\Blog\Entities\Blogger;

interface BloggerRepositoryInterface {

    public function create(array $attributes);

    public function update(Blogger $blogger,array $parameters);

    public function delete(Blogger $blogger);

    public function findById($id);

}
