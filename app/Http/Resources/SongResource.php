<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class SongResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'url' => $this->url,
            'author' => $this->author,
            'genre' => $this->genre,
            'likes' => $this->likes,
            'plays' => $this->plays,
            'isLiked' => $this->users()->where('user_id', Auth::user()->id)->exists(),
        ];
    }
}
