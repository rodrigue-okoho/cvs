<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'id' => (string)$this->id,
        'name' => $this->name,
        'slug'  => $this->slug,
        'publish_datetime'  => $this->publish_datetime,
        'content'  => $this->content,
        'meta_title'  => $this->meta_title,
        'cannonical_link'  => $this->cannonical_link,
        'meta_keywords'  => $this->meta_keywords,
        'meta_description'  => $this->meta_description,
        'status'  => $this->status,
        'featured_image'  => $this->featured_image,
        'created_by'  => $this->created_by,
        'updated_by'  => $this->updated_by,
        ];

    }
}
