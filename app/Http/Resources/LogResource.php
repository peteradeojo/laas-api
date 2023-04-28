<?php

namespace App\Http\Resources;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'application' => $this->application->only('title', 'description'),
            'level' => Log::getLevel($this->level),
            'message' => $this->message,
            'origin' => $this->origin,
            'context' => $this->context,
            'extra' => $this->extra,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
