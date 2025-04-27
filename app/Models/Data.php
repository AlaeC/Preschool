<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $primaryKey = 'id'; // default, but explicitly declared for clarity
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'categorie_id',
        'data_name',
        'image',
        'audio',
        'explication',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }
}
