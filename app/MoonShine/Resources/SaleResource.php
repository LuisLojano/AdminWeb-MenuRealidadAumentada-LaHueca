<?php

namespace App\Http\Resources;

use App\MoonShine\Resources\ProductJResource;
use App\MoonShine\Resources\ProductPResource;
use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
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
            'pdf_path' => $this->pdf_path,
            'product_p' => new ProductPResource($this->platillo), // Asegúrate de que ProductPResource exista
            'product_j' => new ProductJResource($this->jugo), // Asegúrate de que ProductJResource exista
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
