<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    /**
     * @var array<string, int>
     */
    public const LEVELS = [
        'emergency' => 4,
        'error' => 3,
        'debug' => 2,
        'info' => 1,
    ];

    protected $guarded = null;

    protected static function booted()
    {
        static::creating(function ($log) {
            $log->level = self::LEVELS[$log->level];
        });
    }

    public function application()
    {
        return $this->belongsTo(LogApplication::class, 'log_application_id');
    }

    public static function getLevel(int $level)
    {
        $levels = array_flip(self::LEVELS);
        return $levels[$level];
    }
}
