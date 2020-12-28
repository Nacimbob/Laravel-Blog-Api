<?php

namespace Modules\Blog\Http\Services;

interface BlogServiceInterface {

    public function create(array $parameters);

    public function update($blogger_id,array $parameters);

    public function delete($blogger_id);

    public function read($blogger_id);

    public function existsOrFail($blogger_id);

    public function exists($blogger_id);

}
