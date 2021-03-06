<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curses extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }
}
