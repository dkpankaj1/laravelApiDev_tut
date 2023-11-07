<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "id"            => $this->id,
            "customer"      => $this->customer_id,
            "status"        => $this->status,
            'billedDated'   => $this->billed_dated,
            'paidDated'     => $this->paid_dated
        ];
    }
}
