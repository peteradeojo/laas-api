<?php

namespace App\Http\Resources;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LogApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $lastLog = $this->logs()->latest()->first();
        return [
            'id' => $this->uuid,
            'status' => $this->status->only('title', 'description'),
            'name' => $this->title,
            'description' => $this->description,
            'last_log' => $lastLog ? [
                'origin' => $lastLog?->origin,
                'level' => Log::getLevel($lastLog?->level),
                'message' => $lastLog?->message,
                'created_at' => $lastLog?->created_at?->format('Y-m-d H:i:s'),
            ] : null,
        ];
    }
}
