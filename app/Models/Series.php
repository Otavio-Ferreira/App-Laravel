<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Series extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];
    protected $with = ['seasons'];

    public function seasons()
    {
        return $this->hasMany(Season::class, 'series_id');
    }

    protected static function booted(){
        self::addGlobalScope('ordered', function(Builder $quryBuilder) {
            $quryBuilder->orderBy('nome', 'asc');
        });
    }

    public function scopeActive(Builder $query){
        return $query->where('active', true);
    }

}
