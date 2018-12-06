<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SatuanCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return SatuanItem::collection($this->collection)
        return [
            'message'   => 'ok',
            'code'      => '200',
            'data'      => SatuanItem::collection($this->collection)
        ];
    }
}
