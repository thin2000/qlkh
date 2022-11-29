<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'user_notifications',
            'user_id',
            'notification_id'
        );
    }
}
