<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppToken extends Model
{
    use HasFactory;

    protected $guarded = null;

    // protected $hidden = ['log_application_id', 'updated_at', 'created_at', 'id'];

    public function application()
    {
        return $this->belongsTo(LogApplication::class, 'log_application_id');
    }
}
