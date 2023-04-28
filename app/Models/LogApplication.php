<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LogApplication extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'user_id',
        'status_id',
        'title',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function token()
    {
        return $this->hasOne(AppToken::class, 'log_application_id');
    }

    public function createToken()
    {
        if ($this->token()->exists()) {
            $this->token()->delete();
        }

        $plainText = Str::random(40);
        $token = $this->token()->create([
            'token' => hash('sha256', $plainText),
        ]);

        return $token;
    }

    public function logs()
    {
        return $this->hasMany(Log::class, 'log_application_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
