<?php

namespace App\Http\Resources;

use App\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class AuctionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user' => new UserResource($this->user),
            'category' => new CategoryResource($this->category),
            'title' => $this->title,
            'description' => $this->description,
            'dimensions' => $this->dimensions,
            'condition' => $this->condition,
            'shipment' => $this->shipment,
            'price' => $this->price,
            'min_bid' => $this->min_bid,
            'isBoosted' => $this->isBoosted,
            'timer' => $this->timer,
            'image' => $this->image,
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at,
        ];
    }
}
