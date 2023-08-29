<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
{
    public function toArray($request)
    {
      return [
        'id'=>$this->id,
        'name'=>$this->name,
        'description'=>$this->description,
        'price'=>$this->price,
        'photo'=>$this->photo,
        'created_at'=>$this->created_at,
       ];
    }
}
