<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = '23_menu_galley';
    protected $primaryKey = 'id_menu';

    public function users()
    {
        return $this->belongsToMany(User::class, '23_user_gallery_access', 'menu_id', 'user_gallery_ba_id');
    }
}
