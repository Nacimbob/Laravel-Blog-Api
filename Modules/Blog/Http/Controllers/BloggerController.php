<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Http\Services\BloggerServiceInterface;
use Azar\Jsonable\jsonableTrait;
use Modules\Blog\Transformers\BloggerResource;

class BloggerController extends Controller
{
    use jsonableTrait;

    private $bloggerService=null;

    function __construct(BloggerServiceInterface $blogger)
    {
        $this->bloggerService=$blogger;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
         return $this->ok("list of bloggers",BloggerResource::Collection($this->bloggerService->all()));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        return $this->created("Blogger created successfully",new BloggerResource($this->bloggerService->create($request->all())));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return $this->ok("blogger readed successfully",new BloggerResource($this->bloggerService->read($id)));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
       return $this->ok("blogger updated successfully",new BloggerResource($this->bloggerService->update($id,$request->all())));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->bloggerService->delete($id);
        return $this->noContent();
    }
}
