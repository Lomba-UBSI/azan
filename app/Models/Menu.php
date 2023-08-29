<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    public function subMenu()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }

    public function parentMenu()
    {
        return $this->hasOne(Menu::class, 'parent_id', 'id');
    }
}
