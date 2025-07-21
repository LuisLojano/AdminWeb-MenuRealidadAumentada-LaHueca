<?php

namespace App\Http\Resources;

use App\MoonShine\Resources\ProductJResource;
use App\MoonShine\Resources\ProductPResource;
use Illuminate\Http\Resources\Json\JsonResource;

class SalesReportResource extends JsonResource
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
            'customer_name' => $this->customer_name,
            'total' => $this->total,
            'created_at' => $this->created_at,
            'product_details' => [
                'platillo' => new ProductPResource($this->platillo),
                'jugo' => new ProductJResource($this->jugo),
            ],
        ];
    }
}