<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Season extends Model
{
    use HasFactory;

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function episodes(){
        return $this->hasMany(Episode::class, 'episodes_id');
    }
}
