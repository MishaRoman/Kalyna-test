<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class BitcoinRatesResource extends JsonResource
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
            Carbon::parse($this->time_period_start)->timestamp * 1000,
            (double) $this->price_open,
            (double) $this->price_high,
            (double) $this->price_low,
            (double) $this->price_close,
            (double) $this->volume_traded,
        ];
    }
}