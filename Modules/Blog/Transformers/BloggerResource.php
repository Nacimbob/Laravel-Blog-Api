<?php

namespace Modules\Blog\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class BloggerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
       //dd($this->user->name);
        return array(
            "id" => $this->id,
            "name" => $this->user->name,
            "email" => $this->user->email,
            "pseudo" => $this->pseudo,
            "description" => $this->description,
            "profile" => $this->profile,
            "created_at" => $this->user->created_at
        );
    }
}
