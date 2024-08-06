<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMenu extends Model
{
    use HasFactory;
    protected $table = '23_user_gallery_access';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
