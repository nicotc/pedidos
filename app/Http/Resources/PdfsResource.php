<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PdfsResource extends JsonResource
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
            'hash' => $this->hash,
            'institution_id' => $this->institution_id,
            'author' => $this->author,
            'keywords' => $this->keywords,
            'name' => $this->name,
            'fonasa_ids' => $this->fonasa_ids,
            'fonasa_codes' => $this->fonasa_codes,
            'preparation' => $this->preparation,
            'term' => $this->term,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at
        ];
    }
}
